<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    use HasFactory;
    protected $fillable = [
        'menu_id', 'submenu_name', 'submenu_url', 'status', 'icon'
    ];

    protected $primaryKey = 'id';
}
