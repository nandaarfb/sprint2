<?php

namespace Database\Seeders;

use App\Http\Controllers\HelperController;
use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $citiesList = HelperController::_request('/city');
        foreach ($citiesList as $cityRow) {
            City::create([
                'province_id' => $cityRow->province_id,
                'city_id'     => $cityRow->city_id,
                'name'        => $cityRow->province,
            ]);
        }
    }
}
