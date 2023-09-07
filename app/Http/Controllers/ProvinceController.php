<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function search(Request $request)
    {
        $id = $request->id;
        return Province::find($id);
    }
}

