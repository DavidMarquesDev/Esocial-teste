import Messages from "./components/Messages/Messages.vue";
import CreateMessage from "./components/Messages/CreateMessage.vue";

export const routes = [
    {
        name: "home",
        path: "/",
        component: Messages,
    },
    {
        name: "create",
        path: "/create",
        component: CreateMessage,
    },
];
