"use strict";



const im = require('imagemagick');
const fs = require('fs')
const fm = require('front-matter')
const folder = './src/_posts'
const users = './src/_users'
const pages = './src/_pages'
const posts = []
const resize = require('./resize');


readDirectory()
function readDirectory(){
  fs.readdir(folder, (err, files) => {   
     readFiles(files, 'posts', folder)
  });
  fs.readdir(users, (err, files) => {   
    readFiles(files, 'users', users)
 });
 
 fs.readdir(pages, (err, files) => {   
  readFiles(files, 'pages', pages)
});
}

function readFiles(files, name, folder){
  let dataArticles = []
  files.forEach(file => {
   
    fs.readFile(folder + '/' +file, 'utf8', function(err, data){
      if (err) throw err  
      var content = fm(data)     
      if(name === 'posts'){     
        fs.readFile('./src/assets/place'+ content.attributes.image, (err,data) => {         
          if(err){
            resize({
                src: './src'+content.attributes.image,
                dest: './src/assets/place'+content.attributes.image,
                width: 20,
                 progressive: true,
                 strip: true,
                 quality: 0.8
              });
          }  
          })
          fs.readFile('./src/assets/card'+ content.attributes.image, (err,data) => {
            if(err){
              resize({
                src: './src'+content.attributes.image,
                dest: './src/assets/card'+content.attributes.image,
                width: 400,
                 progressive: true,
                 strip: true,
                 quality: 0.8
              });    
            }
          }); 
          fs.readFile('./src/assets/large'+ content.attributes.image, (err,data) => {
            if(err){
              resize({
                src: './src'+content.attributes.image,
                dest: './src/assets/large'+content.attributes.image,
                width: 2000,
                 progressive: true,
                 strip: true,
                 quality: 0.8
              });    
            }
          }); 
      }
            dataArticles.push(content)
            writeBlog(dataArticles, `./src/data/${name}.json`)
        });
      });
}


function writeBlog(posts, path){
  fs.writeFile(path, JSON.stringify(posts), (err) => {
    if (err)console.log (err)
  })
}