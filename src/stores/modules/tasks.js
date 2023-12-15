const task =[
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
  ]
export default task