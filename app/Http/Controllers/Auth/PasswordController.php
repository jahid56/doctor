<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Division;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getEmail(Request $request)
        {
            $divisions = Division::all();
            $request->session()->flash('alert-success', 'Your Password Reset Link Sent Successfully!');
            return view('auth.password',['divisions' => $divisions]);
        }

        public function getReset($token = null,Request $request)
        {
            $divisions = Division::all();
            if (is_null($token))
            {
                throw new NotFoundHttpException;
            }

            $request->session()->flash('alert-success', 'Your Password Reset Link Sent Successfully!');

            return view('auth.reset',['divisions' => $divisions])->with('token', $token);
        }
}
