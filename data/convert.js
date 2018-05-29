const fs = require('fs');
const moment = require('moment')
const data = require('./import/data.json');
const images ='../src/images/';
console.log(images)


for(let item of data){
    if(item.status !== 'published') continue
    const date = moment(item.created_at).format('YYYY[-]MM[-]DD')
    const year = moment(item.created_at).format('YYYY')
    const month = moment(item.created_at).format('MM')
    const day = moment(item.created_at).format('DD')
    console.log(date)
    const article = 
`---
title: "${item.title}"
date: '${item.created_at}'
slug: '${item.slug}'
image: ${item.feature_image}
path: '${date}-${item.slug}.md'
year: '${year}'
month: '${month}'
day: '${day}'
description: >-
    ${item.html.replace(/<(?:.|\n)*?>/gm, '').substr(0, 200).replace(/:/g, ' ').replace(/(\r\n\t|\n|\r\t)/gm,"")}
---
${item.html}
    `
fs.writeFileSync(`../src/_posts/${date}-${item.slug}.md`, article, (err,res) => {
    if(err) console.log(err)
    console.log(res)
})
}