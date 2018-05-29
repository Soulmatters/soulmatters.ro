import { PolymerElement, html } from '@polymer/polymer';
import template from './template.html';
import style from './style.styl';
import anime from 'animejs';
import '../autor-card';
class PostCard extends PolymerElement {
    static get template()  {
         return html([`${template} <style>${style} </style>`])
}
    ready(){
        super.ready()
 
        }
    static get properties() { return {
        post: {
         type: Array,
         value: () => []
        },     
    }
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
}
window.customElements.define('post-card', PostCard);