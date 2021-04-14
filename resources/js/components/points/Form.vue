<template>
    <div>
        <b-form method="post" @submit.prevent="submit">
            <b-form-group id="name" label="Point Type" label-for="name">
                <b-form-input
                    id="name"
                    v-model="name"
                    type="text"
                    trim
                ></b-form-input>
            </b-form-group>
            
            <b-form-group id="description" label="Descrition" label-for="description">
                <b-form-input
                    id="description"
                    v-model="description"
                    type="text"
                    trim
                ></b-form-input>
            </b-form-group>

            <b-form-group id="mark" label="Points" label-for="mark">
                <b-form-input
                    id="mark"
                    v-model="mark"
                    type="number"
                    trim
                ></b-form-input>
            </b-form-group>

            <b-form-group id="selectable" label="Selectable" label-for="selectable">
                <b-form-checkbox
                    v-model="selectable"
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
            mark: '',
            selectable: '',
        }
    },
    mounted() {
        this.id = this.items ? this.items.id: ''
        this.name = this.items ? this.items.name: ''
        this.description = this.items ? this.items.description: ''
        this.mark = this.items ? this.items.mark: ''
        this.selectable = this.items ? this.items.selectable: ''
    },
    methods: { 
        submit(){
            let submittion = {
                name: this.name,
                description: this.description,
                mark: parseInt(this.mark),
                selectable: this.selectable,
            }
            if(this.mode === 'create') {
                axios.post('/admin/points', submittion)
                .then((res) => {
                    window.location.href = res.data.url
                })
            }
            else {
                axios.put(`/admin/points/${this.id}`, submittion)
            }
        },
    },
}
</script>
