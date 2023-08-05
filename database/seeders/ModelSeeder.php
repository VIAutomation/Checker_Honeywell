<?php

namespace Database\Seeders;

use App\Models\Model;
use App\Models\SpecsGeneral;
use App\Models\SpecsAttribute;
use App\Models\SpecsParameter;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $model = Model::create([
            'name' => 'BA-R138-A2'
        ]);

        SpecsGeneral::create([
            'model_id' => $model->id,
            'client_name' => 'Honeywell',
            'honeywell_no' => 'SM',
            'production_line_name' => 'SM Big',
            'model_description' => 'SM-115',
            'engineering_level' => 'A',
        ]);

        SpecsAttribute::create([
            'model_id' => $model->id,
            'circuit_type_id' => 1,
            'unit_id' => 1,
            'cover_style_id' => 1,
            'cell_type_id' => 1,
            'force_unit_id' => 1,
            'ot_type_id' => 1,
        ]);

        $parameters = [
            ['name' => 'Operate Force', 'min' => 11.5, 'max' => 19.5, 'is_enabled' => TRUE],
            ['name' => 'Diff Force', 'min' => 0, 'max' => 0, 'is_enabled' => FALSE],
        ];

        foreach($parameters as $parameter) {
            SpecsParameter::create([
                'model_id' => $model->id,
                'name' => $parameter['name'],
                'min' => $parameter['min'],
                'max' => $parameter['max'],
                'is_enabled' => $parameter['is_enabled'],
            ]);
        }


        ///////////////////////////////////////////////

        $model = Model::create([
            'name' => 'YZ-RW8435113-A22'
        ]);

        SpecsGeneral::create([
            'model_id' => $model->id,
            'client_name' => 'Honeywell',
            'honeywell_no' => 'SM BZ',
            'production_line_name' => 'Fact C B and Submin',
            'model_description' => 'Internal Adjust',
            'engineering_level' => 'A',
        ]);

        SpecsAttribute::create([
            'model_id' => $model->id,
            'circuit_type_id' => 4,
            'unit_id' => 2,
            'cover_style_id' => 3,
            'cell_type_id' => 2,
            'force_unit_id' => 2,
            'ot_type_id' => 2,
        ]);

        $parameters = [
            ['name' => 'Operate Force', 'min' => 11.5, 'max' => 19.5, 'is_enabled' => TRUE],
            ['name' => 'Diff Force', 'min' => 0, 'max' => 0, 'is_enabled' => FALSE],
        ];

        foreach($parameters as $parameter) {
            SpecsParameter::create([
                'model_id' => $model->id,
                'name' => $parameter['name'],
                'min' => $parameter['min'],
                'max' => $parameter['max'],
                'is_enabled' => $parameter['is_enabled'],
            ]);
        }
    }
}
