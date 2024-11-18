<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allmachine extends Model
{
    use HasFactory;
    protected $fillable = [
        'am_name', 'title', 'am_group', 'image', 'url'
      ];
  
      protected $primaryKey = 'id';
}
