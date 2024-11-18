<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'category', 'title', 'details', 'image', 'attach_file', 'url', 'icon'
    ];

    protected $primaryKey = 'id';
}
