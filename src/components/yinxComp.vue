<!-- MyComponent.vue -->

<template>
    <div>
      <!-- <p>Selected User: {{ selectedUser }}</p>
      <ul>
        <li v-for="user in users" :key="user.id" @click="selectUser(user.id)">
          {{ user }}
        </li>
      </ul> -->
    </div>
  </template>
  
  <!-- <script>
  export default {
    data(){
      return{
        user: this.selectedUser()
      }
    },
    computed: {
      // Use the getter in the component
      users() {
        return this.$store.state.users;
      },
    },
    methods: {
      // Dispatch the selectUser mutation when a user is clicked
      selectUser(userId) {
        this.$store.commit('selectUser', userId);
      },
    },
  };
  </script> -->
  