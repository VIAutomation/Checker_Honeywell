<?php

namespace App\Models;

use App\Models\SpecsGeneral;
use App\Models\SpecsAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    use HasFactory;

    protected $table = 'models';

    protected $guarded = [];

    public function specsGeneral()
    {
        return $this->hasOne(SpecsGeneral::class, 'id');
    }

    public function specsAttributes()
    {
        return $this->hasOne(SpecsAttribute::class, 'id');
    }

    public function specsParameters()
    {
        return $this->hasMany(SpecsParameter::class, 'model_id', 'id');
    }
}
