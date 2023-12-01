<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\FoodDish;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;

class FoodDishRepository extends BaseRepository
{
    const MODEL = FoodDish::class;

    protected $model;

    public function __construct(FoodDish $model)
    {
        $this->model = $model;
    }

    public function getFoodDishes($request)
    {
        try {
            $items = FoodDish::select([
                    'image_url',
                    'name',
                    'description',
                    'price',
                ])
                ->get();

        } catch (\Exception $e) {
            $items = [];
            Log::error($e, $request->all());
        }

        return $items;
    }
}
