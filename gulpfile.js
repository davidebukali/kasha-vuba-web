var gulp = require('gulp');
var bump = require('gulp-bump');
var args = require('yargs').argv;
var concat = require('gulp-concat');


gulp.task('bump', function () {
    /// <summary>
    /// It bumps revisions
    /// Usage:
    /// 1. gulp bump : bumps the package.json and bower.json to the next minor revision.
    ///   i.e. from 0.1.1 to 0.1.2
    /// 2. gulp bump --version 1.1.1 : bumps/sets the package.json and bower.json to the 
    ///    specified revision.
    /// 3. gulp bump --type major       : bumps 1.0.0 
    ///    gulp bump --type minor       : bumps 0.1.0
    ///    gulp bump --type patch       : bumps 0.0.2
    ///    gulp bump --type prerelease  : bumps 0.0.1-2
    /// </summary>

    var type = args.type;
    var version = args.version;
    var options = {};
    var msg = "";
    if (version) {
        options.version = version;
        msg += ' to ' + version;
    } else {
        options.type = type;
        msg += ' for a ' + type;
    }

    return gulp
        .src(['./package.json'])
        .pipe(bump(options))
        .pipe(gulp.dest('./'));
});

//Process Styles
gulp.task('concat-styles', function() {
	return gulp.src([
		'css/bootcards-desktop.min.css',
		'css/styles.css'
		])
	.pipe(concat('app.css'))
	.pipe(gulp.dest('build/css'));
});

//Watch Files For Changes
gulp.task('watch', function() {
	gulp.watch('css/*.css', ['concat-styles']);
});

//Default Task
gulp.task('default', function(){
	gulp.start(
		'concat-styles',
		'watch');
});