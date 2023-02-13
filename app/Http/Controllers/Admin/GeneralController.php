<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Citie;
use App\Models\Countrie;
use App\Models\State;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function dependentIndex()
    {
        $countries = Countrie::get();
        foreach ($countries as $key => $value) {
            $countrie[] = array(
                'id' => $value->id,
                'sortname' => $value->sortname,
                'name' => $value->name,
                'phonecode' => $value->phonecode
            );
        }
        return view('Admin.dependent')->with('countries', $countrie);
    }

    public function state($countrie_id)
    {
        $states = State::where('country_id', $countrie_id)->get();
        foreach ($states as $key => $value) {
            $state[] = array(
                'id' => $value->id,
                'name' => $value->name,
            );
        }
        return response()->json(['status' => true,'state' => $state]);
    }

    public function city($state_id)
    {
        $cities = Citie::where('state_id', $state_id)->get();
        foreach ($cities as $key => $value) {
            $citie[] = array(
                'id' => $value->id,
                'name' => $value->name,
            );
        }
        return response()->json(['status' => true,'cities' => $citie]);
    }
}
