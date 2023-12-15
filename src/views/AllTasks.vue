<script setup>
import AppPage from '../components/AppPage.vue';
import TaskForm from '../components/forms/TaskForm.vue';
import TasksContainer from '../components/tasks/TasksContainer.vue';
import YinxComp from '../components/yinxComp.vue';

import { ref} from 'vue';

let tog = ref(false)
let sortData = ref('')
let  toggle = ()=>( tog.value = !tog.value)
let sort =function (data){
  this.toggle();
 return sortData.value =data, console.log(sortData.value)
}
 
</script>

<template>
  <AppPage>
      <TaskForm/>
      <div class="lid-head flex-row just-space-between align-center">
        <h2>Unhandled Incidents</h2>
        <div class="dots flex-col align-center">
         <span class="fa" @click="toggle"><font-awesome-icon :icon="['fas', 'ellipsis-vertical']" /></span>
         <div v-if="tog">
          <li @click="sort('')" value="all">All</li>
          <li @click="sort('urgent')">Urgent</li>
          <li @click="sort('high')">High</li>
          <li @click="sort('medium')">Medium</li>
          <li @click="sort('low')">Low</li>
         </div>
          
        </div>
      </div> 
      <TasksContainer :inTask="true" :sort="sortData" />
      <YinxComp/>
  </AppPage>
</template>

<style scoped>
div.lid-head{
  background-color: grey;
}
h2{
  text-align: right;
    width: 65%;
  font-size: large;
  text-transform: uppercase;
}
.dots{
  height: 30px;
  width: 20%;
  margin-right: 2%;
}
.dots>span{
  color:aliceblue;
  padding: 4%;
}
.dots>div{
  width: 100%;
  margin-top: 12%;
}

li{
  width: 60%;
  background-color: white;
  color: black;
  font-weight: bold;
  border-bottom: 1px solid black;
  text-align: 2%;
  padding: 2% 20%;
  list-style-type: none;
  backdrop-filter: blur(20px);
}
li:first-child(){
  background-color: red !important;
}
</style>

