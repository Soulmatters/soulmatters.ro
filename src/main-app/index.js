import { PolymerElement, html } from '@polymer/polymer/polymer-element';
import template from './template.html';
import '../elements/main-home'   
      import '../elements/main-author'     
      import '../elements/main-blog'

import '@polymer/app-route/app-route.js';
import '@polymer/app-route/app-location.js';
import '@polymer/iron-pages/iron-pages.js';
import '@polymer/iron-selector/iron-selector.js';
import anime from 'animejs';
class MainApp extends PolymerElement {
  static get properties() {
    return {
      
      page: {
        type: String,
        notify: true,
        reflectToAttribute: true,
      },
      routeData: Object,
    };
  }
  static get observers() {
    return [
      '_routePageChanged(routeData.page)',
    ];
  }
  static get template()  {
    return  html( [`${template}`]);
  }
 
  // show(page) {
  //   const animation = this.shadowRoot.querySelector(`[name=${page}]`)

   
    
  // }

  constructor() {
    super()
  }
  _routePageChanged(page) {
    // If no page was found in the route data, page will be an empty string.
    // Default to 'home' in that case.
    console.log(page)
    // const exitPage = this.shadowRoot.querySelector(`[visible]`) || this.shadowRoot.querySelector(`[name= ${page || 'home'} ]`)
    //   const animation = exitPage.animate([
    //     {transform:'translateY(0)', opacity: 1, easing: 'ease-out'},
    //     {transform:'translateY(30%)', opacity: 0, easing: 'ease-in' },
    //   ],
    //   {
    //     duration: 400,
    //   })

   
      
    
      
    //  animation.onfinish = () => {
     this.page = page || 'home';
    //   this.show(page || 'home')
    //  }
   
   
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  }
 
 

}
window.customElements.define('main-app', MainApp);