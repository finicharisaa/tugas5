<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //nama dari field field table
    protected $fillable = ['nama', 'alamat', 'nim','no_hp']; 

}
