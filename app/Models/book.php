<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    public function bookData($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function viewbook($table,$id)
    {
        return DB::table($table)->where('uid',$id)->get();
    }
    // public function updateStatus($table,$id,$dataaa)
    // {
    //     return DB::table($table)->where('id',$id)->update($dataaa);
    // }
    public function paydata($table,$id)
    {
        return DB::table($table)->where('id',$id)->get();
    }
    public function viewbookdata($table)
    {
        return DB::table($table)->get();
    }
   public function adminbookinghis($table)
   {
       return DB::table($table)->get();
   }
   public function managerview($table)
   {
       return DB::table($table)->get();
   }
}
