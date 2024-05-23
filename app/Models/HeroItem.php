<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class HeroItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'hero_items';

    protected $fillable = [
        'background_image_url',
        'subtitle',
        'title',
        'link_url',
    ];
}
