<template>
    <div>
        <div align="right">
        <!-- <b-button @click="refresh"><b-icon icon="arrow-clockwise" /></b-button> -->
        <b-button variant="success" to="/admin/articles/create">
            <b-icon icon="plus" aria-hidden="true"/>
        </b-button>
        </div>
        <b-table striped hover :items="data" :fields="fields">
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
        <pagination 
            :data="items" 
            :limit="3" 
            @pagination-change-page="getResults"
            align="center"
        ></pagination>
    </div>
</template>
<script>
import moment from 'moment'
import pagination from 'laravel-vue-pagination'
export default {
    components: {
        pagination
    },
    props: {
        items: { type: Object },
    },
    data() {
        return {
            data: [],
            fields: [
                { key: 'id', label: 'ID', sortable: true },
                { key: 'title', label: 'Article', sortable: true },
                { key: 'owner.name', label: 'Owner', sortable: true },
                { key: 'created_at', label: 'Created', sortable: true },
                { key: 'updated_at', label: 'Updated', sortable: true },
                { key: 'actions', label: 'Action' },
            ],
        }
    },
    mounted(){
        this.data = this.items.data
        this.data.map((item) => {
            item.created_at = moment(item.created_at).format('yyyy-MM-DD HH:mm:ss');
            item.updated_at = moment(item.updated_at).format('yyyy-MM-DD HH:mm:ss');
        })
    },
    methods: {
        edit(item) {
            window.location.href = `/admin/articles/${item.id}/edit`;
        },
        deleteItem(item) {
            axios.delete(`/admin/articles/${item.id}`);
        },
        getResults(page = 1) {
            window.location.href = `/admin/articles?page=${page}`;
		},
    },
}
</script>