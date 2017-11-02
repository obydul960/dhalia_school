<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Behavior_Model extends Model
{
    use SoftDeletes;
    protected $table = 'behaviors';
    protected $fillable = ['id','title'];
    protected $dates = ['deleted_at'];
}
