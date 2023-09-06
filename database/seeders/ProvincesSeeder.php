<?php

namespace Database\Seeders;

use App\Http\Controllers\HelperController;
use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinciesList = HelperController::_request('/province');
        foreach ($provinciesList as $provinceRow) {
            Province::create([
                'province_id' => $provinceRow['province_id'],
                'name'        => $provinceRow['province'],
            ]);
        }
    }
}
