<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = 'restaurant';

    /**
     * @var string
     */

    const UPDATED_AT = null;

    protected $fillable = [
        'id',
        'num',
        'location',
        'maps_location',
        'image_url',
        'phone',
        'created_at',
        'updated_at',
    ];

    public static function num()
    {
        return app_num('restaurant','num');
    }

    public function getRouteKeyName()
    {
        return 'num';
    }
}
