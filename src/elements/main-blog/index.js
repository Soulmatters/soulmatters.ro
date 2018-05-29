import { PolymerElement, html } from '@polymer/polymer';
import '../image-loader'
import template from './template.html';
import '@polymer/iron-image/iron-image.js';
import '@polymer/marked-element/marked-element.js';
import { AppStore } from '../../app-store';
import { APP_ACTION } from '../../app-store/lib/reducer';
import style from './theme.styl'
import { SharedStyles } from './../../shared-styles'
export class  MainBlog extends AppStore(PolymerElement) {
    static get properties() {
        return {
            slug: {
                type: String,
                observer: '_getArticle'
            },
            article: Object,
            year: String,
            month: String,
            day: String
         };
    }

    constructor() {
        super();
    }

   static get template()  {
        return  html([`<style>${style}</style>${template}`]);
    }
    _getArticle(post){
        console.log(`${this.year}-${this.month}-${this.day}-${post}.md`)
        const data = require(`../../_posts/${this.year}-${this.month}-${this.day}-${post}.md`);
        this.article = data
        this.dispatch({
            type: APP_ACTION.UPDATE_STATE,
            state: 'loaded'
          });
          console.log(this.article)
    }
    ready() {
        super.ready();
       
    }

}
window.customElements.define('main-blog', MainBlog);