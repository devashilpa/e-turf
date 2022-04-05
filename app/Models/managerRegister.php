<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class managerRegister extends Model
{
    use HasFactory;
    public function insertData($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function viewData($table)
    {
       return DB::table($table)->get();
    }
    public function approveData($table,$id,$data)
    {
        return DB::table($table)->where('id',$id)->update($data);
    }
}
