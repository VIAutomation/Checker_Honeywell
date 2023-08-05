<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Models</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Models</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Model Name</label>
                            <input type="text" class="form-control" v-model="form.model_name" />
                        </div>
                        <div class="card">
                            <div class="card-header">
                                General
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Client Name</label>
                                        <input type="text" class="form-control" v-model="form.general.client_name" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Honeywell No</label>
                                        <input type="text" class="form-control" v-model="form.general.honeywell_no" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Production Line
                                            Name</label>
                                        <input type="text" class="form-control"
                                            v-model="form.general.production_line_name" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Model
                                            Description</label>
                                        <textarea class="form-control" rows="5"
                                            v-model="form.general.model_description"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Engineering
                                            Level</label>
                                        <input type="text" class="form-control" v-model="form.general.engineering_level" />
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class=" card-header">Attributes</div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <label class="input-group-text">Circuit Type</label>
                                    <select class="form-select" v-model="form.attributes.circuit_type">
                                        <option v-for="(row, i) in circuit_type" :key="i" :value="row.id">{{ row.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text">Unit</label>
                                    <select class="form-select" v-model="form.attributes.units">
                                        <option v-for="(row, i) in units" :key="i" :value="row.id">{{ row.name }}</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text">Cover Style</label>
                                    <select class="form-select" v-model="form.attributes.cover_style">
                                        <option v-for="(row, i) in cover_style" :key="i" :value="row.id">{{ row.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text">Cell Type</label>
                                    <select class="form-select" v-model="form.attributes.cell_types">
                                        <option v-for="(row, i) in cell_types" :key="i" :value="row.id">{{ row.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text">Force Unit</label>
                                    <select class="form-select" v-model="form.attributes.force_units">
                                        <option v-for="(row, i) in force_units" :key="i" :value="row.id">{{ row.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text">OT Type</label>
                                    <select class="form-select" v-model="form.attributes.ot_types">
                                        <option v-for="(row, i) in ot_types" :key="i" :value="row.id">{{ row.name }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">Parameters</div>
                            <div class="card-body">
                                <div class="row">
                                    <parameters v-for="( parameter, key ) in  form.parameters " :key="key"
                                        :title="parameter.name" @minVal="value => form.parameters[key].min = value"
                                        @maxVal="value => form.parameters[key].max = value"
                                        @isEnabled="value => form.parameters[key].is_enabled = value"></parameters>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" @click="save">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Parameters from './Parameters.vue';
export default {
    data() {
        return {
            form: {
                model_name: '',
                general: {
                    client_name: '',
                    honeywell_no: '',
                    production_line_name: '',
                    model_description: '',
                    engineering_level: ''
                },
                attributes: {
                    circuit_type: null,
                    units: null,
                    cover_style: null,
                    cell_types: null,
                    force_units: null,
                    ot_types: null,
                },
                parameters: {
                    operate_force: {
                        name: 'Operate Force',
                        min: 0,
                        max: 0,
                        is_enabled: false
                    },
                    diff_force: {
                        name: 'Diff Force',
                        min: 0,
                        max: 0,
                        is_enabled: false
                    },
                    over_travel: {
                        name: 'Over Travel',
                        min: 0,
                        max: 0,
                        is_enabled: false
                    },
                    dead_brake_NO: {
                        name: 'Dead Brake NO',
                        min: 0,
                        max: 0,
                        is_enabled: false
                    },
                    operate_point: {
                        name: 'Operate Point',
                        min: 0,
                        max: 0,
                        is_enabled: false
                    },
                    release_travel: {
                        name: 'Release Travel',
                        min: 0,
                        max: 0,
                        is_enabled: false
                    },
                    pre_travel: {
                        name: 'Pre Travel',
                        min: 0,
                        max: 0,
                        is_enabled: false
                    },
                    release_force: {
                        name: 'Release Force',
                        min: 0,
                        max: 0,
                        is_enabled: false
                    },
                    diff_travel: {
                        name: 'Diff Travel',
                        min: 0,
                        max: 0,
                        is_enabled: false
                    },
                    free_position: {
                        name: 'Free Position',
                        min: 0,
                        max: 0,
                        is_enabled: false
                    },
                    dead_brake_NC: {
                        name: 'Dead Brake NC',
                        min: 0,
                        max: 0,
                        is_enabled: false
                    },
                    release_point: {
                        name: 'Release Point',
                        min: 0,
                        max: 0,
                        is_enabled: false
                    },
                    total_travel: {
                        name: 'Total Travel',
                        min: 0,
                        max: 0,
                        is_enabled: false
                    },
                    dbdm_rel: {
                        name: 'DBDM Rel',
                        min: 0,
                        max: 0,
                        is_enabled: false
                    },
                    dbdm_open: {
                        name: 'DBDM Open',
                        min: 0,
                        max: 0,
                        is_enabled: false
                    },
                }
            },

            circuit_type: {},
            units: {},
            cover_style: {},
            cell_types: {},
            force_units: {},
            ot_types: {}
        }
    },
    mounted() {
        this.circuitType();
        this.unit();
        this.coverStyle();
        this.cellTypes();
        this.forceUnits();
        this.otTypes();
    },
    components: {
        Parameters
    },
    methods: {
        save() {
            axios.post('/api/models', this.form).then(res => {
                console.log(res.data)
            })
        },
        circuitType() {
            axios.get('/api/circuit_types').then(res => {
                this.circuit_type = res.data
            })
        },
        unit() {
            axios.get('/api/units').then(res => {
                this.units = res.data
            })
        },
        coverStyle() {
            axios.get('/api/cover_styles').then(res => {
                this.cover_style = res.data
            })
        },
        cellTypes() {
            axios.get('/api/cell_types').then(res => {
                this.cell_types = res.data
            })
        },
        forceUnits() {
            axios.get('/api/force_units').then(res => {
                this.force_units = res.data
            })
        },
        otTypes() {
            axios.get('/api/ot_types').then(res => {
                this.ot_types = res.data
            })
        }
    }
};
</script>
