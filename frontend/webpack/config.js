// ------------------
// @Table of Contents
// ------------------

/**
 * + @Loading Dependencies
 * + @Entry Point Setup
 * + @Path Resolving
 * + @Exporting Module
 */


// ---------------------
// @Loading Dependencies
// ---------------------

const
  path      = require('path'),
  manifest  = require('./manifest'),
  rules     = require('./rules'),
  plugins   = require('./plugins');


// ------------------
// @Entry Point Setup
// ------------------

const
  entry = [
    path.join(manifest.paths.src, 'scripts', manifest.entries.js),
    path.join(manifest.paths.srcVue, manifest.entries.vue),
  ];


// ---------------
// @Path Resolving
// ---------------
const resolve = {
  extensions: ['.webpack-loader.js', '.web-loader.js', '.loader.js', '.js'],
  modules: [
    path.join(__dirname, '../node_modules'),
    path.join(manifest.paths.src, ''),
  ],
};


// -----------------
// @Exporting Module
// -----------------

module.exports = {
  devtool: manifest.IS_PRODUCTION ? false : 'cheap-eval-source-map',
  context: path.join(manifest.paths.src, manifest.entries.js),
  watch: !manifest.IS_PRODUCTION,
  entry,
  output: {
    path: manifest.paths.build,
    publicPath: '',
    filename: manifest.outputFiles.bundle,
  },
  module: {
    rules,
  },
  resolve,
  plugins,
};
