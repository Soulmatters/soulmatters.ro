import { PolymerElement, html } from '@polymer/polymer';
import axios from 'axios';
import template from './template.html';
import style from './style.styl';
class AutorCard extends PolymerElement {
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
        author: {
            type: Object,
            value: () => {}
        }
    }}
    _idChanged(uid){
        axios('/data/users.json').then(data => {
            console.log(data)
            const author = data.data.filter(item => item.attributes.id === uid)
            this.author = author[0].attributes
            console.log(this.author)
        })

    }
}
window.customElements.define('autor-card', AutorCard);