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

             <b-form-group id="system_name" label="System Name" label-for="system_name">
                <b-form-input
                    id="system_name"
                    v-model="system_name"
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

            <b-form-group id="score" label="Score" label-for="score">
                <b-form-input
                    id="score"
                    v-model="score"
                    type="number"
                ></b-form-input>
            </b-form-group>

            <b-form-group id="point" label="Food Type" label-for="point">
                <b-form-select
                    v-model="point"
                    :options="points"
                    class="mb-3"
                    value-field="id"
                    text-field="name"
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
        points: { type: Object },
        countries: { type: Array },
        mode: { type: String },
    },
    data(){
        return {
            id: 0,
            name: '',
            system_name: '',
            country: '',
            score: null,
            point: null,
        }
    },
    mounted() {
        this.id = this.items ? this.items.id: ''
        this.name = this.items ? this.items.name: ''
        this.system_name = this.items ? this.items.system_name: ''
        this.country = this.items ? this.items.country_id: ''
        this.score = this.items ? this.items.score: null
        this.point = this.items ? this.items.point_id: null
    },
    methods: { 
        async submit(){
            let submition = {
                name: this.name,
                system_name: this.system_name,
                country_id: this.country,
                score: this.score,
                point_id: this.point,
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
        getName(point){
            return `${ point.name } (${ point.mark}) `
        },
    },
}
</script>
