<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Additionalimage extends Model
{
    use HasFactory;
    protected $fillable = [
        'bu_name', 'title', 'heading', 'url', 'details', 'icon', 'image'
    ];

    protected $primaryKey = 'id';
}
