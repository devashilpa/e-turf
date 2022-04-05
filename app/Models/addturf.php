<?php

namespace App\Models;
 use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addturf extends Model
{
    use HasFactory;
    // public function viewTurf($table,$data)
    // {
    //     DB::table($table)->view($data);
    // }
public function insertTurf($table,$data)
{
   DB::table($table)->insert($data);
}
public function viewTurf($table)
{
 return DB::table($table)->get();
}
}
