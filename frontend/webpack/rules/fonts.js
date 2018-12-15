module.exports = {
  test: /\.(eot|svg|ttf|woff|woff2)$/,
  exclude : /(node_modules)/,
  use     : [{
      loader: 'file-loader',
      options: {
          // name: '[path][name].[ext]',
          useRelativePath: true,
          publicPath: '/admin/'
      }
  }],
};
