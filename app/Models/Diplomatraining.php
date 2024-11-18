<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplomatraining extends Model
{
    use HasFactory;
    protected $fillable = [
        'dt_name', 'dt_details', 'price', 'duration', 'icon'
    ];

    protected $primaryKey = 'id';
}
