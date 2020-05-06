const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();
//compile scss into css
function style() {
    return gulp.src('assets/scss/**/*.scss')
    .pipe(sass().on('error',sass.logError))
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.stream());

}
function javascript() {
    return gulp.src('node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/popper.js/dist/popper.min.js',
    'node_modules/jquery/dist/jquery.min.js')
     .pipe(gulp.dest('assets/js'))
     .pipe(browserSync.stream());
 
}

function watch() {
    browserSync.init({
        proxy: 'http://tasktheme.local/',
    });
    gulp.watch('assets/scss/**/*.scss', style);
    gulp.watch('**/*.php').on('change',browserSync.reload);
    gulp.watch('assets/js/**/*.js').on('change', browserSync.reload);
}
exports.style = style;
exports.watch = watch;

