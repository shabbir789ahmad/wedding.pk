<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\AdminController;
class AdminController extends Controller
{
    
    function adminlogin(Request $req)
    {
        $cred=$req->only('email','password');
   
      if(Auth::guard('admin')->attempt($cred,$req->remember))
        {
         
          return redirect()->route('admin.dashboard');
        
        }else
        {
            
          return redirect()->back()->with('error','something is wrong');
        }

    }

    function logout()
    {
     if(Auth::guard('admin')->logout())
     {
        $request->session()->invalidate();
     return redirect()->route('admin.login');
         
      }
    }
public function __construct()
    {
        $this->middleware('admin.guest')->except('logout');
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
