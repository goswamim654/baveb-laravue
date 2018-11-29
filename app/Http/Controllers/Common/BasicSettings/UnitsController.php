<?php

namespace App\Http\Controllers\Common\BasicSettings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnitsController extends Controller
{
    public function index()
    {
        return view('common.basicSettings.units.index');
    }
}
