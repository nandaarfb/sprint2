<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function search(Request $request)
    {
        if (env('DATASOURCE') == "API") {
            $id = $request->id;
            $path = "/city?id=".$id;
            $response = HelperController::_request($path, $request);
            return $response;
        }elseif (env('DATASOURCE') == "DATABASE") {
            $id = $request->id;
            $response = City::find($id);
            return $response;
        }
    }
}
