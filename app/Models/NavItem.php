<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavItem extends Model
{
    protected $table = 'nav_items';
    protected $fillable = [
        'nav_item_name',
        'nav_item_url',
    ];
}
