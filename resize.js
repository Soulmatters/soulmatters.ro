var
  async = require('async'),
  fs = require('fs'),
  im = require('imagemagick'),
  maxworkers = require('os').cpus().length,
  path = require('path');

module.exports = resize;

function resize(params) {
  const { src, dest, width } = params;
  im.resize({
    srcPath: src,
    dstPath: dest,
    width:   width
  }, function(err, stdout, stderr){
    if (err) throw err;
    console.log(`resized ${src} to fit within 256x256px`);
  });
}