<?php

namespace App\Http\Controllers;

use App\Models\CellType;
use App\Models\CircuitType;
use App\Models\CoverStyle;
use App\Models\ForceUnit;
use App\Models\OtType;
use App\Models\Unit;
use Illuminate\Http\Request;

class AttributesController extends Controller
{
    public function cell_types()
    {
        return response()->json(CellType::all());
    }

    public function circuit_types()
    {
        return response()->json(CircuitType::all());
    }

    public function cover_styles()
    {
        return response()->json(CoverStyle::all());
    }

    public function force_units()
    {
        return response()->json(ForceUnit::all());
    }

    public function ot_types()
    {
        return response()->json(OtType::all());
    }

    public function units()
    {
        return response()->json(Unit::all());
    }
}
