<template >
    <div class="nav " id="bottom">
        <router-link title="Home" to="/"><b class="fa">&#xf015;</b></router-link>
        <router-link title="Tasks" to="/Tasks"><b class="fa">&#xf0ae;</b></router-link>
        <router-link title="Notifications" to="/notifications"><b class="fa">&#xf0f3;</b></router-link>
        <router-link title="Archive" to="/Archive"><b class="fa">&#xf187;</b></router-link>
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