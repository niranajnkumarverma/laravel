<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;
use RealRashid\SweetAlert\Facades\Alert;
// use Session;

class HomeController extends Controller
{
    public function home (Request $request) {
       
    
        return view('index');
    }

    
## User Login /////////////////////////////////

    public function getLogin()
    {
       
        return view("login");
            
    }
   
    public function postLogin(Request $request)

    {
        $request->validate($request,[

            'email' => 'required|email',
            'password' => 'required|min:6',


        ]);

        
        $user = User::where('email', '=', $request->email)->first();


        if($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                print_r($user->id);
                return redirect('dashboard');
                Alert::success('Success', 'You\'ve Successfully logged');
                // return redirect()->intended('index')->withSuccess('You have Successfully logged in');
                return back();
            } else {
                Alert::error('error', 'Password not matched');
                return back();
            }
           
            } else {
                Alert::error('error', 'Something went wrong');
                return back();
                // return redirect("login")->withSuccess('Sorry! You have entered invalid credentials');
            }
       
          
        
    }

## User Register /////////////////////

    public function getRegister()
    {
        return view('register');
    }
     
    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6',
            
        ]);
#### First method for user create 
        // $request = $request->all();
        // $request['password'] = Hash::make($request['password']);

        // $user = User::create($request);

#### 2nd  method for user create 

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $res =$user->save();
            if ($res){
                Alert::success('Success', 'You\'ve Successfully Registered');
                // return back()->with('success','User has been created successfully.');
                return back();
            }else{
                Alert::error('error', 'something went wrong');
                return back();
                // return back()
                // ->with('error','something went wrong');
            }
           

    }



    public function dashboard()
    {

        $data = array();
        if (!Session()->has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }


        return view('dashboard', compact('data'));
    }    


  
    // public function logout(Request $request) {
    //    if (Session::has('loginId')){
    //        Session::pull('loginId');
    //        return redirect('login');
    //    }
       
    // }

    public function logout() {
        Auth::logout();
        return redirect('/login');
      }
}



