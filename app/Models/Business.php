<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $fillable = [
        'b_name', 'title', 'heading', 'details', 'image', 'attach_file', 'other_title', 'other_heading', 'url'
    ];

    protected $primaryKey = 'id';
}
