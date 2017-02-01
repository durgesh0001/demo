<?php

namespace durgesh;

use Illuminate\Database\Eloquent\Model;

class User3 extends Model
{

    protected $table = 'user';
    protected $fillable =  ['name', 'phone','dob','username', 'email', 'address', 'created_at', 'updated_at'];
}
