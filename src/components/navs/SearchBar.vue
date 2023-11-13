<template>
    <div class="nav task-bar" id="top">
        <button @click="this.$router.go(-1)"  class="back-btn">
          <i class="fa">&#xf104;</i>
        </button>
        <div class="logo">
          Aniefiok Asuquo | aniefiokasuquo@gmail.com
        </div>
        <div :class=" searchBar ? 'search-bar':'search-barr' " @click="searchBar = !searchBar">
          <form>
            <input type="text" v-model="search" placeholder="Search">
          </form>
          <i @click="toggleSearch">search</i>
        </div>
    </div>
</template>
<script >
  export default{
    data(){
      return{
        search: "",
        searchBar:true
      }
    },
    methods:{
      toggleSearch(){
        this.searchBar = !this.searchBar
        console.log(this.searchBar)
      }
    }
  }
</script>
<style scoped>
i{
  z-index: 100;
  cursor: pointer;
}
.search-bar{
  display: block;
  width: 60%;
  background-color: blue;
  margin: 0% 1% 0% auto;
}
.search-bar>form, .search-bar>form>input{
  width: 100%;
}
#NavBar {
    width: 100%;
    height: 70px;
}
.nav>button{
  font-weight:bolder;
  font-size: large;
  background-color:#00000000;
  color: hsla(160, 100%, 37%, 1) ;
  border:none;
}
.logo{
  margin: auto;
  color: #fff;
  display: none;
}
div.nav{
  width: 100%;
  height: 7%;
  padding: 0px 3%;
  background-color: darkred;
  display:flex;
  flex-direction: row;
  align-items: center;
}
.nav {
  width: 100%;
  font-size: 12px;
  text-align: center;
}
</style>