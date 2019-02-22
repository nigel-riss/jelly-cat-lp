'use strict';

const gulp = require('gulp');
const pug = require('gulp-pug');
const server = require('browser-sync').create();
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const optimiseCSS = require('gulp-csso');
const rename = require('gulp-rename');


// Paths
const dirs = {
  pug: './src/pug/**/*.pug',
  scss: './src/**/*.scss',
  styles: './src/scss/styles.scss',
  js: './src/js/**/*.js',
  php: './src/php/*.php',
  docs: './docs',
  wp: 'G:/xampp/htdocs/jelly-cat/wp-content/themes/jelly-cat'
};


/**
 * Runs BrowserSync server
 * @param {Function} done callback
 */
function initBrowserSync (done) {
  server.init({
    server: {
      baseDir: dirs.docs
    },
    port: 31337
  })
  done();
}


/**
 * Reloads BrowserSync Server
 * @param {Function} done callback
 */
function reloadBrowserSync (done) {
  server.reload();
  done();
}


/**
 * Renders html from pug
 */
let renderPug = () => (
  gulp.src(dirs.pug)
    .pipe(pug())
    .pipe(gulp.dest(dirs.docs))
);


/**
 * Compiles scss files to styles.css
 * And move to docs and wp directories
 */
let compileStyles = () => (
  gulp.src(dirs.styles)
    .pipe(sass())
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(optimiseCSS({ comments: 'exclamation' }))
    .pipe(gulp.dest(dirs.docs))
    .pipe(server.reload({stream: true}))
    .pipe(rename('style.css'))
    .pipe(gulp.dest(dirs.wp))
);


/**
 * Copies scripts to docs and wp directories
 */
let copyScripts = () => (
  gulp.src(dirs.js)
    .pipe(gulp.dest(dirs.docs))
    .pipe(gulp.dest(dirs.wp))
);


/**
 * Copies PHP files to wordpress theme directory
 */
let copyPHP = () => (
  gulp.src(dirs.php)
    .pipe(gulp.dest(dirs.wp))
);


/**
 * Watches source files
 */
let watchFiles = () => {
  gulp.watch(dirs.pug, gulp.series(renderPug, reloadBrowserSync));
  gulp.watch(dirs.scss, gulp.parallel(compileStyles));
  gulp.watch(dirs.js, gulp.series(copyScripts, reloadBrowserSync));
  gulp.watch(dirs.php, gulp.series(copyPHP));
};


const watch = gulp.parallel(watchFiles, initBrowserSync);

exports.wordpress = copyPHP;
exports.scripts = copyScripts;
exports.styles = compileStyles;
exports.watch = watch;
