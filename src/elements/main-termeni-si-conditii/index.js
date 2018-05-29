import { PolymerElement, html } from '@polymer/polymer';
import axios from 'axios';
import template from './template.html';
import style from './style.styl';
class MainTermeniSiConditii extends PolymerElement {
    static get template()  {
         return html([`${template} <style>${style} </style>`])
}
    ready(){
        super.ready()
 
        }
    static get properties() { return {
        uid: {
         type: String,
         observer: '_idChanged'
        },
        page: {
            type: Object,
            value: () => {}
        }
    }}
    ready(){
        super.ready()
        const page = require('../../_pages/termeni-și-condiții.md')
        this.page = page
        console.log(this.page)
    }
}
window.customElements.define('main-termeni-si-conditii', MainTermeniSiConditii);