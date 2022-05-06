<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $table = "offers";
    protected $fillable = ['id','offer','title','image'];
    protected $hidden = [];
    public $timestamps = true;
}
