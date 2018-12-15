const
  path              = require('path'),
  manifest          = require('../manifest'),
    // Copies individual files or entire directories to the build directory
  CopyWebpackPlugin = require('copy-webpack-plugin');

module.exports = new CopyWebpackPlugin([
  {
    from : path.join(manifest.paths.src, 'static'),
    to   : path.join(manifest.paths.build, 'static'),
  },
]);
