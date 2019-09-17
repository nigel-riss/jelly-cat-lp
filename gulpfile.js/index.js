'use strict';

const gulp = require('gulp');
const pug = require('gulp-pug');
const server = require('browser-sync').create();
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const optimiseCSS = require('gulp-csso');
const rename = require('gulp-rename');
const webpack = require('webpack-stream');


// Paths
const dirs = {
  pug: './src/pug/**/*.pug',
  scss: './src/**/*.scss',
  styles: './src/scss/styles.scss',
  js: './src/js/**/*.js',
  php: './src/php/*.php',
  docs: './docs',
  wp: 'G:/xampp/htdocs/jelly-cat/wp-content/themes/jelly-cat',
};


// Webpack config
const webpackConfig = {
  entry: {
    scripts: './src/js/scripts.js',
  },

  output: {
    filename: '[name].js',
  },

  // mode: 'production',
  mode: 'development',

  // module: {
  //   rules: [
  //     {
  //       test: /\.m?js$/,
  //       exclude: /(node_modules|bower_components)/,
  //       use: {
  //         loader: 'babel-loader',
  //         options: {
  //           presets: ['@babel/preset-env'],
  //         },
  //       },
  //     },
  //   ],
  // },
};


/**
 * Runs BrowserSync server
 * @param {Function} cb callback
 */
function initBrowserSync (cb) {
  server.init({
    server: {
      baseDir: dirs.docs,
    },
    port: 31337,
  });

  cb();
}


/**
 * Reloads BrowserSync Server
 * @param {Function} cb callback
 */
function reloadBrowserSync (cb) {
  server.reload();

  cb();
}


/**
 * Renders html from pug
 */
let renderPug = (cb) => {
  gulp.src(dirs.pug)
    .pipe(pug())
    .pipe(gulp.dest(dirs.docs));

  cb();
};


/**
 * Compiles scss files to styles.css
 * And move to docs and wp directories
 */
let compileStyles = (cb) => {
  gulp.src(dirs.styles)
    .pipe(sass())
    .pipe(autoprefixer({
      overrideBrowserslist: [
        "last 2 versions",
        "> 0.5%",
        "maintained node versions",
        "not dead"
      ]
      // cascade: false,
    }))
    .pipe(optimiseCSS({ comments: 'exclamation' }))
    .pipe(gulp.dest(dirs.docs))
    .pipe(server.reload({stream: true}))
    .pipe(rename('style.css'))
    .pipe(gulp.dest(dirs.wp));

  cb();
};


/**
 * Compiles js scripts
 * and copies to docs and wp directories
 */
let compileScripts = (cb) => {
  gulp.src(dirs.js)
    .pipe(webpack(webpackConfig))
    .pipe(gulp.dest(dirs.docs))
    .pipe(gulp.dest(dirs.wp));

  cb();
};

/**
 * Copies PHP files to wordpress theme directory
 */
let copyPHP = (cb) => {
  gulp.src(dirs.php)
    .pipe(gulp.dest(dirs.wp));

  cb();
};


/**
 * Watches source files
 */
let watchFiles = () => {
  gulp.watch(dirs.pug, gulp.series(renderPug, reloadBrowserSync));
  gulp.watch(dirs.scss, gulp.series(compileStyles));
  gulp.watch(dirs.js, gulp.series(compileScripts, reloadBrowserSync));
  gulp.watch(dirs.php, gulp.series(copyPHP));
};


const watch = gulp.parallel(watchFiles, initBrowserSync);

exports.wordpress = copyPHP;
exports.scripts = compileScripts;
exports.styles = compileStyles;

exports.watch = watch;
