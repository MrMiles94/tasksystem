<script setup>
import TopNavBar from './navs/TopNavBar.vue';
import BottomNavBar from './navs/BottomNavBar.vue';
</script>

<template>
  <div  class="body">
    <TopNavBar></TopNavBar>

    <div  id="app-body">
        <slot></slot>
    </div>
    <BottomNavBar/>
</div>
</template>

<style scoped>

.body{
  position: absolute;
  width: 100%;
  height: 100%;
  overflow-y: hidden;
}
#bottom>a{
  margin:auto;
}
#app-body{
  height: 86%;
  overflow-y: scroll;
}
</style>

