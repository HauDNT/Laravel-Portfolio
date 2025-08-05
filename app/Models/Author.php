<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Author extends Authenticatable
{
    protected $table = "authors";
    protected $fillable = ["username", "password"];
    protected $hidden = ["password"];
}
