<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class SpecsGeneral extends EloquentModel
{
    use HasFactory;

    protected $table = 'specs_general';

    protected $guarded = [];

    public function model()
    {
        return $this->belongsTo(Model::class);
    }
}
