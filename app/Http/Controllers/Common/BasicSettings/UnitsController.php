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
}
