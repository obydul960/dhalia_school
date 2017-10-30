<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assin_Role_Model extends Model
{
    protected $table = 'role_user';
    protected $fillable = ['user_id','roles_id'];
}
