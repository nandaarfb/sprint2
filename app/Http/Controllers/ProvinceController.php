<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index()
    {
        return Province::all();
    }
 
    public function show($id)
    {
        return Province::find($id);
    }

    public function store(Request $request)
    {
        return Province::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $province = Province::findOrFail($id);
        $province->update($request->all());

        return $province;
    }

    public function delete(Request $request, $id)
    {
        $province = Province::findOrFail($id);
        $province->delete();

        return 204;
    }
}

