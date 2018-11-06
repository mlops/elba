'use strict';

var gulp         = require('gulp');
var watch        = require('gulp-watch');
var sass         = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps   = require('gulp-sourcemaps');
var rename       = require('gulp-rename');
var gulpif       = require('gulp-if');
var notify       = require('gulp-notify');
var plumber      = require('gulp-plumber');
var browserSync  = require('browser-sync');


var env,
    jsSources,
    sassSources,
    htmlSources,
    outputDir,
    sassStyle,
    outputDir,
    config;


    env = 'development';

    if (env==='development') {
      outputDir = 'public/development/';
      sassStyle = 'expanded';
      config = true;
    } else {
      outputDir = 'public/production/';
      sassStyle = 'compressed';
      config = false;
    }


function customPlumber(errTitle) {
  return plumber({
    errorHandler: notify.onError({
    // Customizing error title
    //title: errTitle || "Error running Gulp",
    //message: "Error: <%= error.message %>",
    })
  });
}


// Start browserSync server
gulp.task('browserSync', function() {
  browserSync.init([
      'app/views/**/*',
      'public/**/*',
      'resources/assets/sass/**/*'
    ], {
      proxy: "elba.dev",
      notify: true
      //reloadDelay: 3000
      // browser: ["google chrome", "firefox"]
    });
})



gulp.task('sass', function() {
  //'./sass/**/*.{scss,sass}'
  //'app/scss/**/*.+(scss|sass)'
  gulp.src('resources/assets/sass/style.sass') // Gets the styles.scss file
    .pipe(sourcemaps.init()) // Initialize sourcemap plugin
    // Checks for errors all plugins
    .pipe(customPlumber('Error Running Sass'))
    .pipe(sass({
                 includePaths: ['./resources/assets/bower_components/breakpoint-sass/stylesheets',
                 './resources/assets/bower_components/susy/sass',
                 './resources/assets/bower_components/compass-mixins/lib'
               ],
                 errLogToConsole: true,
                 outputStyle: sassStyle,
                 sourceComments: config
  })) // Passes it through a gulp-sass task
    //.on('error', handleError)
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cacade: false
      }))
    .pipe(rename({suffix: '.min'}))
    .pipe(sourcemaps.write()) // Writing sourcemaps 
    .pipe(gulp.dest(outputDir + 'css')) // Outputs it in the css folder
    // Reloading the stream
        .pipe(browserSync.reload({
          stream: true
        }));
});







gulp.task('watch', ['browserSync', 'sass'], function() {
  gulp.watch('resources/assets/sass/**/*.{scss,sass}', ['sass']);
  //gulp.watch('app/index.html', browserSync.reload);
  //gulp.watch('app/scss/**/*.+(scss|sass)', ['sass']);
});

gulp.task('default', ['watch']);