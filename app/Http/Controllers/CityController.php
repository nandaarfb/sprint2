<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        return City::all();
    }
 
    public function show($id)
    {
        return City::find($id);
    }

    public function store(Request $request)
    {
        return City::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $city = City::findOrFail($id);
        $city->update($request->all());

        return $city;
    }

    public function delete(Request $request, $id)
    {
        $city = City::findOrFail($id);
        $city->delete();

        return 204;
    }

    public function search(Request $request)
    {
        $id = $request->id;
        return City::find($id);
    }
}
