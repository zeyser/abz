const
  manifest          = require('../manifest'),
    // It moves all the required *.css modules in entry chunks into a separate CSS file. So your styles are no longer
    // inlined into the JS bundle, but in a separate CSS file (styles.css). If your total stylesheet volume is big, it
    // will be faster because the CSS bundle is loaded in parallel to the JS bundle.
  ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = new ExtractTextPlugin({
  filename: manifest.outputFiles.css,
  allChunks: true,
});
