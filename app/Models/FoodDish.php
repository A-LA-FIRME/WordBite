<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodDish extends Model
{
    use HasFactory;

    protected $table = 'food_dish';

    /**
     * @var string
     */

    const UPDATED_AT = null;

    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'image_url',
        'avaliable',
        'created_at',
        'updated_at',
    ];
}
