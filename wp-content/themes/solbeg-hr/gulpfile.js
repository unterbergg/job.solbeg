const gulp = require('gulp');
const sass = require('gulp-sass');
const watch = require('gulp-watch');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const minify = require('gulp-minify');

gulp.task('sass', function() {
    return gulp.src('src/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('dist/'))
})

gulp.task('compress', function() {
    return gulp.src(['lib/*.js', 'lib/*.mjs'])
        .pipe(minify())
        .pipe(gulp.dest('dist/'))
});

gulp.task('watch', function() {
    gulp.watch('src/**/*.scss', gulp.parallel('sass'));
    gulp.watch(['lib/*.js', 'lib/*.mjs'], gulp.parallel('compress'));
})
