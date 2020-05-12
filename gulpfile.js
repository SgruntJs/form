const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();
const autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function() {
  return gulp.src('src/scss/**/*.scss')
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(gulp.dest('dist/css'))
    .pipe(browserSync.stream());
});
// add sublime text git

gulp.task('watch', function(){
  gulp.watch('src/scss/**/*.scss', gulp.series('sass'));
  // Other watchers
})

gulp.task('default', function() {
    browserSync.init({
        proxy: "http://localhost/form/src"
    });
    gulp.watch("./src/*.php").on("change", browserSync.reload);
});
