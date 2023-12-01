<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;

class RestaurantRepository extends BaseRepository
{
    const MODEL = Restaurant::class;

    protected $model;

    public function __construct(Restaurant $model)
    {
        $this->model = $model;
    }

    public function getRestaurants($request)
    {
        try {
            $items = Restaurant::select([
                    'location',
                    'phone',
                    'image_url',
                    'maps_location',
                ])
                ->get();

        } catch (\Exception $e) {
            $items = [];
            Log::error($e, $request->all());
        }

        return $items;
    }
}
