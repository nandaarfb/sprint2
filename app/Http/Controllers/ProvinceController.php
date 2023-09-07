<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function search(Request $request)
    {
        if (env('DATASOURCE') == "API") {
            $path = "/province";
            $request = json_encode($request);
            return HelperController::_request($path, $request);
        }elseif (env('DATASOURCE') == "DATABASE") {
            $id = $request->id;
            return Province::find($id);
        }
    }
}

