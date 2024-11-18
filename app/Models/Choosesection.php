<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choosesection extends Model
{
    use HasFactory;
    protected $fillable = [
        'sn', 'title', 'detail', 'icon'
    ];

    protected $primaryKey = 'id';
}
