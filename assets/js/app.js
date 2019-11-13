// this is your "root" component
import AppComponent from "./components/AppComponent.vue";

// get all elements with the plugin name container as a class
const elements = document.querySelectorAll(`.${window.plugin}-container`);

// create a new Vue instance for each and load AppComponent
elements.forEach(function(element) {
  const app = new Vue({
    el: element,
    components: { AppComponent },
  });
});
