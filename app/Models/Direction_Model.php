<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Direction_Model extends Model
{
    use SoftDeletes;
    protected $table = 'directions';
    protected $fillable = ['id','title','duration'];
    protected $dates = ['deleted_at'];

}
