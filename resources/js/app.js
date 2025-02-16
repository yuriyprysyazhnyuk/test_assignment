import "./bootstrap";
import {router} from "./router.js";
import {createApp} from "vue";
import App from "./layouts/App.vue";

createApp(App).use(router).mount("#app");
