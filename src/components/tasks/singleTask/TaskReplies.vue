<template>
    <div class="comments ">
        <div class="writer">
            <img src="#" alt="">
            <span class="username"> {{reply.composer}}</span>
            <i>  reply to @{{reply.replyTo}}</i>
        </div>
        <div class="comment-body">
            <p>{{reply.msg}}</p>
        </div>
    </div>
</template>
<script>
export default{
    data(){
        return{
            replies:this.reply
        }
    },
    components:{
    },
    props:{
    reply:Object
    },
    methods:{
       
    },
    created(){
        
    }
}
</script>
<style scoped>
p{
    padding: 0% 2%;
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
</style>