<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allproject extends Model
{
    use HasFactory;
    protected $fillable = [
        'ap_name', 'title', 'ap_group', 'image', 'url'
      ];
  
      protected $primaryKey = 'id';
}
