<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ourclient extends Model
{
    use HasFactory;
    protected $fillable = [
        'c_name', 'c_type', 'c_details', 'logo_img'
      ];
  
      protected $primaryKey = 'id';
}
