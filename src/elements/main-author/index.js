import { PolymerElement, html } from '@polymer/polymer';
import axios from 'axios';
import template from './template.html';
import style from './style.styl';
import '../post-card'
class MainAutor extends PolymerElement {
    static get template()  {
         return html([`${template} <style>${style} </style>`])
}
    ready(){
        super.ready()
 
        }
    static get properties() { return {
        autor: {
         type: String,
         observer: '_idChanged'
        },
        data: {
            type: Object,
            value: () => {}
        },
        posts: {
            type: Array,
            value: () => []
        }
    }}
    _idChanged(name){
        axios('/data/users.json').then(data => {
            console.log(data)
            const author = data.data.filter(item => item.attributes.slug === name)
            this.data = author[0].attributes
            console.log(this.data)
        })
        axios('/data/posts.json').then(data => {
            console.log(data)
            const posts = data.data.filter(item => item.attributes.author === this.data.id)
            this.posts = posts.sort(function(a,b){
                var c = new Date(a.attributes.date);
                var d = new Date(b.attributes.date);
                return d-c;
                });
            console.log(this.posts)
        })

    }
    count(a){
        return a.length
    }
   
}
window.customElements.define('main-autor', MainAutor);