<template>
    <div id="Taskcontainer" class="tasks" >
        <SingleTask 
        v-for="(task, i ) in !inTask ? sortedTask.slice(0, 3) : sortedTask " 
        :task="task" 
        :key="i"
        />
        <button type="button" 
        v-if="(!inTask && (sortedTask.length>2))" 
        @click="this.$router.push('/tasks')"
        >See More</button>
    </div>
    
</template>

<script>
import SingleTask from './SigleTask.vue'
export default{
    data(){
        return{
            tasks: [],
            sortedTask:[]
        }
    },
    components:{
        SingleTask
    },
    props:{
        inTask:Boolean,
        sort:String
    },
    methods:{
        sortTask(sot){
           return (sot =='') ? this.sortedTask =this.tasks : this.sortedTask =this.tasks.filter((task)=>(task.priority==sot))
        }
    },
    created(){
        this.tasks = this.$store.state.user.tasks   ;  
        this.sortTask('')   
    },
    updated(){
       this.sortTask(this.sort)
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
