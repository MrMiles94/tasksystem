<template>
    
    <div class="comment">
        <a title="Comment" class="comments pointer" >
            <b ><font-awesome-icon :icon="['fas', 'comment']" /></b> {{action.replies.length}}
        </a>
        <a class="likes pointer" title="Like" 
        :class="validate(action.likes).length==1 ?'active': '' " 
        @click="like(action)">
            <b class="fa"><font-awesome-icon :icon="['fas', 'thumbs-up']" /></b> {{action.likes.length}}
        </a>
        <a class="dislike pointer" title="Dislike"
        :class="validate(action.dislikes).length==1 ?'active': ''"
        @click="dislike(action)" 
        >
            <b class="fa"><font-awesome-icon :icon="['fas', 'thumbs-down']" /></b> {{action.dislikes.length}}
        </a>
    </div>
</template>

<script>
export default{
    data(){
        return {
            me:'',
        }
    },
    props:{
       action: Object 
    },
    components:{
    },
   
    methods:{
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
</style>