// including plugins
var gulp = require('gulp')
    , minifyCss = require("gulp-minify-css");

// task
gulp.task('minify-css', function () {
    gulp.src('./web/css/theme.css') // path to your file
        .pipe(minifyCss())
        .pipe(gulp.dest('./web/css'));
});