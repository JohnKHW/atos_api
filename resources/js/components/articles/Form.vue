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
            
            <b-form-group id="name" label="Article Name" label-for="name">
                <b-form-input
                    id="name"
                    v-model="name"
                    type="text"
                    trim
                ></b-form-input>
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
