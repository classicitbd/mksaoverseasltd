<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'qualification', 'designation', 'phone', 'email', 'details', 'image',
        'twitter', 'facebook', 'linkedin', 'pinterest' 
    ];

    protected $primaryKey = 'id';
}
