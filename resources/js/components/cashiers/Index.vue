<template>
    <div>
        <b-form method="post" @submit.prevent="submit">
            <b-form-group id="supermarket" label="Supermarket" label-for="supermarket">
                <b-form-select 
                    v-model="supermarket_id" 
                    :options="supermarkets"
                    value-field="id"
                    text-field="name"
                    @change="selected"
                ></b-form-select>
            </b-form-group>
            <b-form-group v-for="(f) in food" :key="f.id" :label="f.name">
                <b-form-spinbutton v-model="f.amount" min="0" max="100" placeholder="--"></b-form-spinbutton>
            </b-form-group>
            <b-button id="submit" type="submit" variant="outline-success">Settle</b-button>
        </b-form>
        <b-modal id="result" title="QrCode">
            <div class="d-block text-center" v-html="qrcode"></div>
        </b-modal>
    </div>
</template>
<script>
export default {
    props: {
        supermarkets: {
            type: Array,
        },
    },
    data() {
        return {
            supermarket_id: '',
            food: [],
            qrcode: '',
        }
    },
    mounted() {
    },
    methods: {
        async selected() {
            await axios.get(`/api/supermarkets/${this.supermarket_id}`)
            .then((res) => {
                this.food = res.data.food.map((f) => {
                    f.amount = ''
                    return f
                })
            })
        },

        async submit() {
            await axios.post(`cashiers`, {
                food: this.food
                .filter((f) => f.amount > 0)
                .map((f) => {
                    f.supermarket_food_id = f.supermarket_food.id
                    delete f.id
                    delete f.name
                    delete f.supermarket_food
                    return f
                }),
            })
            .then((res) => {
                this.qrcode = res.data.qrcode
                this.$bvModal.show('result')
            })
        },

    },
}
</script>