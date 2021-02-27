<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="tag in tags" :key="tag.id">
                    <div class="card-header">TITLE : {{tag.title}}</div>
                    <div class="card-body">ID : {{tag.id}}</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                tags: ""
            }
            
        },
        mounted() {
            console.log('Component mounted.');
            axios.get('api/tags').then(response => {
                console.log(response.data.data);
                this.tags =response.data.data;
            
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>