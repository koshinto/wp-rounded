const path = require('path');
const loader = require('sass-loader');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

const theme = path.resolve(__dirname, 'themes', 'wp-rounded');

module.exports = {
  entry: theme + '/index.js',
  output: {
    path: theme + '/dist/',
    filename: 'bundle.js'
  },
  devtool: 'source-map',
  module: {
    rules: [
      {
        test: /\.s[ac]ss/,
        use: [
          'style-loader',
          {
            loader: 'css-loader',
            options: {
              sourceMap: true,
              importLoaders: 2,
            }
          },
          {
            // PostCSSを有効化
            loader: 'postcss-loader',
            options: {
              sourceMap: true,
              postcssOptions: {
                plugins: [
                  "autoprefixer",
                ],
              }
            }
          },
          {
            loader: 'sass-loader',
            options: {
              // Dart Sassを有効化
              implementation: require('sass'),
            }
          }
        ]
      }
    ]
  },
  plugins: [
    new BrowserSyncPlugin({
      host: "localhost",
      files: ['./**/*.php'],
      port: 3000,
      proxy: {
        target: "http://localhost:8088",
      }
    })
  ]
}