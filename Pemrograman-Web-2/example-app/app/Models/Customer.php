<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    // timestamps dibutuhkan untuk mneghentikan adanya tambahan column 
    // yang otomatis ditammbahkan oleh laravelnya
    public $timestamps = false;

    protected $fillable = ['name', 'address', 'no_hp'];
}
