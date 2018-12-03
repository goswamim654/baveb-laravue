<?php

namespace App\Http\Controllers\Common\BasicSettings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Common\BasicSettings\Unit;

class UnitsController extends Controller
{
    public function index()
    {	
    	$units = Unit::all();
        return view('common.basicSettings.units.index')->with('units',$units);;
    }

    public function show($unid)
    {	
    	$unit = Unit::where('unid', $unid)->first();
		return $unit;
    }

    public function basicUnity($unid)
    {	
    	$unit = Unit::where('unid', $unid)->first();
    	$basicUnity = Unit::where('mndn', '001')->where('tccu', $unit->tccu)->pluck('unid');
        return $basicUnity;
    }

    public function update(Request $request)
    {   
        // $unit = Unit::where('unid', $unid)->first();

        // $unit = $request->input('unid');
        // return $basicUnity;
    }
}
