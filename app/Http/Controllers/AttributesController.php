<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class AttributesController extends Controller
{
    public function cell_types()
    {
        return response()->json(Unit::all());
    }

    public function circuit_types()
    {
        return response()->json(Unit::all());
    }

    public function cover_styles()
    {
        return response()->json(Unit::all());
    }

    public function force_units()
    {
        return response()->json(Unit::all());
    }

    public function ot_types()
    {
        return response()->json(Unit::all());
    }

    public function units()
    {
        return response()->json(Unit::all());
    }
}
