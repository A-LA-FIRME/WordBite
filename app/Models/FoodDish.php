<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FoodDish extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'food_dish';

    /**
     * @var string
     */

    const UPDATED_AT = null;

    protected $fillable = [
        'id',
        'num',
        'name',
        'description',
        'price',
        'avaliable',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static function num()
    {
        return app_num('food_dish','num');
    }

    public function getRouteKeyName()
    {
        return 'num';
    }
}
