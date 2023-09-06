<?php

namespace Database\Seeders;

use App\Http\Controllers\HelperController;
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
    }
}
