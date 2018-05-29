import { PolymerElement, html } from '@polymer/polymer';
import '../image-loader'
import template from './template.html';
import '@polymer/iron-image/iron-image.js';
import '@polymer/marked-element/marked-element.js';
import { AppStore } from '../../app-store';
import { APP_ACTION } from '../../app-store/lib/reducer';
import style from './theme.styl'
import { SharedStyles } from './../../shared-styles'
import '../user-box';
import moment from 'moment';
import 'moment/locale/ro.js';
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
        const data = require(`../../_posts/${this.year}-${this.month}-${this.day}-${post}.md`);
        this.article = data
        this.dispatch({
            type: APP_ACTION.UPDATE_STATE,
            state: 'loaded'
          });
    }
    ready() {
        super.ready();
       
    }
    date(date){
        moment.locale('ro');

        return moment(date).format("Do MMMM, YYYY")
    }

}
window.customElements.define('main-blog', MainBlog);