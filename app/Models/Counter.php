<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Counter extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'counter';

    protected $fillable = [
        'icon', 'title', 'number'
    ];
}
