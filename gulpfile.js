const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();
const autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');

//script paths
var jsFiles = 'src/js/**/*.js',
    jsDest = 'dist/js',
    sassPath = 'src/scss/**/*.scss';

gulp.task('scripts', function() {
    return gulp.src(jsFiles)
        .pipe(concat('scripts.js'))
        .pipe(gulp.dest(jsDest))
        .pipe(rename('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(jsDest));
});

gulp.task('sass', function() {
  return gulp.src('src/scss/**/*.scss')
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(gulp.dest('dist/css'))
    .pipe(browserSync.stream());
});

gulp.task('watch', function(){
    browserSync.init({
        proxy: "http://localhost/form/src"
    });
      gulp.watch( [sassPath, jsFiles], gulp.parallel('sass', 'scripts'))
      .on("change", browserSync.reload);;
      // Other watchers
});

gulp.task('serve', gulp.parallel(['sass', 'scripts']));


gulp.task('default', gulp.series(['serve', 'watch']));
