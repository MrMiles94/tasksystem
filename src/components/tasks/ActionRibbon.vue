<template>
    
    <div class="action-ribbon flex-row just-space-around">
        <a title="Comment" class="comments pointer" >
            <b><font-awesome-icon :icon="['fas', 'comment']" /></b> {{action.comments.length}}
        </a>
        <a class="likes pointer" title="Like" 
        :class="validate(action.likes).length==1 ?'active': '' " 
        @click="like(action)">
        <b><font-awesome-icon :icon="['fas', 'thumbs-up']" /></b> {{action.likes.length}}
        </a>
        <a class="dislike pointer" title="Dislike"
        :class="validate(action.dislikes).length==1 ?'active': ''"
        @click="dislike(action)" 
        >
        <b><font-awesome-icon :icon="['fas', 'thumbs-down']" /></b> {{action.dislikes.length}}
        </a>

        <a title="Priority" class="flex-row align-center"
        v-if="action.priority&&(me==action.composer)"
        :class="(me==action.composer) ? ['priority', 'pointer']:'priority'"
        >
            <b class="fa rotate" @click="togglePriority()"><font-awesome-icon :icon="['fas', 'level-up-alt']" /></b>
            <em v-if="showPrio" @click="togglePriority()"> {{action.priority}}</em>
            <select v-else @change="changePriority(item, action)" 
            name="priority" id="priority" v-model="item">
                <option v-for="(value, i) in priorities" 
                :value="value" :key="i">{{value}}</option>
            </select>
        </a> 
        <a title="Priority" class="flex-row align-center"
        v-else-if="action.priority"
        :class="(me==action.composer) ? ['priority', 'pointer']:'priority'"
        >
            <b class="fa rotate">&#xf110;</b>
            <em v-if="showPrio"> {{action.priority}}</em>
            
        </a>    
    </div>
</template>

<script>
export default{
    data(){
        return {
            me:'',
            item:this.action.priority,
            task:this.task,
            showPrio:true,
            priorities:['urgent', 'high', 'medium','low']
        }
    },
    props:{
       action: Object 
    },
    components:{
    },
   
    methods:{
        togglePriority(){
            this.showPrio = !this.showPrio
         },
        changePriority(item, element){
            element.priority =item
            this.togglePriority()
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
        this.me = this.$store.state.user.data.userName;
    }
}
</script>
<style scoped>
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
}
.action-ribbon>a.active>b{
    color: hsla(160, 100%, 37%, 1);
}
select{
    width: auto;
    height: 30px !important;
    border: none;
    background-color: #00000000;
    text-transform: capitalize;
    outline: #00000000;
    z-index: 300;
    position: relative;
    margin-left: 1%;
}
em,select{
    margin-left: 5px;
}
</style>