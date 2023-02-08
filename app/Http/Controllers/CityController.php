<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function viewCity()
    {
        $city = City::all();
        $state = State::all();
        return view('city.index', ['city' => $city, 'state' => $state]);
    }
    public function createCity(Request $request)
    {
        $request->validate(
            [
                'name'    => 'required',
            ]
        );
        $city = new City;
        $city->state_id = $request->state_name;
        $city->name = $request->name;
        $city->save();
        return redirect('view-city');
    }
    public function edit($id)
    {
        $state = State::all();
        $city = City::findOrFail($id);
        return view('city.edit', ['city' => $city, 'state' => $state]);
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name'  => 'required',
            ]
        );
        $city = State::findOrFail($id);
        $city->name = $request->name;
        $city->state_id = $request->state_name;
        $city->save();
        return redirect('view-city');
    }
    public function destroy($id)
    {
        City::destroy($id);
        return redirect('view-city');
    }
}
