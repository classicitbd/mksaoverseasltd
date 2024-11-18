<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicecategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'sub_menu', 'sc_name', 'url'
    ];

    protected $primaryKey = 'id';
}
