<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category', 'title', 'heading', 'price', 'details', 'image', 'attach_file'
    ];

    protected $primaryKey = 'id';
}
