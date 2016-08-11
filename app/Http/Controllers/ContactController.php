<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Division;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view('users.contact');
    }

    public function getContactIndex()
    {

        $divisions = Division::all();
    //     return view('users.contact-us',['divisions' => $divisions]);
        return view('users.contact',['divisions' => $divisions]);
    }

    public function postSendMessage(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:55',
            'email' => 'required|email|max:55',
            'division' => 'required|max:255',
            'subject' => 'required|max:100',
            'message' => 'required|min:15',
        ]);

        $message= New Contact();
        $message->email=$request['email'];
        $message->name=$request['name'];
        $message->division=$request['division'];
        $message->subject=$request['subject'];
        $message->message=$request['message'];
        $message->save();

        $request->session()->flash('alert-success', 'Your Message Sent Successfully!');

        return redirect()->route('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
