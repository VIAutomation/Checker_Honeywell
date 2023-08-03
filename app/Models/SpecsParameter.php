<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecsParameter extends Model
{
    use HasFactory;

    protected $table = 'specs_parameters';

    protected $guarded = [];

    public function model()
    {
        return $this->belongsTo(Model::class);
    }
}
