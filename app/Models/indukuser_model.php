<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indukuser_model extends Model
{
    use HasFactory;
    protected $table ="tbl_indukuser_bunga";
    protected $primaryKey ="id";

    public function tampil_indukuser(){
        $query = \DB::table('tbl_indukuser_bunga')->get();
        return $query;
    }
}
