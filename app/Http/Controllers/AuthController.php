<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Log;

class AuthController extends Controller
{
    
    public function login(Request $request)
    {
        $requested_path = $request->path();
        if (Auth::user()) 
        {
            if(Auth::user()->role == 'crew')
            {
                return redirect('/home');
            }
           
            
            return redirect('/producerDashboard');
        }
       

        //Checks request method is post
        if ($request->method() == 'POST') 
        {
            

            //user requested data
            $user_data = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            $user = User::where('email', $request->email)->first();
            Log::info($user);
            if(!$user)
            {
                return back()->with(['level' => 'danger', 'content' => 'Invalid email or password']);
            }
            
            
            //Validates requested routes specific to user roles
            
            
            
             //Checks role error
            
            //Auth attempts
            if (!Auth::Attempt($user_data)) 
            {
                return back()->with(['level' => 'danger', 'content' => 'Invalid email or password!']);
            }
            
            
            
            //Gets user role
            $role = Auth::user()->role;
            //Checks role is admin
			//return redirect('/dashboard');
            
			if ($role == 'crew') 
            {
                return redirect('/home');
            }
            
            elseif ($role == 'producer') 
            {
                return redirect('/producerDashboard');
            }
            
            return redirect('/home');
			
        }
        
    }
    public function view_register(){

return view('auth.register');

        } 


    public function register(Request $request){
        if($request['signupas']=="crew"){
            
            $validated = $request->validate([
                'fname' => ['required', 'string', 'max:255'],
                'mname' => ['string', 'max:255'],
                'lname' => ['string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
            ]);
    
    
            User::create([
                'fname' => $request['fname'],
                'mname' => $request['mname'],
                'lname' => $request['lname'],
                'pkg_num' => '1',
                'pkg_date' => now(),
                'email' => $request['email'],
                'role' => 'crew',
                'password' => Hash::make($request['password']),
                
            ]);
            return redirect('/home');

                    }

                    
                    if($request['signupas']=="producer"){
                        $validated = $request->validate([
                            'fname' => ['required', 'string', 'max:255'],
                            'mname' => ['string', 'max:255'],
                            'lname' => ['string', 'max:255'],
                            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                            'password' => ['required', 'string', 'min:8'],
                        ]);
                
                
                        User::create([
                            'fname' => $request['fname'],
                            'mname' => $request['mname'],
                            'lname' => $request['lname'],
                            'pkg_num' => '4',
                            'pkg_date' => now(),
                            'email' => $request['email'],
                            'role' => 'producer',
                            'password' => Hash::make($request['password']),
                            
                        ]);
                        return redirect('/home');
                                }
        //return $request;

    }

    public function package($data){

        if (!Auth::check()) {
            return Redirect::route('login');
        }
        if (Auth::check()) {

            if($data==1){
                return redirect('/home');
            }
            if($data==2){
               
                $array = [
                    "amt"=>5,
                    "for" => "Crew Members Package",
                    "pkg" => "Basic",
                    "no" => 2

                        ];
                        $datas= (object) $array;
                return view('stripe',compact('datas'));
            }
            if($data==3){
                $array = [
                    "amt"=>36,
                    "type" => "Crew Members Packages",
                    "pkg" => "Premium",
                    "no" => 3
                        ];
                        $datas= (object) $array;
                return view('stripe',compact('datas'));
            }
            
        }
        
        
    }
}
