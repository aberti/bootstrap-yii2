var gulp = require('gulp'),
    less = require('gulp-less'),
    uglify = require('gulp-uglify'),
    livereload = require('gulp-livereload'),
    watch = require('gulp-watch');

gulp.task('less', function() {
    gulp.src('less/*.less')
        .pipe(watch())
        .pipe(less())
        .pipe(gulp.dest('css'))
        .pipe(livereload());
});

gulp.task('minify', function () {
    gulp.src('js/app.js')
        .pipe(uglify())
        .pipe(gulp.dest('build'))
});