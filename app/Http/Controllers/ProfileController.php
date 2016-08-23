<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Image;
use App\Division;
use App\District;
use App\Dcategory;
use App\Doctor;
use App\Photo;
use App\Serial;
use App\User;
use DB;
use Auth;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $divisions = Division::all();
        $profile = Auth::user();

        // if(!$profile) {
        //     return redirect()->route('logout')->with(['fail' => 'Profile Not Found']);
        // }

        
        return view('admin.article.index')
        ->with('divisions',$divisions)
        ->with('profile',$profile);
    
    }

    public function seriallist()
    {
        $divisions = Division::all();
        $profile = Auth::user();

        // if(!$profile) {
        //     return redirect()->route('logout')->with(['fail' => 'Profile Not Found']);
        // }

        
        return view('admin.article.serial')
        ->with('divisions',$divisions)
        ->with('profile',$profile);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function getSerial()
    {
        $divisions = Division::all();
        $profile = Auth::user();
		$serial=Serial::all();

        // if(!$profile) {
        //     return redirect()->route('logout')->with(['fail' => 'Profile Not Found']);
        // }


       
        return view('admin.article.new')
        ->with('divisions',$divisions)
		->with('profile',$profile)
		->with('serial',$serial);
  
    }

    public function getSerialInfo($id)
    {
        $divisions = Division::all();
        $profile = Auth::user();
        $serials=Serial::all();
        $serial=Serial::find($id);

        // if(!$profile) {
        //     return redirect()->route('logout')->with(['fail' => 'Profile Not Found']);
        // }


       $doctors = Serial::where('doctor_id',$id)->get();
        return view('admin.article.serial')
        ->with('divisions',$divisions)
        ->with('profile',$profile)
		->with('serials',$serials)
		->with('serial',$serial)
		->with('doctors',$doctors);
  
    }
	
	
	public function getPatientInfo($id)
    {
        $divisions = Division::all();
        $profile = Auth::user();
        $serials=Serial::all();
        $serial=Serial::find($id);

        // if(!$profile) {
        //     return redirect()->route('logout')->with(['fail' => 'Profile Not Found']);
        // }


       $doctors = Serial::where('doctor_id',$id)->get();
        return view('admin.article.patient')
        ->with('divisions',$divisions)
        ->with('profile',$profile)
		->with('serials',$serials)
		->with('serial',$serial)
		->with('doctors',$doctors);
  
    }
  




    public function getUpdate() {
        $divisions = Division::all();
        $districts = District::all();
        $dcategories = Dcategory::all();
        $profile = Auth::user();
        // $photo = Photo::find($id);


        // $post = Post::find($post_id);
        // if(!$post) {
        //     return redirect()->route('blog.index')->with(['fail' => 'Post Not Found']);
        // }
        return view('admin.article.edit')
        ->with('divisions',$divisions)
        ->with('districts',$districts)
        ->with('dcategories',$dcategories)
        ->with('profile',$profile);
    }

    public function postUpdate(Request $request ) {

        $this->validate($request, [
            'name' => 'required|max:120',
            'fee' => 'required|max:5',
            'division_id' => '',
            'district_id' => '',
            'dcategory_id' => '',
            'education' => '',
            'institute' => '',
            'specialty' => '',
            'hospital' => '',
            'time' => '',
            'phone' => '',
            'image' =>''            
            ]);
            
            
        $doctor = Auth::user();
        $doctor->name = $request['name'];
        $doctor->division_id = $request['division_id'];
        $doctor->district_id = $request['district_id'];
        $doctor->dcategory_id = $request['dcategory_id'];
        $doctor->institute = $request['institute'];
        $doctor->education = $request['education'];
        $doctor->specialty = $request['specialty'];
        $doctor->hospital = $request['hospital'];
        $doctor->phone = $request['phone'];
        $doctor->time = $request['time'];
        $doctor->fee = $request['fee'];

        // $photo = Photo::find($request['id']);
        $logo=$request->file('image');
        if(!empty($logo)) {
            $upload='uploads/logo';
            $filename=$logo->getClientOriginalName();
            $success=$logo->move($upload,$filename);
            
            $doctor->image = $filename;
        }
        
        
        
        // $file = Input::file('pic');
        // $img = Image::make($request->file('pic')->getRealPath());
        // //$img = Image::make($file);
        // Response::make($img->encode('jpeg'));

        // $doctor->pic = $img;
        $doctor->update();
        

        return redirect()->route('profile')->with(['success' => 'Profile Successfully Updated']);
   
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
