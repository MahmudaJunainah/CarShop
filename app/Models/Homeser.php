<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeser extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'location',
        'select_service',
        
    ];
}
