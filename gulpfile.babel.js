'use strict';

let plugins       = require('gulp-load-plugins');
let yargs         = require('yargs');
let gulp          = require('gulp');
let rimraf        = require('rimraf');
let yaml          = require('js-yaml');
let fs            = require('fs');
let webpackStream = require('webpack-stream');
let webpack2      = require('webpack');
let named         = require('vinyl-named');
let autoprefixer  = require('autoprefixer');
let sass          = require('gulp-sass')(require('sass'));

// Load all Gulp plugins into one variable
const $ = plugins();

// Check for --production flag
let PRODUCTION = !!(yargs.argv.production);

// Load settings from settings.yml
const { COMPATIBILITY, PORT, PATHS, LOCAL_PATH } = loadConfig();

let sassConfig = {
	mode: (PRODUCTION ? true : false)
};

// Define default webpack object
let webpackConfig = {
	mode: (PRODUCTION ? 'production' : 'development'),
	module: {
		rules: [
			{
				test: /\.js$/,
				use: {
					loader: 'babel-loader',
					options: {
						presets: [ "@babel/preset-env" ],
						compact: false
					}
				}
			}
		]
	},
	externals: {
		jquery: 'jQuery'
	},
	devtool: ! PRODUCTION && 'source-map'
};

/**
 * Load in additional config files
 */
function loadConfig() {
	let ymlFile = fs.readFileSync('config.yml', 'utf8');
	return yaml.load(ymlFile);
}

/**
 * Set production mode during the build process
 *
 * @param done
 */
function setProductionMode(done) {
	PRODUCTION = false;
	webpackConfig.mode = 'production';
	webpackConfig.devtool = false;

	sassConfig.production = true;
	done();
}

// Build the "dist" folder by running the tasks below
// Sass must be run later so UnCSS can search for used classes in the others assets.
gulp.task('build:production',
	gulp.series(setProductionMode, clean, javascript, buildSass));

// Build the site and watch for file changes
gulp.task('default',
	gulp.series(clean, javascript, buildSass, gulp.parallel(watch)));

// This happens every time a build starts
function clean(done) {
	rimraf('css', done);
	rimraf('js', done);
}

// Copy files out of the assets folder
// This task skips over the "img", "js", and "scss" folders, which are parsed separately
function copy() {
	return gulp.src(PATHS.assets)
		.pipe(gulp.dest('other/assets'));
}

// In production, the CSS is compressed
function buildSass() {

	const postCssPlugins = [
		// Autoprefixer
		autoprefixer(),
	].filter(Boolean);

	return gulp.src('assets/scss/*.scss')
		.pipe($.sourcemaps.init())
		.pipe(sass({
			includePaths: PATHS.sass
		})
			.on('error', sass.logError))
		.pipe($.postcss(postCssPlugins))
		.pipe($.if(sassConfig.production, $.cleanCss({ compatibility: 'ie11' })))
		.pipe($.if(!sassConfig.production, $.sourcemaps.write()))
		.pipe(gulp.dest('css'));
}

// In production, the file is minified
function javascript() {
	return gulp.src(PATHS.entries)
		.pipe(named())
		.pipe($.sourcemaps.init())
		.pipe(webpackStream(webpackConfig, webpack2))
		.pipe($.if(PRODUCTION, $.uglify()
			.on('error', e => { console.log(e); })
		))
		.pipe($.if( ! PRODUCTION, $.sourcemaps.write()))
		.pipe(gulp.dest('js'));
}

// Watch for changes to static assets, Sass, and JavaScript
function watch() {
	// gulp.watch(PATHS.assets, copy);
	gulp.watch('assets/scss/**/*.scss').on('all', gulp.series(buildSass));
	gulp.watch('assets/js/**/*.js').on('all', gulp.series(javascript));
}
