<template>
    <div class="card_container">
        <div class="card" v-for="category in categories" :key="category.id">
            <div class="card_head">TITLE : {{category.title}}</div>
            <div class="card_body">ID : {{category.id}}</div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                categories: ""
            }
            
        },
        mounted() {
            console.log('Component mounted.');
            axios.get('api/categories').then(response => {
                console.log(response.data.data);
                this.categories =response.data.data;
            
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>