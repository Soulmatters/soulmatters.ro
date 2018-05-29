module.exports = () => {
 
  
    return {
      rules: [
          {
            test: /\.(html)$/,
            use: {
              loader: 'html-loader'             
            }
          },
          {
            test: /\.md$/,
            use: [ 'json-loader', 'yaml-frontmatter-loader' ]
         },
         {
          test: /\.styl$/,
          use: [
            {
              loader: 'to-string-loader'
            },
            {
              loader: 'css-loader'
            },
            {
              loader: 'postcss-loader',
              options: {
                sourceMap: true
              }
            },
            {
              loader: 'stylus-loader'
            }
      
          ]
        },
        {
          test: /\.(jpe?g|png)$/i,
          loader: 'responsive-loader',
          options: {
            sizes: [300, 600, 1200, 2000],
            placeholder: true,
            placeholderSize: 20
            
          }
        }
      ]
    };
  };
  