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
use DB;
use Auth;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($id)
    {
        $divisions = Division::all();
        $profile = Auth::user();
        // $profile = User::find($profile_id);
        $doctor=Doctor::find($id);
        $photo = Photo::find($id);

        // if(!$profile) {
        //     return redirect()->route('logout')->with(['fail' => 'Profile Not Found']);
        // }

        if($profile->id == $doctor->id) {
        return view('admin.article.index')
        ->with('divisions',$divisions)
        ->with('profile',$profile)
        ->with('doctor',$doctor)
        ->with('photo',$photo);
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getUpdate($id) {
        $divisions = Division::all();
        $districts = District::all();
        $dcategories = Dcategory::all();

        $profile = Auth::user();
        $doctor=Doctor::find($id);
        $photo = Photo::find($id);


        // $post = Post::find($post_id);
        // if(!$post) {
        //     return redirect()->route('blog.index')->with(['fail' => 'Post Not Found']);
        // }
        return view('admin.article.edit')
        ->with('divisions',$divisions)
        ->with('districts',$districts)
        ->with('dcategories',$dcategories)
        ->with('profile',$profile)
        ->with('doctor',$doctor)
        ->with('photo',$photo);
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

        $doctor = Doctor::find($request['id']);
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

        $photo = Photo::find($request['id']);
        $logo=$request->file('image');
        $upload='uploads/logo';
        $filename=$logo->getClientOriginalName();
        $success=$logo->move($upload,$filename);
        if($success) {
            $photo->image = $filename;
            $photo->update();
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
