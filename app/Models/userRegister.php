<?php

namespace App\Models;
 use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userRegister extends Model
{
    use HasFactory;
    public function userData($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function managerUser($table)
    {
       return DB::table($table)->get();
    }
    public function userloginData($table,$user_name,$password)
    {
        return DB::table($table)->where('user_name',$user_name)->where('password',$password)->first();
    }
    public function userview($table,$id)
    {
      return DB::table($table)->where('id',$id)->get();
    }
    public function adminuser($table)
    {
        return DB::table($table)->get(); 
    }
    public function userviewD($table,$id)
    {
        return DB::table($table)->where('id',$id)->get();
    }
    public function Details($table,$id)
    {
        return DB::table($table)->where('id',$id)->get();
    }
}
