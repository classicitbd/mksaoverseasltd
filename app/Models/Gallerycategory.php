<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallerycategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    protected $primaryKey = 'id';
}
