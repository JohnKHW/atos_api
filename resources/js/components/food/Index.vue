<template>
    <div>
        <div align="right">
            <b-button variant="success" to="/admin/food/create">
                <b-icon icon="plus" aria-hidden="true"/>
            </b-button>
        </div>
        <b-table striped hover :items="items" :fields="fields">
            <template v-slot:cell(actions)="row">
                <b-button variant="info" size="sm" class="mr-1" @click="edit(row.item)">
                <b-icon icon="pencil-square" aria-hidden="true"/></b-button>
                <b-button
                    variant="danger"
                    size="sm"
                    class="mr-1"
                    @click="deleteItem(row.item)"
                >
                <b-icon icon="trash" aria-hidden="true" /></b-button>
            </template>
        </b-table>
    </div>
</template>
<script>
import moment from 'moment'
export default {
    props: {
        items: { type: Array },
    },
    data() {
        return {
            fields: [
                { key: 'id', label: 'ID', sortable: true },
                { key: 'name', label: 'Supermarket', sortable: true },
                { key: 'point.name', label: 'Type', sortable: true },
                { key: 'country.name', label: 'Country', sortable: true },
                { key: 'created_at', label: 'Created', sortable: true },
                { key: 'updated_at', label: 'Updated', sortable: true },
                { key: 'actions', label: 'Action' },
            ],
        }
    },
    mounted(){
        this.items.map((item) => {
            item.created_at = moment(item.created_at).format('yyyy-MM-DD HH:mm:ss');
            item.updated_at = moment(item.updated_at).format('yyyy-MM-DD HH:mm:ss');
        })
    },
    methods: {
        edit(item) {
            window.location.href = `/admin/food/${item.id}/edit`;
        },
        deleteItem(item) {
            axios.delete(`/admin/food/${item.id}`);
        },
    },
}
</script>