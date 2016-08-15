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


use App\Doctor;
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
        $profile = Auth::user();
        // $profile = User::find($profile_id);
        $doctor=Doctor::find($id);

        // if(!$profile) {
        //     return redirect()->route('logout')->with(['fail' => 'Profile Not Found']);
        // }

        if($profile->id == $doctor->id) {
        return view('admin.article.index')
        ->with('profile',$profile)
        ->with('doctor',$doctor);
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getUpdate($id) {

        $profile = Auth::user();
        $doctor=Doctor::find($id);

        // $post = Post::find($post_id);
        // if(!$post) {
        //     return redirect()->route('blog.index')->with(['fail' => 'Post Not Found']);
        // }
        return view('admin.article.edit')
        ->with('profile',$profile)
        ->with('doctor',$doctor);
    }

    public function postUpdate(Request $request ) {

        $this->validate($request, [
            'name' => 'required|max:120',
            'fee' => 'required|max:5',
            'education' => '',
            'institute' => '',
            'specialty' => '',
            'hospital' => '',
            'time' => '',
            'phone' => ''

            ]);

        $doctor = Doctor::find($request['id']);
        $doctor->name = $request['name'];
        $doctor->institute = $request['institute'];
        $doctor->education = $request['education'];
        $doctor->specialty = $request['specialty'];
        $doctor->hospital = $request['hospital'];
        $doctor->phone = $request['phone'];
        $doctor->time = $request['time'];
        $doctor->fee = $request['fee'];

        // $file = Input::file('pic');
        // $img = Image::make($request->file('pic')->getRealPath());
        // //$img = Image::make($file);
        // Response::make($img->encode('jpeg'));

        // $doctor->pic = $img;
        $doctor->update();

        return redirect()->route('profile')->with(['success' => 'Profile Successfully Updated']);

        // $this->validate($request, [
        //     'name' => 'required|max:120',
        //     'username' => 'required|max:80'
        //     ]);

        // $credentials = $request->only(
        //             'name', 'email'
        //     );

        //  // save users table
        // // $profile = Auth::user();
        // $profile = \Auth::user();
        //     $profile->name = $credentials['name'];
        //     $profile->username = $credentials['username'];
        //     $profile->save();
        //     return redirect('profile/'.$profile->id);

        // // save doctor table
        // DB::table('doctors')//change this to doctors
        //     ->update([
        //         'hospital'    =>  $profile->input('hospital'),
        //         'education'       =>  $profile->input('education')
        //     ]); 


        // return redirect()->route('profile')->with(['success' => 'Profile Successfully Updated']);
    }

    // public function update(Request $request){
    //     $this->validate($request, [
    //         'name' => 'required|max:120',
    //         'username' => 'required|max:80',
    //         'email' => 'required',
    //         'password' => 'required'
    //         ]);

    //      // save users table
    //     $profile = Auth::user();
    //     // $user = new App\User;
    //     $profile->name = $request->input('name');
    //     $profile->email = $request->input('email');
    //     $profile->username = $request->input('username');
    //     $profile->password = $request->input('password');
    //     $profile->update();

    //     // save doctor table
    //     DB::table('doctor')
    //     ->update(
    //         'id'        =>  $profile->id,
    //         'gender'    =>  $profile->input('hospital'),
    //         'age'       =>  $profile->input('education')
    //     );  

    //     // set a flush message and redirect()->back();
    //     return TRUE;

    //     return redirect()->route('profile')->with(['success' => 'Profile Successfully Updated']);
    // }



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
