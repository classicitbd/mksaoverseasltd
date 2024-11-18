<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Businesscategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'sub_menu', 'bc_name', 'url'
    ];

    protected $primaryKey = 'id';
}
