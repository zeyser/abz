// ------------------
// @Table of Contents
// ------------------

/**
 * + @Loading Dependencies
 * + @Common Loaders
 * + @Merging Production Loaders
 * + @Merging Development Loaders
 * + @Exporting Module
 */


// ---------------------
// @Loading Dependencies
// ---------------------

const
  manifest          = require('../manifest'),
    //It moves all the required *.css modules in entry chunks into a separate CSS file. So your styles are no longer
    // inlined into the JS bundle, but in a separate CSS file (styles.css). If your total stylesheet volume is big,
    // it will be faster because the CSS bundle is loaded in parallel to the JS bundle.
  ExtractTextPlugin = require('extract-text-webpack-plugin');


// ---------------
// @Common Loaders
// ---------------

let rule = {};

const loaders = [
  {
    loader: 'css-loader',
    options: {
      sourceMap : manifest.IS_DEVELOPMENT,
      minimize  : manifest.IS_PRODUCTION,
    },
  },
];


// ---------------------------
// @Merging Production Loaders
// ---------------------------

if (manifest.IS_PRODUCTION) {
  rule = {
    test: /\.css$/,
    loader: ExtractTextPlugin.extract({
      use: loaders,
    }),
  };
}


// ----------------------------
// @Merging Development Loaders
// ----------------------------

if (manifest.IS_DEVELOPMENT) {
  rule = {
    test: /\.css$/,
    use: [{
      loader: 'style-loader',
    }].concat(loaders),
  };
}


// -----------------
// @Exporting Module
// -----------------

module.exports = rule;
