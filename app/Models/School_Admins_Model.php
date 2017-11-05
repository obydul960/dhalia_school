<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class School_Admins_Model extends Model
{
    use SoftDeletes;
    protected $table = 'school_admins';
    protected $fillable = ['id','user_id','school_id'];
    protected $dates = ['deleted_at'];
}
