import {routesHtml} from './Routes/index.routes.mjs';

document.getElementById('btnIngresar').addEventListener('click',()=>{
    location.href = routesHtml.routeLoginToPanel;
});