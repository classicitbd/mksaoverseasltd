<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frontlogo extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo_img'
    ];

    protected $primaryKey = 'id';
}
