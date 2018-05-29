import { PolymerElement, html } from '@polymer/polymer';
import template from './template.html';
import '@polymer/iron-image/iron-image.js';
import { AppStore } from '../../app-store';
import anime from 'animejs';

export class  MainHome extends AppStore(PolymerElement) {
    static get properties() {
        return {
            data: Object,
            AppStore: {
                type: String,
                statePath: 'appStore.state',
                observer: '_AppStoreChanged'
              }
         };
    }

   
    _AppStoreChanged(state){
    }
   static get template()  {
        return html([`${template}`]);
    }
    observe(){
        const myImgs = this.shadowRoot.querySelectorAll('.item');
        const config = {
            rootMargin: '50px 20px 75px 30px',
            threshold: [0, 0.25, 0.75, 1]
          };

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.intersectionRatio > 0) {
        entry.target.style.display ='block'
        entry.target.querySelector('a').querySelector('iron-image').preventLoad = false
        anime({
            targets: entry.target,
            translateY: -100,
            delay: 200,
            elasticity: function(el, i, l) {
                return (50 + i * 200);
              }
          });
        observer.unobserve(entry.target);
      } else {
      }
    });
  }, config);
  
  myImgs.forEach(image => {
    observer.observe(image);
  });  
    }
    ready() {
        super.ready();
        const json = require('../../data/posts.json');
        this.data = json.sort(function(a,b){
            var c = new Date(a.attributes.date);
            var d = new Date(b.attributes.date);
            return d-c;
            });
           
      
    }
    slugify(title){
       return title.replace(/ /g, '-').toLowerCase()
    }
    trimLenght(text){
        return text.substr(0,160)
    }

}
window.customElements.define('main-home', MainHome);