<template>
<div>
    <b-form method="post" @submit.prevent="submit">
        <b-form-group id="name" label="Supermarket Name" label-for="name">
            <b-form-input id="name" v-model="name" type="text" trim></b-form-input>
        </b-form-group>

        <b-form-group id="location" label="Location" label-for="location">
            <b-form-input id="location" v-model="location" type="text" trim></b-form-input>
        </b-form-group>
        <b-form-group id="country" label="Country" label-for="country">
            <b-form-select v-model="country" :options="countries" class="mb-3" value-field="id" text-field="name" disabled-field="notEnabled"></b-form-select>
        </b-form-group>

        

        <b-form-group label="Food List">
            <b-dropdown size="sm" variant="outline-secondary" block menu-class="w-100">
                <template #button-content>Add Food</template>
                <b-dropdown-form @submit.stop.prevent="() => {}">
                    <b-form-group label="Search Food" label-for="tag-search-input" label-cols-md="auto" class="mb-0" label-size="sm" :description="noResult">
                        <b-form-input v-model="search" id="tag-search-input" type="search" size="sm" autocomplete="off"></b-form-input>
                    </b-form-group>
                </b-dropdown-form>
                <b-dropdown-divider></b-dropdown-divider>
                <b-dropdown-item-button v-for="option in availableOptions" :key="option.id" @click="addTag({ option })">
                    {{ option.name }}
                </b-dropdown-item-button>
                <b-dropdown-text v-if="availableOptions.length === 0">
                    There are no food available to select
                </b-dropdown-text>
            </b-dropdown>
            <div>
                <b-badge v-for="(sf, index) in sellfood" :key="index" class="px-3 py-2 m-1" pill variant="primary">
                    <span>{{ sf.name }}</span>
                    <span class="cross" @click="removeTag(sf)" pill>×</span>
                </b-badge>
            </div>
        </b-form-group>

        <b-button id="submit" type="submit" variant="outline-success">Submit</b-button>
    </b-form>
</div>
</template>

<script>
export default {
    props: {
        items: {
            type: Object
        },
        countries: {
            type: Array
        },
        foodlist: {
            type: Array
        },
        food: {
            type: Array
        },
        mode: {
            type: String
        },
    },
    data() {
        return {
            id: 0,
            name: '',
            location: '',
            country: '',
            search: '',
            sellfood: [],
        }
    },
    mounted() {
        this.id = this.items ? this.items.id : ''
        this.name = this.items ? this.items.name : ''
        this.location = this.items ? this.items.location : ''
        this.country = this.items ? this.items.country_id : ''
        this.sellfood = this.food.map((f) => {
            f.id = f.food_id
            delete f.supermarket_food
            delete f.food_id
            delete f.pivot
            return f
        })
    },
    computed: {
        criteria() {
            // Compute the search criteria
            return this.search.trim().toLowerCase()
        },
        availableOptions() {
            const criteria = this.criteria
            // Filter out already selected options
            const options = this.foodlist.filter(opt => this.sellfood.indexOf(opt) === -1)
            if (criteria) {
                // Show only options that match criteria
                return options.filter(opt => opt.name.toLowerCase().indexOf(criteria) > -1);
            }
            // Show all options available
            //console.log(options)
            return options
        },
        noResult() {
            if (this.criteria && this.availableOptions.length === 0) {
                return 'There are no food matching your search criteria'
            }
            return ''
        },
    },
    methods: {
        async submit() {
            let submition = {
                name: this.name,
                location: this.location,
                country_id: this.country,
                food: this.sellfood.map((f) => f.id)
            };
            if (this.mode === 'create') {
                await axios.post('/admin/supermarkets', submition)
                    .then((res) => {
                        window.location.href = res.data.url
                    })
            } else {
                await axios.put(`/admin/supermarkets/${this.id}`, submition)
            }
        },
        addTag(option) {
            this.sellfood.push(option.option)
            this.search = ''
        },
        removeTag(option){
            this.sellfood.splice(this.sellfood.indexOf(option), 1)
        },
    },
}
</script>
<style scoped>
.cross {
    cursor: pointer;
}
</style>
