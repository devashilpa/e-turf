<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ufeedback extends Model
{
 public function insertufeedback($table,$data)
 {
     DB::table($table)->insert($data);
 }
 public function viewfeedback($table)
 {
     return DB::table($table)->get();
 }
}
