const gulp = require('gulp'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	sourcemaps = require('gulp-sourcemaps'),
	rev = require('gulp-rev'),
	webpack = require('webpack-stream'),
	exec = require('child_process').exec;


// 
//                      /$$                                                         
//                     | $$                                                         
//   /$$$$$$  /$$   /$$| $$  /$$$$$$           /$$$$$$$  /$$$$$$   /$$$$$$$ /$$$$$$$
//  /$$__  $$| $$  | $$| $$ /$$__  $$ /$$$$$$ /$$_____/ |____  $$ /$$_____//$$_____/
// | $$  \ $$| $$  | $$| $$| $$  \ $$|______/|  $$$$$$   /$$$$$$$|  $$$$$$|  $$$$$$ 
// | $$  | $$| $$  | $$| $$| $$  | $$         \____  $$ /$$__  $$ \____  $$\____  $$
// |  $$$$$$$|  $$$$$$/| $$| $$$$$$$/         /$$$$$$$/|  $$$$$$$ /$$$$$$$//$$$$$$$/
//  \____  $$ \______/ |__/| $$____/         |_______/  \_______/|_______/|_______/ 
//  /$$  \ $$              | $$                                                     
// |  $$$$$$/              | $$                                                     
//  \______/               |__/                                                     
// 

gulp.task('sass', () => {
	exec('rm -f public/css/*');

	return gulp.src('./resources/assets/sass/**/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer({ browsers: ['> 5%'], cascade: false, }))
		.pipe(rev())
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest('./public/css'));
});

gulp.task('sass-prod', () => {
	exec('rm -f public/css/*');

	return gulp.src('./resources/assets/sass/**/*.scss')
		.pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
		.pipe(autoprefixer({ browsers: ['> 5%'], cascade: false, }))
		.pipe(rev())
		.pipe(gulp.dest('./public/css'));
});


//
//                          /$$                                     /$$      
//                         | $$                                    | $$      
//  /$$  /$$  /$$  /$$$$$$ | $$$$$$$   /$$$$$$   /$$$$$$   /$$$$$$$| $$   /$$
// | $$ | $$ | $$ /$$__  $$| $$__  $$ /$$__  $$ |____  $$ /$$_____/| $$  /$$/
// | $$ | $$ | $$| $$$$$$$$| $$  \ $$| $$  \ $$  /$$$$$$$| $$      | $$$$$$/ 
// | $$ | $$ | $$| $$_____/| $$  | $$| $$  | $$ /$$__  $$| $$      | $$_  $$ 
// |  $$$$$/$$$$/|  $$$$$$$| $$$$$$$/| $$$$$$$/|  $$$$$$$|  $$$$$$$| $$ \  $$
//  \_____/\___/  \_______/|_______/ | $$____/  \_______/ \_______/|__/  \__/
//                                   | $$                                    
//                                   | $$                                    
//                                   |__/                                    
//

gulp.task('webpack', () => {
	exec('rm -f ./public/js/*');

	return gulp.src('./resources/assets/es6/app.js')
		.pipe(webpack(require('./webpack.conf.js')))
		.pipe(rev())
		.pipe(gulp.dest('./public/js'));
});

gulp.task('webpack-prod', () => {
	exec('rm -f ./public/js/*');

	return gulp.src('./resources/assets/es6/app.js')
		.pipe(webpack(require('./webpack-prod.conf.js')))
		.pipe(rev())
		.pipe(gulp.dest('./public/js'));
});


// 
//  /$$$$$$$                           /$$                       /$$     /$$                    
// | $$__  $$                         | $$                      | $$    |__/                    
// | $$  \ $$ /$$$$$$   /$$$$$$   /$$$$$$$ /$$   /$$  /$$$$$$$ /$$$$$$   /$$  /$$$$$$  /$$$$$$$ 
// | $$$$$$$//$$__  $$ /$$__  $$ /$$__  $$| $$  | $$ /$$_____/|_  $$_/  | $$ /$$__  $$| $$__  $$
// | $$____/| $$  \__/| $$  \ $$| $$  | $$| $$  | $$| $$        | $$    | $$| $$  \ $$| $$  \ $$
// | $$     | $$      | $$  | $$| $$  | $$| $$  | $$| $$        | $$ /$$| $$| $$  | $$| $$  | $$
// | $$     | $$      |  $$$$$$/|  $$$$$$$|  $$$$$$/|  $$$$$$$  |  $$$$/| $$|  $$$$$$/| $$  | $$
// |__/     |__/       \______/  \_______/ \______/  \_______/   \___/  |__/ \______/ |__/  |__/
//                                                                                              

gulp.task('prod', ['sass-prod', 'webpack-prod']);


// 
//  /$$      /$$  /$$$$$$  /$$$$$$$$ /$$$$$$  /$$   /$$
// | $$  /$ | $$ /$$__  $$|__  $$__//$$__  $$| $$  | $$
// | $$ /$$$| $$| $$  \ $$   | $$  | $$  \__/| $$  | $$
// | $$/$$ $$ $$| $$$$$$$$   | $$  | $$      | $$$$$$$$
// | $$$$_  $$$$| $$__  $$   | $$  | $$      | $$__  $$
// | $$$/ \  $$$| $$  | $$   | $$  | $$    $$| $$  | $$
// | $$/   \  $$| $$  | $$   | $$  |  $$$$$$/| $$  | $$
// |__/     \__/|__/  |__/   |__/   \______/ |__/  |__/
//                                                     

gulp.task('default', () => {
	gulp.watch('./resources/assets/es6/**/*.js', ['webpack']);
	gulp.watch('./resources/assets/sass/**/*.scss', ['sass']);
});
