<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    public function insertPay($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function adminpay($table)
    {
        return DB::table($table)->get();
    }
}
