"use strict";
var gulp = require('gulp');
var sass = require('gulp-ruby-sass');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var concat = require( "gulp-concat" );

gulp.task('sass', function() {
  return sass('./css/scss/main.scss')
    .pipe(gulp.dest('css'))
    .pipe(reload({ stream:true }));
});

/** Concatenate JS in Dev mode */
gulp.task( "jsconcat", function() {
	return gulp.src([
			"js/lib/jquery.min.js",
			"js/lib/conditionizr-4.3.0.min.js",
			"js/lib/modernizr-2.7.1.min.js"
		])
		.pipe( concat( "vendor.js" ) )
		.pipe( gulp.dest( "./js" ) );
});

// watch Sass files for changes, run the Sass preprocessor with the 'sass' task and reload
gulp.task('serve', ['sass','jsconcat'], function() {
	browserSync.init({
        proxy: "http://dev.georgeprentoski.com.au"
    });

  gulp.watch('css/scss/*.scss', ['sass']);
	gulp.watch("*.php").on('change', browserSync.reload);

});
