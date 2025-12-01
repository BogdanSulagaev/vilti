'use strict';
const del = require('del');
const { src, dest, series, watch } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const rename = require("gulp-rename");
const concat = require('gulp-concat');
const cleanCSS = require('gulp-clean-css');
const browserSync = require('browser-sync').create();
const uglify = require('gulp-uglify');
const pipeline = require('readable-stream').pipeline;
const gutil = require( 'gulp-util' );
const ftp = require( 'vinyl-ftp' );
const autoprefixer = require('gulp-autoprefixer');
const webp = require('gulp-webp');
const imageResize = require('gulp-image-resize');
const gm = require('gulp-gm');

//Clean All Files And Directories in Production Folder
async function clean() {
  const deletedFilePaths = await del(['dist/**', '!dist/']);
}

//Styles
function sassCompile() {
  return src('app/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(rename({dirname: ''}))
    .pipe(dest('app/css/'));
}

function buildStyles() {
  return src(['app/libs/css/**.**', 'app/css/style.css'])
    .pipe(autoprefixer({
      overrideBrowserslist: ['last 8 versions'],
      browsers: [
        'Android >= 4',
        'Chrome >= 20',
        'Firefox >= 24',
        'Explorer >= 11',
        'iOS >= 6',
        'Opera >= 12',
        'Safari >= 6',
      ],
    }))
    .pipe(concat('style.css')) 
    //.pipe(cleanCSS({compatibility: 'ie8'})) //minify
    .pipe(dest('dist/css'))
    // .pipe(browserSync.reload({stream: true}));
    .pipe(browserSync.stream());
}

//Php Templates
function buildPhp() {
  return src(['app/**.php', 'app/**/*.php'])
    .pipe(dest('dist/'))
    // .pipe(browserSync.reload({stream: true}));
    .pipe(browserSync.stream());
}

//Fonts
function buildFonts() {
  return src('app/fonts/**/*')
    .pipe(dest('dist/fonts'))
}

//Imgs
function buildImgs() {
  return src('app/img/**/*')
    .pipe(dest('dist/img'))
}

function imgToWebp() {
  return src('app/img/**/*.+(png|jpg|jpeg)')
    .pipe(webp({
      quality: 100
    }))
    .pipe(dest('app/img'))
}

function unRetinaImgs() {
  return src('app/img/**/*@2x.+(png|jpg|jpeg|webp)')
    .pipe(imageResize({
      percentage: 50
    }))
    .pipe(rename(function (path) {
      path.basename = path.basename.replace('@2x', '');
    }))
    .pipe(dest('app/img'));
}

//Scripts
function buildJs() {
  return src(['app/libs/js/**.js', 'app/js/**.js'])
        .pipe(concat('script.min.js'))
        //.pipe(uglify()) //minify
        .pipe(dest('dist/js/'))
        .pipe(browserSync.reload({stream: true})); 
}

//Commands gulp
exports.clean = clean;
exports.css = series(sassCompile, buildStyles);
exports.fonts = buildFonts;
exports.img = series(imgToWebp, unRetinaImgs, buildImgs);
exports.js = buildJs;
exports.php = buildPhp;
exports.webp = imgToWebp;
exports.unretina = unRetinaImgs;

//build Product
exports.build = series(clean, sassCompile, buildStyles, buildPhp, buildFonts, imgToWebp, unRetinaImgs, buildImgs, buildJs);

exports.default =  function() {

  browserSync.init({
    proxy: "vilti.dev"
  });

  watch(['app/**.php', 'app/**/**.php'], buildPhp);
  
  watch('app/**/*.scss', series(sassCompile, buildStyles));

  watch('app/js/custom.js', buildJs);
};