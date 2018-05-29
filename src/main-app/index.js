import { PolymerElement, html } from '@polymer/polymer/polymer-element';
import template from './template.html';
import '../elements/main-home'   
      import '../elements/main-author'     
      import '../elements/main-blog'
      import '../elements/main-termeni-si-conditii'

import '@polymer/app-route/app-route.js';
import '@polymer/paper-styles/paper-styles.js';
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
 
  show(page) {
    const exitPage = this.shadowRoot.querySelector(`[name=${page}]`)
    const animation = exitPage.animate([
      { opacity: 0, easing: 'ease-in' },
      {opacity: 1, easing: 'ease-out'},
    ],
    {
      duration: 400,
    })
   
    
  }

  constructor() {
    super()
  }
  _routePageChanged(page) {
    // If no page was found in the route data, page will be an empty string.
    // Default to 'home' in that case.
   if(page === '2018' || page === '2017' || page === '2016' || page === '2015' || page === '2019' || page === '2014'){
     page = 'blog'
   }
    // const exitPage = this.shadowRoot.querySelector(`[visible]`) || this.shadowRoot.querySelector(`[name= ${page || 'home'} ]`)
    //   const animation = exitPage.animate([
    //     {opacity: 1, easing: 'ease-out'},
    //     { opacity: 0, easing: 'ease-in' },
    //   ],
    //   {
    //     duration: 400,
    //   })

   if(page !== ''){
     this.shadowRoot.querySelector('.top-bar').style.background = "#212121"
   }else{
    this.shadowRoot.querySelector('.top-bar').style.background = "rgba(0,0,0,0.2)"
     
   }
      
    
      
    // animation.onfinish = () => {
     this.page = page || 'home';
    //   this.show(page || 'home')
    //  }
   
   
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  }
 
 

}
window.customElements.define('main-app', MainApp);