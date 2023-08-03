<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CellType extends Model
{
    use HasFactory;

    protected $table = 'cell_type';

    protected $guarded = [];
}
