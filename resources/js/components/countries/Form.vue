<template>
    <div>
        <b-form method="post" @submit.prevent="submit">
            <b-form-group id="name" label="Country Name" label-for="name">
                <b-form-input
                    id="name"
                    v-model="name"
                    type="text"
                    trim
                ></b-form-input>
            </b-form-group>

            <b-form-group id="flag_path" label="Flag Path" label-for="flag_path">
                <b-form-input
                    id="flag_path"
                    v-model="flag_path"
                    type="text"
                    trim
                ></b-form-input>
            </b-form-group>

            <b-form-group id="region" label="Region" label-for="region">
                <b-form-select
                    v-model="region"
                    :options="regions"
                    class="mb-3"
                    value-field="id"
                    text-field="name"
                    disabled-field="notEnabled"
                ></b-form-select>
            </b-form-group>

            <b-button id="submit" type="submit" variant="outline-success">Submit</b-button>
        </b-form>
    </div>
</template>
<script>
export default {
    props: {
        items: { type: Object },
        regions: { type: Array },
        mode: { type: String },
    },
    data(){
        return {
            id: 0,
            name: '',
            flag_path: '',
            region: '',
        }
    },
    mounted() {
        this.id = this.items ? this.items.id: ''
        this.name = this.items ? this.items.name: ''
        this.flag_path = this.items ? this.items.flag_path: ''
        this.region = this.items ? this.items.region_id: ''
    },
    methods: { 
        submit(){
            let submittion = {
                name: this.name,
                flag_path: this.flag_path,
                region_id: this.region,
            }
            if(this.mode === 'create') {
                axios.post('/admin/countries', submittion)
            }
            else {
                axios.put(`/admin/countries/${this.id}`, submittion)
            }
        },
    },
}
</script>
