<template>
    <div class="card_container">
        <div class="card" v-for="article in articles" :key="article.id">
            <div class="card-header">TITLE : {{article.title}}</div>
            <div class="card-body">AUTHOR : {{article.author}}</div>
            <div class="card-header">BODY : {{article.body}}</div>
            <div class="card-body">Category : {{article.category_name}}</div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                articles: "",
                categories: ""
            }
            
        },
        mounted() {
            console.log('Component mounted.');
            axios.get('api/articles').then(response => {
                
                this.articles =response.data.data;
            
            }).catch(error => {
                //console.log(error);
            })
            axios.get('api/categories').then(response => {
                
                this.categories =response.data.data;
                //console.log(category);
                this.articles.forEach((article,i) => {
                   //console.log(article.category_id);
                    this.categories.forEach(element => {
                        
                        if (article.category_id == element.id) {
                            this.$set(this.articles[i],"category_name",element.title)
                            
                        }
                    });
                });
                console.log(this.articles);
            
            }).catch(error => {
                console.log(error);
            })
            
        }
    }
</script>