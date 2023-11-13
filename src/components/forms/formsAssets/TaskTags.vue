<template>
    <div id="Tags" class="tag-btn-holder">
        <button type="button">Tags#</button>
        <div>
            <label v-for="(member, i) in members" :key="i">
                <input type="checkbox" :value="member" :name="member">
                {{ `mr ${member}` }}
            </label>
        </div>
    </div>
</template>
<script>
export default{
    data(){
        return{
            members: ['bolu', "aniefiok", 'akiniola','davis','moses']
        }
    }
}
</script>
<style scoped>
    
    .tag-btn-holder{
        width: 54px;
        height: 27px;
        margin: 2% !important;
        border:1px solid grey
    }
    .tag-btn-holder>button{
        width: 54px;
        height: 27px;
        outline: none;
        border: none;
    }
    .tag-btn-holder>div{
        margin-top: 1px;
        min-height: 100px;
        min-width: 200px;
        transform: scaleY(0);
        transform-origin: top;
        opacity: 0;
        position: relative;
        background-color:darkred;
    }
    .tag-btn-holder:hover>div{
        transform: scaleY(1);
        opacity: 1;
    }
    .tag-btn-holder>div>label{
        display: block;
        padding: 1%;
        margin:0% 0% 1% 0%;
        min-width: auto;
        padding-left: 10%;
        font-size: large;
        text-transform: capitalize;
        color: #fff;
        
    }
    .tag-btn-holder>div>label:hover{
    font-weight: bold;
    background-color: rgb(200, 20, 20);
    }

    
</style>