<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bsctraining extends Model
{
    use HasFactory;
    protected $fillable = [
        'bt_name', 'bt_details', 'price', 'duration', 'icon'
    ];

    protected $primaryKey = 'id';
}
