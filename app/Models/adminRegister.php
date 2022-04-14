<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminRegister extends Model
{
    use HasFactory;
    public function adminloginData($table,$user_name,$password)
    {
        return DB::table($table)->where('user_name',$user_name)->where('password',$password)->first();
    }
}
