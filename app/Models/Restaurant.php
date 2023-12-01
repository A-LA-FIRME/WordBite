<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurant extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'restaurant';

    /**
     * @var string
     */

    const UPDATED_AT = null;

    protected $fillable = [
        'id',
        'num',
        'local_number',
        'short_location',
        'full_location',
        'maps_location',
        'email',
        'phone',
        'created_at',
        'updated_at',
        'deleted_at',
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
