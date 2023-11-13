<template>
    <div id="Taskcontainer" class="tasks" >
        <SingleTask 
        v-for="(task, i ) in !inTask ? tasks.slice(0, 3) : tasks " 
        :task="task" 
        :key="i"
        />
        <button type="button" 
        v-if="(!inTask && (tasks.length>2))" 
        @click="this.$router.push('/tasks')"
        >See More {{(tasks.length>2 )}}</button>
    </div>
    
</template>

<script>
import SingleTask from './SigleTask.vue'
export default{
    data(){
        return{
            tasks: []
        }
    },
    components:{
        SingleTask
    },
    props:{
        inTask:Boolean
    },
    created(){
        this.tasks = this.$store.state.user.tasks            
    }
}
</script>
<style scoped>

.tasks{
    background-color: #db36362c;
    width: 100%;
    height: auto;
    margin: 0px !important;
    display: flex;
    flex-direction: column;
    align-items: center;
}
button{
    margin: 4%;
    padding: 1% 3%;
    border-radius: 5px;
    color: white;
    outline: none;
    background-color: darkred;
    border: 1px solid #00000000;
}
</style>
