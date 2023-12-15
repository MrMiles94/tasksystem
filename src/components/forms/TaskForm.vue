<template>
    <div class="add-tasks" :style="addEvent? 'background-color: #fff': ''">

        <h3>Raise an Incident</h3>
        <div v-if="!addEvent" style="width: 100%; height:70px">
        <button type="button" @click="toggleTaskForm">+</button>
        <span>Click the button to Raise an incident</span>
        </div>
        <form v-else action="" method="post" id="add-event" @submit.prevent="console.log('submitted')">
            <input type="text" placeholder="Task Title" name="title">
            <CustomSelect :options="departments" name="departments"/>
            <Tags />
            <textarea name="content" id="Task-content" placeholder="Centents here"></textarea>
            <div class="action-btns">
                <button @click="toggleTaskForm" type="button" class="cancle"><font-awesome-icon :icon="['fas', 'xmark']" /></button>
                <button class="done"><font-awesome-icon :icon="['fas', 'check']" /></button>
            </div>
        </form>
    </div>
</template>

<script>
import CustomSelect from './formsAssets/CustomSelect.vue';
import Tags from './formsAssets/TaskTags.vue';
export default{
    data(){
        return{
            addEvent:false,
            departments:["Utility",'Power plant','Quality control','Water treatment','Efluent treatment plant']
        }
    },
    methods:{
        toggleTaskForm(){
            this.addEvent =!this.addEvent
        }
    },
    components: {
        CustomSelect,
        Tags
    }
}
</script>
<style scoped>

.add-tasks{
    width: 95%;
    margin: auto;
    height: auto;
    margin-bottom: 3%;
    transition-duration: 0ms;
    }
    .add-tasks>h3{
        text-align: center;
        font-size: large;
        text-transform: uppercase;
        margin:  1% !important;
    }
    .add-tasks>form>input, .add-tasks>form>select{
        width: 47%;
        margin:  2% 0% 2% 1%;
        padding: 1% 0% 1% 1%;
    }
    .add-tasks>form>textarea{
        display: block;
        width: 96%;
        margin-left: 1%;
        padding-top: 1%;
        min-height: 150px;
    }
    .add-tasks>form>input, 
    .add-tasks>form>select, 
    .add-tasks>form>textarea{
    text-indent: 2%;
    }
    .add-tasks>div{
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-bottom: 5%;
    }
    .add-tasks>div>button{
        margin: 1% 2%;
        outline: none;
        width:40px;
        aspect-ratio: 1/1;
        font-size: xx-large;
    }
    .action-btns{
        width: 97%;
        padding:2% 0%;
        margin: auto;
        display: flex;
        flex-direction: row;
    }
    
    .action-btns>button.done{
        margin: 0% 0% 0% auto;
        outline: none;
        
        background-color:green;
        border: none;

    }
    .done, .cancle{
        border: 1px solid black;
        border-radius: 4px;
        font-size: larger;
        padding: 1.5% 2%;
        color: #fff;
    }
    .action-btns>button.cancle{
        background-color: darkred;
        border:none
    }

</style>