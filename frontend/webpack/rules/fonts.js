module.exports = {
  test: /\.(eot|svg|ttf|woff|woff2)$/,
  exclude : /(node_modules)/,
  use     : [{
      loader: 'file-loader',
      options: {
          // here I set name, because with hash it was error (Failed to decode downloaded font)
          name: '[name].[ext]',
          // believe this is for path inside css files
          publicPath: '/admin/',
          // where to put in deist folder
          outputPath: '/'
      }
  }],
};
