import { createRouter, createWebHistory } from 'vue-router'

import HomePage from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomePage
    },
    {
      path: '/about',
      name: 'about',
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/tasks',
      name: 'tasks',
      component: () => import('../views/AllTasks.vue')
    },
    {
      path: '/tasks:id',
      name: 'task',
      component: () => import('../views/SingleTaskView.vue')
    },
    {
      path: '/notifications',
      name: 'notifications',
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/archive',
      name: 'archive',
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/signup',
      name: 'signup',
      component: () => import('../views/SignUP.vue')
    },
    {
      path: '/signin',
      name: 'signIn',
      component: () => import('../views/SignIn.vue')
    }
  ]
})

export default router
