<?php

namespace App\Repositories\Car;

use App\Models\Car;
use App\Models\CarImage;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Car\CarRequest;
use App\Repositories\Car\CarRepository;

class EloquentCarRepository implements CarRepository
{
    /**
     * Create or update user car
     *
     * @param int $id
     * @param CarRequest $carRequest
     *
     * @return Car
     */
    public function  createOrUpdate(?int $id, CarRequest $carRequest): Car
    {
        try {
            // Begin Transaction
            DB::beginTransaction();

            // create Or update user car
            if (isset($id)) {
                $car = Car::find($id);
                $car->update($carRequest->validated());
            } else {
                $car = Car::create($carRequest->validated());
            };

            if ($carRequest->filled('images')) {

                $images = $carRequest->validated()['images'];
                foreach ($images as $image) {

                    CarImage::create([
                        'car_id' => $car->id,
                        'image' => $image
                    ]);
                }
            }

            // if (isset($carRequest['files'])) {
            //     $carImages = [];

            //     foreach ($carRequest->file('files') as $key =>  $value) {
            //         $carImages[$key]['image'] = $value['image']->storePublicly(
            //             'cars',
            //             ['disk' => 'public']
            //         );
            //     }

            //     $car->carImages()->createMany($carImages);
            // }

            DB::commit();
            // End Commit of Transaction

            $car->load(['carMake', 'carType', 'carFuel', 'carModel', 'carColor', 'carImages',]);

            return $car;
        } catch (\Exception $e) {
            DB::rollback();
            throw new \Exception($e);
        }
    }
}
