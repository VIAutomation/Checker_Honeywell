<?php

namespace App\Models;

use App\Models\Unit;
use App\Models\OtType;
use App\Models\CellType;
use App\Models\ForceUnit;
use App\Models\CoverStyle;
use App\Models\CircuitType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SpecsAttribute extends Model
{
    use HasFactory;

    protected $table = 'specs_attributes';

    protected $guarded = [];

    public function model()
    {
        return $this->belongsTo(Model::class);
    }

    public function circuit_type()
    {
        return $this->belongsTo(CircuitType::class, 'circuit_type_id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }

    public function cover_style()
    {
        return $this->belongsTo(CoverStyle::class, 'cover_style_id');
    }

    public function cell_type()
    {
        return $this->belongsTo(CellType::class, 'cell_type_id');
    }

    public function force_unit()
    {
        return $this->belongsTo(ForceUnit::class, 'force_unit_id');
    }

    public function ot_type()
    {
        return $this->belongsTo(OtType::class, 'ot_type_id');
    }
}
