<template>
    <div>
        <b-form method="post" @submit.prevent="submit">
            <b-form-group id="name" label="Coupon Name" label-for="name">
                <b-form-input
                    id="name"
                    v-model="name"
                    type="text"
                    trim
                ></b-form-input>
            </b-form-group>
            
            <b-form-group id="points_cost" label="Points Cost" label-for="points_cost">
                <b-form-input
                    id="points_cost"
                    v-model="points_cost"
                    type="number"
                    trim
                ></b-form-input>
            </b-form-group>

            <b-form-group id="offer_price" label="Offer Price" label-for="offer_price">
                <b-form-input
                    id="offer_price"
                    v-model="offer_price"
                    type="number"
                    trim
                ></b-form-input>
            </b-form-group>

            <b-form-group id="description" label="Description" label-for="description">
                <b-form-textarea
                    id="description"
                    v-model="description"
                    placeholder="Coupon Description"
                    rows="3"
                    max-rows="6"
                ></b-form-textarea>
            </b-form-group>

            <b-form-group id="allotted_time" label="Alloted Time" label-for="allotted_time">
                <b-form-input
                    id="allotted_time"
                    v-model="allotted_time"
                    type="number"
                    trim
                ></b-form-input>
            </b-form-group>

            <b-form-group id="available" label="Available" label-for="available">
                <b-form-checkbox
                    v-model="available"
                    class="mb-3"
                    value="true"
                    unchecked-value="false"
                ></b-form-checkbox>
            </b-form-group>
            
            <b-button id="submit" type="submit" variant="outline-success">Submit</b-button>
        </b-form>
    </div>
</template>
<script>
export default {
    props: {
        items: { type: Object },
        mode: { type: String },
    },
    data(){
        return {
            id: 0,
            name: '',
            description: '',
            offer_price: null,
            points_cost: null,
            allotted_time: 30,
            available: false,
        }
    },
    mounted() {
        this.id = this.items ? this.items.id: ''
        this.name = this.items ? this.items.name:''
        this.description = this.items ? this.items.description: ''
        this.offer_price = this.items ? this.items.offer_price: null
        this.points_cost = this.items ? this.items.points_cost: null
        this.allotted_time = this.items ? this.items.allotted_time: 30
        this.available = this.items ? this.items.available: true
    },
    methods: { 
        submit(){
            let submittion = {
                name: this.name,
                description: this.description,
                offer_price: this.offer_price,
                points_cost: this.points_cost,
                allotted_time: this.allotted_time,
                available: this.available,
            }
            if(this.mode === 'create') {
                axios.post('/admin/coupons', submittion)
                .then((res) => {
                    window.location.href = res.data.url
                })
            }
            else {
                axios.put(`/admin/coupons/${this.id}`, submittion)
            }
        },
    },
}
</script>
