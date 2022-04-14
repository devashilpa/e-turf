<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminGallery extends Model
{
    use HasFactory;
    public function insertgallery($table,$data)
{
    DB::table($table)->insert($data);
}
public function viewGallery($table)
{
    return DB:: table($table)->get();
}
public function viewAdminGallery($table)
{
    return DB::table($table)->get();
}
public function viewUpdate($table,$id)
{
    return DB::table($table)->where('id',$id)->get();
}
public function updateData($table,$data,$id)
{
    return DB::table($table)->where('id',$id)->update($data);
}
public function indexGallery($table)
{
    return DB::table($table)->get();
}
}
