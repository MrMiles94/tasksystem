import {createStore} from 'vuex'
//import axios from 'axios';
//import axiosClient from '../axios/axios'
//  import persistState  from 'vue-persist';

// const toLocal = new persistState({
//   storage: window.localStorage
// })

const store = createStore({
  state: {
    user: {
      data:{
        userName:'miles94',
      },
      token: sessionStorage.getItem('TOKEN'),
      otpConfirmStatus: '',
      registerStatus: '',
      tasks:[
        {
          id:1,
          title: 'Task 1 title',
          composer: 'miles94',
          description:  'task description is lorem ipsom and lala lala master there are so many things to talk about here',
          location: 'task1 location',
          machine:'Machine involved',
          time: 'Task 1 time ',
          tags: ['Anifiok','Bayo','Davis','AyTee'],
          department: 'Task department' || 'source department',
          priority: 'urgent',
          likes:['liker1username'],
          dislikes:['liker1username', 'liker2username'],
          status:'Approved',
          comments:[
            {
            id:1,
            msg:' The message 1 body works like this and there are a lot to talk about this machine that',
            composer:'composerusername',
            likes:['liker1username', 'liker2username','liker3username'],
            dislikes:['liker1username', 'liker2username'],
            replies:[],
            replyTo: 'replyToUserName'
            }
          ]
        },
        {
          id:2,
          title: 'Task 2 title',
          composer: 'Task 2 editor',
          description:  'task description is lorem ipsom and lala lala master posty max baxpax',
          location: 'task location',
          machine:'Machine involved',
          time: 'Task time ',
          tags: ['Anifiok','Bayo','Davis','AyTee', 'Ribbon boy'],
          department: 'Task department' || 'source department',
          priority: 'low',
          likes:['liker1username', 'liker2username'],
          dislikes:['miles94','liker1username', 'liker2username'],
          status:'Approved',
          comments:[
            {
              id:1,
              msg:' The message 2 body works like this and there are a lot to talk about this machine that',
              composer:'composerusername',
              likes:['liker1username', 'liker2username','liker3username'],
              dislikes:['liker1username'],
              replies:[],
              replyTo: 'replyToUserName'
            }
          ]
        },
        {
          id:3,
          title: 'Task title',
          composer: 'Task editor',
          description:  'task description is lorem ipsom and lala lala master posty max baxpax',
          location: 'task location',
          machine:'Machine involved',
          time: 'Task time ',
          tags: ['Anifiok','Bayo','Davis','AyTee'],
          department: 'Task department' || 'source department',
          priority: 'medium',
          likes:['liker1username', 'liker2username','liker3username'],
          dislikes:['liker1username'],
          status:'Pending',
          comments:[
            {
              id:1,
              msg:' The message 3 body works like this and there are a lot to talk about this machine that',
              composer:'composerusername',
              likes:['liker1username', 'liker2username','liker3username'],
              dislikes:['liker1username', 'liker2username'],
              replies:[],
              replyTo: 'replyToUserName'
            }
          ]

        },
        {
          id:4,
          title: 'task 4 title',
          composer: 'composeremail@gmail.com',
          description:  'task description is lorem ipsom and lala lala master posty max baxpax better listen to what am going to say before i vex for you like this o',
          location: 'task location',
          machine:'Machine involved',
          time: 'Task time ',
          tags:['Anifiok','Bayo','Davis','AyTee'],
          department: 'Task department' || 'source department',
          priority: 'low',
          likes:['liker1username'],
          dislikes:['liker1username'],
          status:'Inprogress',
          comments:[
            {
              id:1,
              msg:' The message 4 body works like this and there are a lot to talk about this machine that',
              composer:'composerusername',
              likes:['liker1username', 'liker2username','liker3username'],
              dislikes:['liker1username'],
              replies:[],
              replyTo: 'replyToUserName'
            }
          ]

        },
        {
          id:5,
          title: 'task 5 title',
          composer: 'composer5email@mail.com',
          description: 'task description is lorem ipsom and lala lala master posty max baxpax',
          location: 'task location',
          machine:'Machine involved',
          time: 'Task time ',
          tags:['Anifiok','Bayo','Davis','AyTee'],
          department: 'Task department' || 'source department',
          priority: 'high',
          likes:['liker1username','liker3username'],
          dislikes:['liker1username', 'liker2username'],
          comments:[
            {
              id:1,
              msg:' The message 5 body works like this and there are a lot to talk about this machine that',
              composer:'composerusername',
              replyTo: 'replyToUserName',
              likes:['liker1username', 'liker2username','liker3username'],
              dislikes:[],
              replies:[
                {
                  id:1,
                  msg:' The message 5 body works like this and there are a lot to talk about this machine that',
                  composer:'composerusername',
                  likes:['liker1username', 'liker2username','liker3username'],
                  dislikes:['liker1username'],
                  replies:[],
                  replyTo: 'replyToUserName'
                }
              ],
            }
          ]
        }
      ],
      randomText:'String'
    },
  },
  getters: {
    getUserById: (state) => (id) => {
      return state.users.find(user => user.id === id);
    }
  },
 actions: {
  signup({commit}, user){
    commit('setUser', user);
  },

  signin({commit}, user){
    commit('setUser', user);
  },

  verifyAccount({commit}, user){
    commit('setUser', user)
  },

  passwordReset({commit}, user){
    commit('setUser', user)
  },

  verifyPassWordOtp({commit}, user){
    commit('setUser', user)
  },

  logout({commit}, user){
    commit('setUser', user)
  },
},

mutations: {
logout: (state)=>{
state.user.token = null;
state.user.data = {};
},
setUser: (state, userData)=>{
state.user.token = userData.token;
state.user.data = userData.user;
state.user.registerStatus = userData.registerStatus
sessionStorage.setItem('TOKEN', userData.token);
},
},

//plugins:[toLocal.plugin],

modules: {},

})
// async function sendMessage() {
//     try {
//       const response = await axios.get('http://localhost/projects/task%20system/tasksystem/src/api/user.php', {
//         message: store.state.user.randomText
//       });

//       console.log(response.data);
//     } catch (error) {
//       console.error(error);
//     }
// }
export default store

//console.log(store.state.user.tasks)
