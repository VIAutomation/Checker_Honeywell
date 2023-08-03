<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircuitType extends Model
{
    use HasFactory;

    protected $table = 'circuit_type';

    protected $guarded = [];

    public function specsAttributes()
    {
        return $this->belongsTo(SpecsAttribute::class, 'circuit_type_id');
    }
}
