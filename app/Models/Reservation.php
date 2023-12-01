<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'reservation';

    /**
     * @var string
     */

    const UPDATED_AT = null;

    protected $fillable = [
        'id',
        'num',
        'restaurant_num',
        'table_num',
        'code',
        'customer_full_name',
        'customer_email',
        'number_persons',
        'date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static function num()
    {
        return app_num('reservation','num');
    }

    public static function code()
    {
        return app_num('reservation','code', 32);
    }

    public function getRouteKeyName()
    {
        return 'num';
    }
}
