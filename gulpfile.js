'use strict'

const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');

gulp.task('styles', () => {
  return gulp.src('./themes/rungin/scss/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('style.css'))
    .pipe(gulp.dest('./themes/rungin/'))
});

gulp.task('watch', () => {
  gulp.watch('./themes/rungin/scss/style.scss', ['styles']);
});

gulp.task('default', ['styles', 'watch']);