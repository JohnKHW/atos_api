<template>
    <div>
        <b-card :title="supermarket.name" :sub-title="supermarket.location">
            <b-button variant="outline-primary" @click="addCashiser()" pill>Select</b-button>
        </b-card>
    </div>
</template>
<script>
export default {
    props: {
        supermarket: {
            type: Object,
        },
    },
    data() {
        return {

        }
    },
    methods: {
        addCashiser() {
            console.log(this.supermarket)
            window.location.href = `/admin/supermarkets/${this.supermarket.id}`;
        },
    },
}
</script>