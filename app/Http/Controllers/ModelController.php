<?php

namespace App\Http\Controllers;

use App\Http\Resources\ModelResource;
use App\Models\Model;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function show($id)
    {
        $data = Model::find($id);

        return new ModelResource($data);
    }
}
