<template >
    <div class="nav " id="bottom">
        <router-link title="Home" to="/"><font-awesome-icon :icon="['fas', 'home']" /></router-link>
        <router-link title="Tasks" to="/Tasks"><font-awesome-icon :icon="['fas', 'list-check']" /></router-link>
        <router-link title="Notifications" to="/notifications"><font-awesome-icon :icon="['fas', 'bell']" /></router-link>
        <router-link title="Archive" to="/Archive"><font-awesome-icon :icon="['fas', 'box-archive']" /></router-link>
    </div>
</template>
<style scoped>
.nav>a{
  font-weight: bold;
  padding: 1%;
  text-align: center;
  background-color:#00000000
}
div.nav{
  font-size: large;
  display:flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-around
}
</style>