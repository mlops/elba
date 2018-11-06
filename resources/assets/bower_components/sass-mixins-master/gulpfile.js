'use strict';

//************************* Load dependencies ****************************//
var		   gulp = require('gulp'),
	browserSync = require('browser-sync'),
		  clean = require('gulp-clean'),
		 concat = require('gulp-concat'),
		 notify = require('gulp-notify'),
		 rename = require('gulp-rename'),
	runSequence = require('run-sequence'),
		   sass = require('gulp-ruby-sass'),
		 uglify = require('gulp-uglify'),
		  watch = require('gulp-watch'),

//***************************** Path configs *****************************//
	basePaths = {
		 src: 'src/',
		dest: 'test/'
	},

	assetsFolder = {
		styles: {
			 src: '',
			dest: 'css/'
		},
	},

	paths = {
		styles: {
			  src: basePaths.src + assetsFolder.styles.src,
			 dest: basePaths.dest + assetsFolder.styles.dest
		},
	}

//******************************** Tasks *********************************//


// Concatenate Sass Mixins
gulp.task('sass-mixins', function() {
	return	gulp.src(paths.styles.src + 'mixins/*.sass')
				.pipe(concat('_mixins.sass'))
				.pipe(gulp.dest(paths.styles.src))
				.pipe(notify({message: 'sass-mixins task complete', onLast: true}));
});

// Concatenate Sass Functions
gulp.task('sass-functions', function() {
	return	gulp.src(paths.styles.src + 'functions/*.sass')
				.pipe(concat('_functions.sass'))
				.pipe(gulp.dest(paths.styles.src))
				.pipe(notify({message: 'sass-functions task complete', onLast: true}));
});

// Compile Sass Styles
gulp.task('styles', function() {
	return	gulp.src(paths.styles.src + '*.{sass,scss}', { base: paths.styles.src})
				.pipe(sass({style: 'expanded', sourcemap: true, sourcemapPath: '../stylesheets'}))
				.on('error', function (err) { console.log(err.message); })
				.pipe(gulp.dest(paths.styles.dest))
				.pipe(notify({message: 'Styles task complete <%= options.message %>'}));
});


//================= Utility Tasks =================//

// Clean Directories
gulp.task('clean', function() {
	return	gulp.src(paths.styles.dest, {read: false})
				.pipe(clean())
				.pipe(notify({message: 'Clean task complete', onLast: true}));
});

// Watch
gulp.task('watch', function() {
	browserSync({
		notify: false,
		server: {
			baseDir: [basePaths.src, basePaths.dest]
		}
	});

	// Watch mixins sass files
	gulp.watch(paths.styles.src + 'mixins/*.{sass,scss}', ['sass-mixins']);

	// Watch mixins sass files
	gulp.watch(paths.styles.src + 'functions/*.{sass,scss}', ['sass-functions']);

	// Watch sass files
	gulp.watch(paths.styles.src + '*.{sass,scss}', ['styles', browserSync.reload]);

	//Watch .html .php Files
	gulp.watch(basePaths.dest + '**/*.html', browserSync.reload);
});

//================= Main Tasks =================//
// Default task
gulp.task('default', ['clean'], function(callback) {
	runSequence('sass-mixins', 'sass-functions', 'styles', 'watch',  callback);
});
