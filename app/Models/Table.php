<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Table extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'table';

    /**
     * @var string
     */

    const UPDATED_AT = null;

    protected $fillable = [
        'id',
        'num',
        'number',
        'avaliable',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static function num()
    {
        return app_num('table','num');
    }

    public function getRouteKeyName()
    {
        return 'num';
    }
}
