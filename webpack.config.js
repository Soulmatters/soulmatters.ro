const {resolve, join} = require('path');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin')
const {GenerateSW} = require('workbox-webpack-plugin');
const isDev = process.argv.find(arg => arg.includes('webpack-dev-server'));
const outputPath = isDev ? resolve('src') : resolve('dist');
const OUTPUT_PATH = resolve('./dist');
const CopyWebpackPlugin = require('copy-webpack-plugin');

const webpackModule = require('./stylus-loader');
const path = require('path');
const dest = path.resolve(__dirname, './dist');

module.exports = {
  
  entry: './src/index.js',
  output: {
    path: outputPath,
    filename: 'bundle.js'
  },
  plugins: [
    new CopyWebpackPlugin([
      {
        from: path.resolve(__dirname, './node_modules/@webcomponents/webcomponentsjs/*.js'),
        to: 'vendor/[name].[ext]'
      },
      {
        from: path.resolve(__dirname, './node_modules/@webcomponents/webcomponentsjs/*.map'),
        to: 'vendor/[name].[ext]'
      },
      {
        from: path.resolve(__dirname, './node_modules/@webcomponents/bundles/*.map'),
        to: 'vendor/[name].[ext]'
      },
      {
        from: path.resolve(__dirname, './node_modules/@webcomponents/bundles/*.js'),
        to: 'vendor/[name].[ext]'
      }      
    ]),
   new UglifyJsPlugin(),
    new GenerateSW({
      swDest: 'sw.js',
  clientsClaim: true,
  skipWaiting: true,
  navigateFallback: "/index.html",
      runtimeCaching: [
        {
          urlPattern: new RegExp('https://pensive-sinoussi-2666a0.netlify.com'),
          handler: 'networkFirst'
        }
      ]
    })
  ],
  module: webpackModule(),
  devServer: {
    contentBase: resolve(outputPath),
    compress: true,
    overlay: {
      errors: true
    },
    historyApiFallback: true,
    port: 3000,
    host: 'localhost'
  }
};