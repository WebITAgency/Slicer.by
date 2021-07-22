'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
var concat = require('gulp-concat');
var beautify = require('gulp-beautify');

function buildStyles() {
  return gulp.src('./sass/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('style.css'))
    .pipe(gulp.dest('./css'));
};

exports.buildStyles = buildStyles;
exports.watch = function () {
  gulp.watch('./sass/*.scss', ['sass']);
};

gulp.task('bcss', function() {
  return gulp
    .src('./sass/*.scss')
    .pipe(beautify.css({ indent_size: 2 }))
    .pipe(gulp.dest('./sass/'));
});

gulp.task('bhtml', function() {
  return gulp
    .src('./*.html')
    .pipe(beautify.html({ indent_size: 2 }))
    .pipe(gulp.dest('./'));
});

gulp.task('bjs', function() {
  return gulp
    .src('./script/*.js')
    .pipe(beautify.js({ indent_size: 2 }))
    .pipe(gulp.dest('./script/'));
});
