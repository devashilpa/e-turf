<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class indexController extends Controller
{
   public function register()
   {
     return view('register');
   }
   public function login()
   {
       return view('login');
   }
   public function managerlogin()
   {
       return view('managerlogin');
   }
   public function adminlogin()
   {
      return view('adminlogin');
   }
   public function managerregister()
   {
       return view('managerregister');
   }
   public function about()
   {
       return view('about');
   }
   public function contact_us()
   {
       return view('contact us');
   }
   public function logout()
   {
       Auth::logout();
       return redirect('/');

   }
}
