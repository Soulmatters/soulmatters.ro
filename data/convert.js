const fs = require('fs');
const moment = require('moment')
const data = require('./import/data.json');
const users = require('./import/users.json');



//users markdown
for(let item of users.users){
    if(item.profile_image === null) continue
    const user = 
`---
name: "${item.name}"
slug: '${item.slug}'
email: '${item.email}'
website: '${item.website}'
id: '${item.id}'
image: ${item.profile_image}
cover: ${item.cover_image}
---
${item.html}
    `
fs.writeFileSync(`../src/_users/${item.slug}.md`, user, (err,res) => {
    if(err) console.log(err)
    console.log(res)
})
}
//tags markdown

for(let item of users.tags){
    if(item.profile_image === null) continue
    const tags = 
`---
name: "${item.name}"
slug: '${item.slug}'
id: '${item.id}'
---
${item.html}
    `
fs.writeFileSync(`../src/_tags/${item.slug}.md`, tags, (err,res) => {
    if(err) console.log(err)
    console.log(res)
})
}

//posts markdown
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
author: ${item.author_id}
description: >-
    ${item.html.replace(/<(?:.|\n)*?>/gm, '').substr(0, 200).replace(/:/g, ' ').replace(/(\r\n\t|\n|\r\t)/gm,"")}
tip: articol
---
${item.html}
    `
fs.writeFileSync(`../src/_posts/${date}-${item.slug}.md`, article, (err,res) => {
    if(err) console.log(err)
    console.log(res)
})
}