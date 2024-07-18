import './bootstrap';
import 'bootstrap'; 
import '../sass/app.scss'
import React from 'react';
import ReactDOM from 'react-dom/client';
// import Welcome from '@comp/Welcome.jsx';
import Welcome from './components/Welcome.jsx';



let title = import.meta.env.VITE_APP_NAME;
let subheading = import.meta.env.VITE_ORG;
let mail = import.meta.env.VITE_MAIN_HOST;

ReactDOM.createRoot(document.getElementById('app'))
    .render(<Welcome title={title} subheading={subheading} mail={mail} />);

alert("hi");






// import Welcome from './components/Welcome.jsx';


// let title = import.meta.env.VITE_APP_NAME;
// let subheading = import.meta.env.VITE_ORG;


// alert("hi");

// ReactDOM.createRoot(document.getElementById('app'))
//     .render(<Welcome title={title} subheading={subheading}/>)





// before Reat implementation

// import './bootstrap';
// import 'bootstrap';
// import '../sass/app.scss'


// import {createApp, h} from 'vue';
// import Welcome from '@comp/Welcome.vue';

// let appName = import.meta.env.VITE_APP_NAME;
// let orgName = import.meta.env.VITE_ORG;

// createApp(Welcome, {title : appName, subTitle : orgName}).mount('#app');




// import model from '@/model';
// model.show();

// -------madel changed (final i creat a shared folder and move the model aedn reactModel files to 'shared' / made a changes in vite.config.js)
// import model from './components/shared/model';
// import model from '@/model';
// document.addEventListener('DOMContentLoaded', () => {
//     model.show();
// });


// import reactModel from '@/reactModel';
// import reactModel from '@/reactModel';
// document.addEventListener('DOMContentLoaded', () => {
//     reactModel.modelshow();
// });
