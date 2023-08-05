<template>
    <div class="row">
        <p>{{ title }}</p>
        <div class="col-md-5">
            <div class="input-group mb-3">
                <span class="input-group-text">Min</span>
                <input type="number" class="form-control" v-model="minValue" @input="emitMinValue">
            </div>
        </div>
        <div class="col-md-5">
            <div class="input-group mb-3">
                <span class="input-group-text">Max</span>
                <input type="number" class="form-control" v-model="maxValue" @input="emitMaxValue">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" v-model="is_enabled" @change="emitIsEnabled">
                <label class="form-check-label">Enabled?</label>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            minValue: 0,
            maxValue: 0,
            is_enabled: false
        };
    },
    methods: {
        emitMinValue() {
            this.$emit('minVal', this.minValue);
        },
        emitMaxValue() {
            this.$emit('maxVal', this.maxValue);
        },
        emitIsEnabled() {
            this.$emit('isEnabled', this.is_enabled)
        }
    },
    props: {
        title: {
            type: String,
            default: "",
            required: false
        },
    },
}
</script>

<style></style>
