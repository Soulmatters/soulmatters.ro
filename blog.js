"use strict";



const im = require('imagemagick');
const fs = require('fs')
const fm = require('front-matter')
const folder = './src/_posts'
const posts = []
const resize = require('./resize');


readDirectory()
function readDirectory(){
  fs.readdir(folder, (err, files) => {   
     readFiles(files)
  });
}

function readFiles(files){
  let dataArticles = []
  files.forEach(file => {
   
    fs.readFile(folder + '/' +file, 'utf8', function(err, data){
      if (err) throw err  
      var content = fm(data)
      resize({
        src: './src/images/meteorit.jpg',
        dest: './src/assets/large/images/meteorit.jpg',
        width: 2000,
         progressive: true,
         strip: true,
         quality: 0.8
      });    
         
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
            dataArticles.push(content)
            writeBlog(dataArticles, './src/data/posts.json')
        });
      });
}


function writeBlog(posts, path){
  fs.writeFile(path, JSON.stringify(posts), (err) => {
    if (err)console.log (err)
  })
}