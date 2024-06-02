import './bootstrap';
import { createApp } from 'vue';
import Modal from './components/Modal.vue';
import ExampleComponent from './components/ExampleComponent.vue';

const app = createApp({});

app.component('modal', Modal);
app.component('example-component', ExampleComponent);

app.mount('#app');
