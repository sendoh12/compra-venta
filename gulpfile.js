// var elixir = require('laravel-elixir');

// elixir(function(mix) {
//     mix.sass('app.scss');
// });

var gulp = require('gulp');

gulp.task('sass', function(mix) {
    return gulp.src('resource/sass/app.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('public/css'))
});