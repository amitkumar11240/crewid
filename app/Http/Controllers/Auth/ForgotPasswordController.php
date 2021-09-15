<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{

  
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;


    public function sendResetLinkEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);
        $user_check = User::where('email', $request->email)->first();
    
        if (!$user_check) {
            return back()->with('status', "$request->email not registered yet. Please register it first.");
        } 

        else {
            $response = $this->broker()->sendResetLink(
                $request->only('email')
            );
    
            if ($response === Password::RESET_LINK_SENT) {
                return back()->with('status', trans($response));
            }
    
            return back()->withErrors(
                ['email' => trans($response)]
            );
        }
    } 
}
