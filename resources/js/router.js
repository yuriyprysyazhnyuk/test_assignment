import {createMemoryHistory, createRouter} from "vue-router";

const routes = [
    {path: '/', component: () => import( "./components/contact-form/ContactForm.vue")},
    {path: '/contact-form', component: () => import( "./components/contact-form/ContactForm.vue")},
]
export const router = createRouter({
    history: createMemoryHistory(),
    routes,
})
