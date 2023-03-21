import Vue from 'vue'
import VueRouter from 'vue-router'
import HomeView from '../views/HomeView.vue'
import list from '../views/list.vue'
import edit from '../views/edit.vue'

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  base: import.meta.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/edit.vue')
    },
    {
      path:'/lista',
      name: 'lista',
      component:list
    },
    {
      path:'/editar/:usuario',
      name: 'editar',
      component:edit
    }
  ]

 
})

export default router
