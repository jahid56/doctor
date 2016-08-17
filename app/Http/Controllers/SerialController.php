<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Serial;
use App\Division;
use App\Doctor;
class SerialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function getSerial($id)
    {

        $divisions = Division::all();
        $doctor=Doctor::find($id);
    //     return view('users.contact-us',['divisions' => $divisions]);
        return view('users.serial')
        ->with('divisions',$divisions)
        ->with('doctor',$doctor);
    }

    public function postSerial(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:55',
            'email' => 'required|email|max:55',
            'mobile' => 'required|max:11',
            'date' => 'required',
            'problem' => 'required|min:15',
        ]);

        $message= New Serial();
        $message->email=$request['email'];
        $message->name=$request['name'];
        $message->mobile=$request['mobile'];
        $message->date=$request['date'];
        $message->problem=$request['problem'];
        $message->save();

        $request->session()->flash('alert-success', 'Your Serial has been recorded!');

        return redirect()->route('serial');
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
