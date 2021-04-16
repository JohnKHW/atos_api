<template>
    <div>
        <b-form method="post" @submit.prevent="submit">
            <b-form-group id="name" label="Name" label-for="name">
                <b-form-input
                    id="name"
                    v-model="name"
                    type="text"
                    trim
                ></b-form-input>
            </b-form-group>

            <b-form-group id="username" label="Account" label-for="username">
                <b-form-input
                    id="username"
                    v-model="username"
                    type="text"
                    readonly
                ></b-form-input>
            </b-form-group>

            <b-form-group id="email" label="Email" label-for="email">
                <b-form-input
                    id="email"
                    v-model="email"
                    type="email"
                    trim
                ></b-form-input>
            </b-form-group>

            <b-form-group id="password" label="Reset Password" label-for="password">
                <b-form-input
                    id="password"
                    v-model="password"
                    type="password"
                    trim
                ></b-form-input>
            </b-form-group>

            <b-form-group id="role" label="Role" label-for="role">
                <b-form-select
                    v-model="role"
                    :options="roles"
                    class="mb-3"
                    value-field="id"
                    text-field="name"
                    disabled-field="notEnabled"
                ></b-form-select>
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

            <b-form-group id="net_points" label="Score" label-for="net_points">
                <b-form-input
                    id="net_points"
                    v-model="net_points"
                    type="number"
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
        roles: { type: Array },
        countries: { type: Array },
        mode: { type: String },
    },
    data(){
        return {
            id: 0,
            name: '',
            username: '',
            email: '',
            password: '',
            country: null,
            role: null,
            net_points: null,
        }
    },
    mounted() {
        this.id = this.items ? this.items.id: ''
        this.name = this.items ? this.items.name: ''
        this.username = this.items ? this.items.username: ''
        this.email = this.items ? this.items.email: ''
        this.password = this.items ? this.items.password: ''
        this.country = this.items ? this.items.country_id: null
        this.role = this.items ? this.items.role_id: null
        this.net_points = this.items ? this.items.net_points: null
    },
    methods: { 
        async submit(){
            let submition = {
                name: this.name,
                email: this.email,
                password: this.password,
                role_id: this.role,
                country_id: this.country,
                score: this.score,
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
