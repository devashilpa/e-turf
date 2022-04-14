<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\managerRegister;
use App\models\addturf;
use App\models\userRegister;
use App\models\adminRegister;
use App\models\adminGallery;
use App\models\book;
use App\models\payment;
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
    $this->obj3= new userRegister;
    $this->obj5= new adminRegister;
    $this->obj8= new adminGallery;
    $this->obj10= new book;
    $this->obj11=new payment;
    $this->obj3= new userRegister;
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
    $turf_type=$req->input('turf_type');
    $location=$req->input('location');
    $description=$req->input('description');
    $rate=$req->input('rate');
    $manager=$req->input('manager');
    $data=['turf_name'=>$turf_name,
    'turf_type'=>$turf_type,
    'description'=>$description,
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
public function adminloginAction(Request $req)
{
  $user_name=$req->input('user_name');
  $password=$req->input('password');
  $data=$this->obj5->adminloginData('admin_registers',$user_name,$password);
   if(isset($data))
   {
     $req->session()->put(array('sess'=>$data->id));
     return redirect('/adminindex');
   }
   else{
     return redirect('/adminlogin')->with('error','invalid username and password');
   }
  }
   public function admingallery()
   {
     return view('admin.admingallery');
   }
   public function admingalleryAction(Request $req)
   {
       $image=$req->file('image');
       $filename = $image->getClientOriginalName();
       $image->move(public_path().'/images/', $filename);

       $description = $req->input('description');
       $data=[
           'image'=>$filename,
           'description'=>$description
           ];
       $this->obj8->insertgallery('admin_galleries',$data);
       return redirect('/admingallery');
   }
   public function viewgallery()
   {
     $data['result']=$this->obj8->viewAdminGallery('admin_galleries');
     return view('admin.viewgallery',$data);
   }
  //  
   public function updategallery($id){
    $data['result']=$this->obj8->viewupdate('admin_galleries',$id);
    return view('admin.updategallery',$data);
       }
       public function updateAction(Request $req,$id)
       {
        $image=$req->file('file');
        $filename = $image->getClientOriginalName();
        $image->move(public_path().'/images/', $filename);
 
        $description = $req->input('description');
        $data=[
            'image'=>$filename,
            'description'=>$description
            ];
            adminGallery::where('id',$id)->update($data);
        return redirect('/viewgallery');
       }
       public function adminbookinghistory()
       {
         $data['result']=$this->obj10->adminbookinghis('books');
         return view('admin.adminbookinghis',$data);
       }
       public function adminpayment()
       {
         $data['result']=$this->obj11->adminpay('payments');
         return view('admin.adminpayment',$data);
       }
      public function adminuserview($id)
      {
        $data['result']=$this->obj3->adminuser('user_registers',$id);
        return view('admin.adminuserview',$data);
      }
}
