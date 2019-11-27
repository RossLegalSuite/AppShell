import Home from "./components/Home";
import About from "./components/About";
import MyProfile from "./components/MyProfile";
// import testmenu from "./components/testmenu";

export default {
    mode: "history",

    routes: [
        {
            path: "/home",
            component: Home
        },
        {
            path: "/profile",
            component: MyProfile
        }
    ]
};
