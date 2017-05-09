var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('styles', function(){
    gulp.src('flex.css')
        .pipe(autoprefixer())
        .pipe(gulp.dest('build'))
});