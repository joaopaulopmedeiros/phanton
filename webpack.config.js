const path = require('path');

module.exports = {
  mode: 'development',
  entry: [
    path.resolve(__dirname, 'resources/js', 'index.js'),
    path.resolve(__dirname, 'resources/scss', 'styles.scss'),
  ],
  output: {
    path: path.resolve(__dirname, 'public'),
  },
  module: {
    rules: [
      {
        test: /\.(scss|css)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '[name].css',
            },
          },
          {
            loader: 'extract-loader',
          },
          {
            loader: 'css-loader?-url',
          },
          {
            loader: 'sass-loader',
          },
        ],
      },
    ],
  },
};