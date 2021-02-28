<template>
    <div class="card_container">
        <div class="card" v-for="tag in tags" :key="tag.id">
            <div class="card_head">TITLE : {{tag.title}}</div>
            <div class="card_body">ID : {{tag.id}}</div>
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