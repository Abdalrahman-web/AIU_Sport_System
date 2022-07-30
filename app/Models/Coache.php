<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Coache
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Coache newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coache newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coache query()
 * @mixin \Eloquent
 */
class Coache extends Model
{
    //use HasFactory;
    protected $table = "coaches";
    protected $fillable = ['firstname','lastname','email','specialize','image'];
    protected $hidden = [];
    public $timestamps = true;
}
