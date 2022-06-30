var gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();

gulp.task('browserSync', function(){
  
	browserSync.init({
	  proxy: "http://localhost/wordpress/devnelson/"
	});
	gulp.watch('raw-assets/sass/**/*.scss', gulp.series('sass'));
	gulp.watch('*.php', gulp.series('php'));
	gulp.watch('assets/js/**/*', gulp.series('scripts'));
});


gulp.task('sass', function () {
	return gulp.src('raw-assets/sass/**/*.scss')
	  .pipe(sass({
		  outputStyle: 'expanded'
		}).on('error', sass.logError))
	  .pipe(autoprefixer(['last 99 versions'], { cascade: true }))
	  .pipe(gulp.dest('assets/css'))
	  .pipe(browserSync.stream());
});
  
gulp.task('php', function () {
	return gulp.src('*.php')
	  .pipe(browserSync.stream());
});
  
gulp.task('scripts', function () {
	return gulp.src('assets/js/**/*')
	  .pipe(browserSync.stream());
});

gulp.task('default', gulp.series('browserSync'));