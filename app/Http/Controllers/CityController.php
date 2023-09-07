<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function search(Request $request)
    {
        if (env('DATASOURCE') == "API") {
            $path = "/city";
            $request = json_encode($request);
            return HelperController::_request($path, $request);
        }elseif (env('DATASOURCE') == "DATABASE") {
            $id = $request->id;
            return City::find($id);
        }
    }
}
