<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School_Model extends Model
{
    use SoftDeletes;
    protected $table = 'schools';
    protected $fillable = ['id','title','email','address','phone','student_card_prefix','student_card_background'];
    protected $dates = ['deleted_at'];
}
