<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function viewState()
    {
        $country = Country::all();
        $state = State::all();
        return view('state.index', ['state' => $state, 'country' => $country]);
    }
    public function createState(Request $request)
    {
        $request->validate(
            [
                'name'    => 'required',
            ]
        );
        $state = new State;
        $state->country_id = $request->country_name;
        $state->name = $request->name;
        $state->save();
        return redirect('view-state');
    }
    public function edit($id)
    {
        $country = Country::all();
        $state = State::findOrFail($id);
        return view('state.edit', ['state' => $state, 'country' => $country]);
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name'  => 'required',
            ]
        );
        $state = State::findOrFail($id);
        $state->name = $request->name;
        $state->country_id = $request->country_name;
        $state->save();
        return redirect('view-state');
    }
    public function destroy($id)
    {
        State::destroy($id);
        return redirect('view-state');
    }
}
