<?php

namespace App\Http\Controllers;
use App\models\managerRegister;
use App\models\ufeedback;
use App\models\book;
use App\models\userRegister;
use Illuminate\Http\Request;
class managerController extends Controller
{
    public function managerindex()
    {
        $id=session('sess');
        $data['result']=$this->obj2->managerview('manager_registers',$id);
        return view('manager.managerindex',$data);
    }
        public function __construct()
        {
           
          $this->obj2= new managerRegister;
          $this->obj9= new ufeedback;
          $this->obj10= new book;
          $this->obj3= new userRegister;

        }
        public function managerloginAction(Request $req)
        {
          $user_name=$req->input('user_name');
    $password=$req->input('password');
    $data=$this->obj2->managerloginData('manager_registers',$user_name,$password);
    if(isset($data))
    {
        $req->session()->put(array('sess'=>$data->id));
        return redirect('/managerindex');
    }else{
        return redirect('/managerlogin')->with('error','invalid username and password');
    }
 }
 public function viewfeedback()
 {
     $data['result']=$this->obj9->viewfeedback('ufeedbacks');
     return view('manager.viewfeedback',$data);
 }
 public function managerbookinghistory()
 {
     $data['result']=$this->obj10->managerview('books');
     return view('manager.managerbookinghistory',$data);
 }
 public function viewuser()
  {
    $data['result']=$this->obj3->managerUser('user_Registers');
    return view('manager.viewuser',$data);
  }
  public function editmanager(){
      $id=session('sess');
    $data['result']=managerRegister::where('id',$id)->get();
    return view('manager.editmanager',$data);
}

public function editmanagerAction(Request $req,$id)
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
    managerRegister::where('id',$id)->update($data);
    return redirect('/viewmanager');
}

  public function viewmanager()
  {
      $id=session('sess');
      $data['result']=$this->obj2->manager('manager_registers',$id);
      return view('manager.viewmanager',$data); 
  }
}
