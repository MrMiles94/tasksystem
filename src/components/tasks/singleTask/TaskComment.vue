<template>
    <div :class="(comments.replies.length>0) ? ['comments','replied'] : ['comments']">
        <div class="writer">
            <img src="#" alt="">
            <span class="username"> {{comments.composer}}</span>
            <i>  reply to @{{comments.replyTo}}</i>
        </div>
        <div class="comment-body">
            <p>{{comments.msg }}</p>
        </div>
        <ReplyActionRibbon :action="comment"/>
        <TaskReplies
            v-for="(reply) in comment.replies" 
            :key="reply.id"  
            :reply="reply"
        />
        <slot></slot>
    </div>
</template>
<script>
import TaskReplies from './TaskReplies.vue';
import ReplyActionRibbon from '../ReplyActionRibbon.vue'
export default{
    data(){
        return{
            comment:this.comments
        }
    },
    props:{
    comments:Object
    },
    components:{
        TaskReplies,
        ReplyActionRibbon
    },
    methods:{
       
    },
    created(){
        
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