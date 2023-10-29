import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import DataBinding from '../views/DataBinding.vue'
import DataEvent from '../views/DataEvent.vue'
import AxiosView from '../views/AxiosView.vue'
import NestedComponent from '../views/NestedComponent.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  // {
  //   path: "/about",
  //   name: "about",
  //   // route level code-splitting
  //   // this generates a separate chunk (about.[hash].js) for this route
  //   // which is lazy-loaded when the route is visited.
  //   component: () =>
  //     import(/* webpackChunkName: "about" */ "../views/AboutView.vue"),
  // },
  {
    path: '/databinding',
    name: 'DataBinding',
    component: DataBinding
  },
  {
    path: '/dataevent',
    name: 'DataEvent',
    component: DataEvent
  },
  {
    path: '/axiosview',
    name: 'AxiosView',
    component: AxiosView
  },
  {
    path: '/nested',
    name: 'Nested',
    component: NestedComponent
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
