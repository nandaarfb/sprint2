<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function search(Request $request)
    {
        if (env('DATASOURCE') == "API") {
            $id = $request->id;
            $path = "/province?id=".$id;
            $response = HelperController::_request($path, $request);
            return $response;
        }elseif (env('DATASOURCE') == "DATABASE") {
            $id = $request->id;
            $response = Province::find($id);
            return $response;
        }
    }
}

