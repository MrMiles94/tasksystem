<script setup>
import AppPage from '../components/AppPage.vue';
import TaskForm from '../components/forms/TaskForm.vue';
import TasksContainer from '../components/tasks/TasksContainer.vue';
</script>

<template>
  <AppPage>
      <TaskForm/>
      <h3>Unhandled Incidents</h3> 
      <TasksContainer :inTask="true" />
  </AppPage>
</template>

<style scoped>
h3{
margin: 0px !important;
text-align: center;
font-size: large;
text-transform: uppercase;
padding:1%;
background-color: grey;
}
</style>

