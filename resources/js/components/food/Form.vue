<template>
    <div>
        <b-form method="post" @submit.prevent="submit">
            <b-form-group id="name" label="Food Name" label-for="name">
                <b-form-input
                    id="name"
                    v-model="name"
                    type="text"
                    trim
                ></b-form-input>
            </b-form-group>


            <b-form-group id="country" label="Country" label-for="country">
                <b-form-select
                    v-model="country"
                    :options="countries"
                    class="mb-3"
                    value-field="id"
                    text-field="name"
                    disabled-field="notEnabled"
                ></b-form-select>
            </b-form-group>

            <b-form-group id="type" label="Food Type" label-for="type">
                <b-form-select
                    v-model="type"
                    :options="types"
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
        types: { type: Array },
        countries: { type: Array },
        mode: { type: String },
    },
    data(){
        return {
            id: 0,
            name: '',
            country: '',
            type: '',
        }
    },
    mounted() {
        this.id = this.items ? this.items.id: ''
        this.name = this.items ? this.items.name: ''
        this.country = this.items ? this.items.country_id: ''
        this.type = this.items ? this.items.type_id: ''
    },
    methods: { 
        async submit(){
            let submition = {
                name: this.name,
                country_id: this.country,
                type_id: this.type,
            };
            if(this.mode === 'create') {
                await axios.post('/admin/food', submition)
                .then((res) => {
                    window.location.href = res.data.url
                })
            }
            else {
                axios.put(`/admin/food/${this.id}`, submition)
            }
        },
    },
}
</script>
