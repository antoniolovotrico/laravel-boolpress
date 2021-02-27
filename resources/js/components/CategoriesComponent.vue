<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="category in categories" :key="category.id">
                    <div class="card-header">TITLE : {{category.title}}</div>
                    <div class="card-body">ID : {{category.id}}</div>
                </div>
            </div>
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