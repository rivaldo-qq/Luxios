<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoriesGallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'categories_id', 'url', 'is_featured'
    ];
}
