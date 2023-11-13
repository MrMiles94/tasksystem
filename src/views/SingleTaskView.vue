

<template>
    <AppPage> 
        <div class="singleTaskPage container-fluid">
                <div class="task">
                    <div class="task-header">
                        <span>
                            <b>{{task.title}} sdkojwd wwemfwef  </b> 
                            <a><i class="fa">&#xf3c5;</i> {{ task.location }} </a>
                        </span>
                        <TaggedMembers :tags="task.tags"></TaggedMembers>
                    </div>
                    <div class="task-body">
                        <p>{{task.description}}</p>
                        <div class="pictures">
                
                        </div>
                        <div class="action-ribbon flex-row just-space-around">
                            <a title="Home" ><b class="fa">&#xf075;</b> {{task.comments.length}}</a>
                            <a class="active" title="Home" ><b class="fa">&#xf164;</b> {{task.likes.length}}</a>
                            <a title="Home" ><b class="fa">&#xf165;</b> {{task.dislikes.length}}</a>
                            <a title="Home" ><b class="fa rotate">&#xf110;</b> {{task.status}}</a>
                            
                        </div>
                    </div>
                    
                </div>
                <div class="comments replied">
                    <div class="writer">
                        <img src="#" alt="">
                        <span class="username"> {{task.comments[0].composer}}</span>
                    </div>
                    <div class="comment-body">
                        <p>{{task.comments[0].msg}}</p>
                    </div>
                    <div class="comment">
                        <a title="Home" ><b class="fa">&#xf075;</b> {{task.comments[0].replies.length}}</a>
                        <a class="active" title="Home" ><b class="fa">&#xf164;</b> {{task.comments[0].likes.length}}</a>
                        <a title="Home" ><b class="fa">&#xf165;</b> {{task.comments[0].dislikes.length}}</a>
                        
                    </div>

                    <div class="comments">
                        <div class="writer">
                            <img src="#" alt="">
                            <span class="username"> {{task.comments[0].composer}}</span>
                        </div>
                        <div class="comment-body">
                            <p>{{task.comments[0].msg}}</p>
                        </div>
                        <div class="comment">
                            <a title="Home" ><b class="fa">&#xf075;</b> {{task.comments[0].replies.length}}</a>
                            <a class="active" title="Home" ><b class="fa">&#xf164;</b> {{task.comments[0].likes.length}}</a>
                            <a title="Home" ><b class="fa">&#xf165;</b> {{task.comments[0].dislikes.length}}</a>
                            
                        </div>
                    </div>
                </div>
            
        </div>
    </AppPage>
</template>
<script>
    import AppPage from '../components/AppPage.vue';
    import TaggedMembers from '../components/tasks/TagedMembers.vue'
    export default{
        data(){
            return{
                link:this.$route.params.id-1,
                task:{}
            }
        },
        methods:{
           fetchTask(){
               this.task =  this.$store.state.user.tasks[this.link]
            }
        },
        created(){
            this.fetchTask()
        },
        components:{
            AppPage,
            TaggedMembers
        }
    }
</script>
<style scoped>
p{
    padding: 0% 2%;
}
.task{
    border: 1px solid rgba(139, 0, 0, 0.263);
}
    .task-header{
        width: 96%;
        height: auto;
        border-bottom: 1px solid rgba(139, 0, 0, 0.263) ;
        padding: 0% 2% ;
        padding-bottom: 2%;
    }
    .task-header>b{
        color:hsla(160, 100%, 37%, 1) ;
        margin-left: 2%;
    } 
    .task-header a{
        margin-left: auto;
        color: black;
        font-size: smaller;
    }
    .task-header i{
        color: hsla(160, 100%, 37%, 1);
        font-size: large;
    }
    .task-header>span{
        margin: 2% 2% 1% 2%;  
        width: 90%;
        display: flex;

    }
    .pictures{
        width: 96%;
        padding: 1%;
        margin: 1% auto;
        min-height: 200px;
        max-height: 500px;
        background-color: blueviolet;
    }
    .action-ribbon{
        min-height: 30px;
        padding: 2%;
        border-top: 1px solid rgba(139, 0, 0, 0.263);
    }
    .comment{
        width: 100%;
        padding: 1% 2%;
        border-bottom: 1px solid rgba(139, 0, 0, 0.073);


    }
    .comment>a{
        margin-top: auto;
        color: grey;
        margin-right: 15%;
    }
    .comment>a.active>b{
        color:hsla(160, 100%, 37%, 1) ;
    }
    .action-ribbon>a{
        margin: auto 0%;
        color: gray;
    }
    .action-ribbon>a.active>b{
        color: hsla(160, 100%, 37%, 1);
    }
    .writer{
        margin-top: 2%;
    }
    .writer>img{
        width: 30px;
        aspect-ratio: 1/1;
        border-radius: 50%;
    }
    .writer>span{
        margin-left: 2%;
        font-weight: bold;
    }
    .comment-body{
        width: 100%;
    }
    .comments{
        width: 90%;
        margin-left: 20px;
        margin-top: 2%;
    }
    .replied{
        border-left: 1px solid rgba(139, 0, 0, 0.073);
    }
    .replied>.writer{
        margin-top: 0% ;
        margin-left: -15px ;
    }
    .replied>.comments{
        margin-top: 0% !important;
        margin-left: 0px !important;
    }
    .rotate{
        animation: rotate 3s infinite linear;
    }
</style>