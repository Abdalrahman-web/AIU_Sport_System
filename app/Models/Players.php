<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;
    protected $table = "Players";
    protected $fillable = [ 
    
    'id',
    'fullname',
    'password',
    'email',
    'image',
    'age',
    'height'
    ,'weight'
    ,'disease'
    ,'skill'
    ,'teams'];

    
    protected $hidden = [];
    public function task(){
        return $this->hasMany(Task::class);
    }
    public function Players(){
        return $this->belongsTo(Players::class);
    }
    public $timestamps = true;
}
