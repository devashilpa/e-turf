<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\managerRegister;
use App\models\addturf;

class adminController extends Controller
{
  public function adminindex()
  {
      return view('admin.adminindex');
  }
  public function __construct()
  {
     
    $this->obj= new managerRegister;
    $this->obj1= new addturf;
  }
  public function managerregisterAction(Request $req)
  {
      $name=$req->input('name');
      $contact_number=$req->input('contact_number');
      $email=$req->input('email');
      $gender=$req->input('gender');
      $user_name=$req->input('user_name');
      $password=$req->input('password');
      $data=['name'=>$name,
      'contact_number'=>$contact_number,
      'email'=>$email,
      'gender'=>$gender,
      'user_name'=>$user_name,
      'password'=>$password];
      $this->obj->insertData('manager_registers',$data);
       return redirect('/managerregister');
  }
  public function managerRegisterView()
  {
    $data['result']=$this->obj->viewData('manager_registers');
    return view('admin.managerRegisterView',$data);
  }
  public function approveManager($id)
  {
    $data=['status'=>"Approve"];
    $this->obj->approveData('manager_registers',$id,$data);
    return redirect('/managerRegisterView');
  }
  public function declineManager($id)
  {
    $data=['status'=>"Decline"];
    $this->obj->approveData('manager_registers',$id,$data);
    return redirect('/managerRegisterView');  
  }
  public function addturf()
  {
    $data['result']=$this->obj->viewData('manager_registers');
    return view('admin.addturf',$data);
  }
  public function addturfAction(Request $req)
  {
    $turf_name=$req->input('turf_name');
    $location=$req->input('location');
    $rate=$req->input('rate');
    $manager=$req->input('manager');
    $data=['turf_name'=>$turf_name,
    'location'=>$location,
    'rate'=>$rate,
    'manager'=>$manager];
    $this->obj1->insertTurf('addturves',$data);
    return redirect('/addturf');
  }
  public function turfview()
  {
    $data['result']=$this->obj1->viewTurf('addturves');
    return view('admin.viewturf',$data);
  }
}
