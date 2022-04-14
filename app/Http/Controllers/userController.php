<?php

namespace App\Http\Controllers;
use App\models\userRegister;
use App\models\addturf;
use App\models\ufeedback;
use App\models\adminGallery;
use App\models\book;
use App\models\payment;
use Illuminate\Http\Request;


class userController extends Controller
{ 
    public function __construct()
    {
      $this->obj1=new addturf;
      $this->obj3=new userRegister;
      $this->obj7=new ufeedback;
      $this->obj8=new adminGallery;
      $this->obj10=new book;
      $this->obj11=new payment;
    }
   public function register()
   {
       return view('register');
   }
   public function registerAction(Request $req)
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
    $this->obj3->userData('user_registers',$data);
     return redirect('/register');
   }
   public function loginAction(Request $req)
        {
          $user_name=$req->input('user_name');
    $password=$req->input('password');
    $data=$this->obj3->userloginData('user_registers',$user_name,$password);
    if(isset($data))
    {
        $req->session()->put(array('sess'=>$data->id));
        return redirect('/userindex');
    }else{
        return redirect('/login')->with('error','invalid username and password');
    }
 }
 public function userindex()
 {
     $id=session('sess');
     $data['result']=$this->obj3->userview('user_registers',$id);
     return view('user.userindex',$data);   
 }
 public function userfeedback()
 {
   return view('user.userfeedback');
 }
 public function userfeedbackAction(Request $req)
 {
   $name=$req->input('name');
   $email=$req->input('email');
   $number=$req->input('number');
   $feedback=$req->input('message');
   $data=['name'=>$name,
   'email'=>$email,
   'contact_number'=>$number,
  'feedback'=>$feedback];
    $this->obj7->insertufeedback('ufeedbacks',$data);
   return redirect('/userfeedback');
 }
 public function ugallery()
 {
  $data['result']=$this->obj8->viewGallery('admin_galleries');
   return view('user.ugallery',$data);
 }
 public function userviewbooking()
 {
   $data['result']=$this->obj1->viewB('addturves');
   return view('user.userviewbooking',$data);
 }
 public function book($id)
 {
   $data['result']=$this->obj1->data('addturves',$id);
   return view('user.book',$data);
 }
 public function bookAction(Request $req)
 {
  $id=session('sess');
  $uid=$req->input('uid');
   $t_name=$req->input('turf_name');
   $t_type=$req->input('turf_type');
   $t_rate=$req->input('rate');
   $t_location=$req->input('location');
   $t_date=$req->input('date');
   $t_time=$req->input('time');
   $data=['uid'=>$uid,
     'turf_name'=>$t_name,
   'turf_type'=>$t_type,
   'rate'=>$t_rate,
   'location'=>$t_location,
   'date'=>$t_date,
   'time'=>$t_time];
   $this->obj10->bookData('books',$data);
   return redirect('/viewbooking');
 }
 public function viewbooking()
 {
   $id=session('sess');
  $data['result']=$this->obj10->viewbook('books',$id);
  return view('user.viewbooking',$data);
 }
 public function payment($id)
 {
   $data['result']=$this->obj10->paydata('books',$id);
   return view('user.payment',$data);
 }
 public function paymentAction(Request $req,$id)
{
  $uid=session('sess');
  $card_number=$req->input('card_number');
  $holder_name=$req->input('holder_name');
  $amount=$req->input('amount');
  $exptdate=$req->input('expdate');
  $cvv=$req->input('cvv');
  $data=['uid'=>$uid,
  'card_number'=>$card_number,
  'holder_name'=>$holder_name,
  'amount'=>$amount,
  'expdate'=>$exptdate,
  'cvv'=>$cvv];
  // $this->obj10->updateStatus('books',$id,$dataaa);
  $this->obj11->insertPay('payments',$data);
  $data1=['status'=>'payed'];
  book::where('id',$id)->update($data1);
  return redirect('/userindex'); 
}
public function bookinghistory()
{
$data['result']=$this->obj10->viewbookdata('books');
return view('user.bookinghistory',$data);
}
public function delete($id)
{
  book::where('id',$id)->delete();
  return redirect('/bookinghistory');
}
public function userview()
{
  $id=session('sess');
  $data['result']=$this->obj3->userviewD('user_registers',$id);
  return view('user.userview',$data);
}
public function useredit()
{
  $id=session('sess');
  $data['result']=$this->obj3->Details('user_registers',$id);
  return view('user.useredit',$data);
}
public function usereditAction(Request $req)
{
  $id=session('sess');
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
  userRegister::where('id',$id)->update($data);
  return redirect('/userview');
}
public function gbill($id)
{
  $data['result']=book::where('id',$id)->get();
  return view('user.gbill',$data);
}
public function deletehis($id)
{
  $data['result']=book::where('id',$id)->delete();
  return redirect('/bookinghistory');
}
 }