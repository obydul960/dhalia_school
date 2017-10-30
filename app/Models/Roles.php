<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;
use Illuminate\Database\Eloquent\SoftDeletes;
class Roles extends EntrustRole
{
    use SoftDeletes;
    protected $table = 'roles';
    protected $fillable = ['id','name','display_name','description'];
    protected $dates = ['deleted_at'];
}
