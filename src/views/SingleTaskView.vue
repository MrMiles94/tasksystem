

<template>
    <AppPage> 
        <div class="singleTaskPage container-fluid">
                <div class="task">
                    <div class="task-header">
                        <span>
                            <b>{{task.title}} sdkojwd wwemfwef  </b> 
                            <a class="capitalize"><em><font-awesome-icon :icon="['fas', 'location-dot']" /></em> {{ task.location }} </a>
                        </span>
                        <TaggedMembers :tags="task.tags"></TaggedMembers>
                    </div>
                    <div class="task-body">
                        <p>{{task.description}}</p>
                        <div class="pictures">
                
                        </div>
                        <ActionRibbon :action="task" @change-priority="changePriority(item)"/>
                    </div>
                    
                </div>
                
            <TaskComment 
            v-for="(comment) in task.comments" 
            :key="comment.id"  
            :comments="comment"
            >
            </TaskComment>
        </div>
    </AppPage>
</template>
<script>
    import AppPage from '../components/AppPage.vue';
    import TaggedMembers from '../components/tasks/TagedMembers.vue';
    import TaskComment from '../components/tasks/singleTask/TaskComment.vue';
    import ActionRibbon from '../components/tasks/ActionRibbon.vue';
    export default{
        data(){
            return{
                link:this.$route.params.id-1,
                task:{},
                me:this.me
            }
        },
        methods:{
           fetchTask(){
               this.task =  this.$store.state.user.tasks[this.link]
            },
            changePriority(item){
            this.task.priority =item
            console.log(this.task.priority)
             },
            validation(users){
            let  myUserName='myUserName'  //this part will always fetch the users user name
            let result = false
            users.forEach(user => {
                    if(user==myUserName){
                        result =true
                    }
                    else{
                      result = false
                    }
                });
                return result
        
            },
            validate(users){
                return users.filter((user)=>(this.me == user))
            },
            like(element){
                if(element.likes.filter((user)=>this.me == user).length==1){
                    element.likes=element.likes.filter((user)=>this.me != user)
                }else{
                    element.likes = [...element.likes, this.me];
                    element.dislikes=element.dislikes.filter((user)=>this.me != user)
                }
            },
            dislike(element){
                if(element.dislikes.filter((user)=>this.me == user).length==1){
                    element.dislikes=element.dislikes.filter((user)=>this.me != user)
                }else{
                    element.dislikes = [...element.dislikes, this.me];
                    element.likes=element.likes.filter((user)=>this.me != user)
                }              
            }
            
        },
        created(){
            this.fetchTask();
            this.me = this.$store.state.user.data.userName;
            console.log(this.validate(['12','myUserName', 'me', 'miles94']) )
        },
        components:{
            AppPage,
            TaggedMembers,
            TaskComment,
            ActionRibbon
        }
    }
</script>
<style scoped>
em{
    color: darkred;
}
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
    .action-ribbon>a{
        margin: auto 0%;
        color: gray;
        text-transform: capitalize;
        cursor: pointer;
    }
    .action-ribbon>a.active>b{
        color: hsla(160, 100%, 37%, 1);
    }
    .rotate{
        animation: rotate 3s infinite linear;
    }
</style>