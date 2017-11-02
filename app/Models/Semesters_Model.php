<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Semesters_Model extends Model
{
    use SoftDeletes;
    protected $table = 'semesters';
    protected $fillable = ['id','school_year_id','title','start','end'];
    protected $dates = ['deleted_at'];
}
