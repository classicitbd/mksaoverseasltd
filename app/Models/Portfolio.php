<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'category', 'title', 'details', 'image', 'attach_file'
    ];

    protected $primaryKey = 'id';
}
