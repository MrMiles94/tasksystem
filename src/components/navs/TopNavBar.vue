<template>
    <div class="nav task-bar" id="top">
        <button @click="this.$router.go(-1)"  class="back-btn">
          <i class="fa">&#xf104;</i>
        </button>
        <div class="logo">
          Aniefiok Asuquo | aniefiokasuquo@gmail.com
        </div>
    </div>
</template>
<script >
  export default{
    data(){
      return{
        // search: "",
        // searchBar:true
      }
    },
    methods:{
      // toggleSearch(){
      //   this.searchBar = !this.searchBar
      //   console.log(this.searchBar)
      // }
    }
  }
</script>
<style scoped>
.nav>button{
  font-weight:bolder;
  font-size: x-large;
  background-color:#00000000;
  color: hsla(160, 100%, 37%, 1) ;
  border:none;
}
.logo{
  margin: auto;
  color: #fff;
}
</style>