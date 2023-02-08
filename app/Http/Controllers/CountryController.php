<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function viewCountry()
    {
        $country = Country::all();
        return view('country.index', ['country' => $country]);
    }
    public function createCountry(Request $request)
    {
        $request->validate(
            [
                'name'    => 'required',
            ]
        );
        $country = Country::create($request->only('name'));

        return redirect('view-country');
    }
    public function edit($id)
    {
        // $country = Country::all();
        $country = Country::findOrFail($id);
        return view('country.edit', ['country' => $country]);
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name'  => 'required',
            ]
        );
        $country = Country::findOrFail($id);
        $country->name = $request->name;
        $country->save();
        return redirect('view-country');
    }
    public function destroy($id)
    {
        Country::destroy($id);
        return redirect('view-country');
    }
}
