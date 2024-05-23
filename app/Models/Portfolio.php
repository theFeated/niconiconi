<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Portfolio extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'portfolio';

    protected $fillable = ['title', 'type', 'image', 'video_url'];
    
    public static function getFilteredPortfolios($type)
    {
        if ($type == 'all') {
            return self::all();
        }

        $types = explode(',', $type);

        return self::whereIn('type', $types)->get();
    }

    public static function getTypes()
    {
        return self::pluck('type')->unique()->map(function ($type) {
            return explode(',', $type);
        })->flatten()->unique();
    }
}
