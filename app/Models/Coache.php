<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coache extends Model
{
    //use HasFactory;
    protected $table = "coaches";
    protected $fillable = ['firstname','lastname','email','specialize','image'];
    protected $hidden = [];
    public $timestamps = true;
}
