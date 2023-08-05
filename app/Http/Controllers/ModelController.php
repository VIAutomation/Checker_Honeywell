<?php

namespace App\Http\Controllers;

use App\Models\Model;
use App\Models\SpecsGeneral;
use Illuminate\Http\Request;
use App\Models\SpecsAttribute;
use App\Models\SpecsParameter;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ModelResource;

class ModelController extends Controller
{

    public function index()
    {
        $models = Model::orderBy('created_at', 'desc')->get();

        return ModelResource::collection($models);
    }

    public function show($id)
    {
        $data = Model::find($id);

        return new ModelResource($data);
    }

    public function store(Request $request)
    {
        // return response()->json($request['attributes']['units']);

        try {

            DB::beginTransaction();

            $model = Model::create([
                'name' => $request->model_name
            ]);

            SpecsGeneral::create([
                'model_id' => $model->id,
                'client_name' => $request['general']['client_name'],
                'honeywell_no' => $request['general']['honeywell_no'],
                'production_line_name' => $request['general']['production_line_name'],
                'model_description' => $request['general']['model_description'],
                'engineering_level' => $request['general']['engineering_level'],
            ]);

            SpecsAttribute::create([
                'model_id' => $model->id,
                'circuit_type_id' => $request['attributes']['circuit_type'],
                'unit_id' => $request['attributes']['units'],
                'cover_style_id' => $request['attributes']['cover_style'],
                'cell_type_id' => $request['attributes']['cell_types'],
                'force_unit_id' => $request['attributes']['force_units'],
                'ot_type_id' => $request['attributes']['ot_types'],
            ]);

            foreach ($request['parameters'] as $parameter) {
                SpecsParameter::create([
                    'model_id' => $model->id,
                    'name' => $parameter['name'],
                    'min' => $parameter['min'],
                    'max' => $parameter['max'],
                    'is_enabled' => $parameter['is_enabled'],
                ]);
            }

            DB::commit();

            return response()->json('done');
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
