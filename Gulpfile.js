const gulp = require('gulp');
const clean = require('gulp-clean');
const scss = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const uglifyJS = require('uglify-js');
const rename = require('gulp-rename');
const htmlmin = require('gulp-html-minifier');

const paths = {
    // clean: [
    //     './static/assets/css/*.css',
    //     './static/assets/js/*.js'
    // ],
    scss: [
        './src/scss/style.scss',
        './src/scss/*.scss'
    ],
    js: [
        './src/js/*.js'
    ]
}

gulp.task('clean', () => {
    return gulp.src(paths.clean)
        .pipe(clean());
});


//nested
//compact
//expanded
//compressed

gulp.task('css', () => {
    return gulp.src(paths.scss)
        // .pipe(concat('style.css'))                
        .pipe(scss({outputStyle: 'compressed'}).on('error', scss.logError))
        .pipe(autoprefixer())
        .pipe(gulp.dest('./dist/css/'));        
});


gulp.task('js', () => {
    return gulp.src(paths.js)
        // .pipe(concat('main.js'))
        .pipe(uglify())        
        .pipe(gulp.dest('./dist/js'));        
});

gulp.task('watch', ['css', 'js'], () => {
    // gulp.watch(paths.clean, ['clean']);
    gulp.watch(paths.scss, ['css']);  
    gulp.watch(paths.js, ['js']);  
});

gulp.task('default', ['watch']);