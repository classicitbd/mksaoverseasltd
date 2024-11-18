<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_num', 'project_num', 'support_num', 'worker_num'
    ];

    protected $primaryKey = 'id';
}
