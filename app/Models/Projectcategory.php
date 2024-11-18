<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectcategory extends Model
{
    use HasFactory;
    protected $fillable = [
      'pc_name', 'title', 'p_group', 'image', 'url'
    ];

    protected $primaryKey = 'id';
}
