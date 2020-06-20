'use strict';

var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    bourbon = require('node-bourbon'),
    browsersync = require('browser-sync'),
    rigger = require('gulp-rigger'),
    sass = require('gulp-sass'),
    watch = require('gulp-watch'),
    uglify = require('gulp-uglify'),
    sourcemaps = require('gulp-sourcemaps'),
    rename = require('gulp-rename'),
    reload = browsersync.reload;


/*===> BEGIN DEV COMPILE <===*/
var appRoot = './app',
    buildRoot = './',
    dir = {
        html: '',
        htmlTmp: '/html-tpl',
        php: '',
        js: '/js',
        scss: '/scss',
        css: '/css',
        images: '/img',
        fonts: '/fonts',
        libs: '/libs'
    },
    appPaths = {
        html: appRoot + dir.html + '/*.html',
        htmlTmp: appRoot + dir.htmlTmp + '/*.html',
        php: appRoot + dir.php + '/*.php',
        js: appRoot + dir.js + '/**/*.js',
        scss: appRoot + dir.scss + '/**/*.scss',
        images: appRoot + dir.images + '/**/*',
        fonts: appRoot + dir.fonts + '/**/*.*',
        libs: appRoot + dir.libs + '/**/*'
    },
    buildPaths = {
        html: buildRoot + dir.html,
        php: buildRoot + dir.php,
        js: buildRoot + dir.js,
        css: buildRoot + dir.css,
        images: buildRoot + dir.images,
        fonts: buildRoot + dir.fonts,
        libs: buildRoot + dir.libs
    };

gulp.task('stylesheets', function() {
    return gulp.src(appPaths.scss)
        .pipe(sourcemaps.init())
        .pipe(sass({
            //loadPath: [appPaths.mainScss]
            outputStyle: 'nested',//compact
            includePaths: bourbon.includePaths
        })).on('error', sass.logError)
        .pipe(autoprefixer({
            browsers: ['last 3 versions']
        }))
        .pipe(sourcemaps.write())
        // .pipe(rename('stylesheet.css'))
        .pipe(gulp.dest(buildPaths.css))
        .pipe(reload({
            stream: true
        }));
});

gulp.task('js', function() {
    return gulp.src(appPaths.js)
        // .pipe(uglify())
        .pipe(gulp.dest(buildPaths.js))
        .pipe(reload({
            stream: true
        }));
});

gulp.task('html', function() {
    gulp.src(appPaths.html)
        .pipe(rigger())
        .pipe(gulp.dest(buildPaths.html))
        .pipe(reload({
            stream: true
        }));
});
/*===> END DEV COMPILE <===*/


/*===> BEGIN VERSION COMPILE <===*/
// var appRoot = './app',
//     buildRoot = './',
//     dir = {
//         html: '',
//         htmlTmp: '/html-tpl',
//         php: '',
//         js: '/js',
//         scss: '/scss',
//         css: '/css',
//         images: '/img',
//         fonts: '/fonts',
//         libs: '/libs',
//         versionsDev: '/versions/Develop',
//         versionsDemo: '/versions/Demo',
//         versionsMain: '/versions/Main',
//     },
//     appPaths = {
//         html: appRoot + dir.html + '/*.html',
//         htmlTmp: appRoot + dir.htmlTmp + '/*.html',
//         php: appRoot + dir.php + '/*.php',
//         js: appRoot + dir.js + '/**/*.js',
//         scss: appRoot + dir.scss + '/**/*.scss',
//         images: appRoot + dir.images + '/**/*',
//         fonts: appRoot + dir.fonts + '/**/*.*',
//         libs: appRoot + dir.libs + '/**/*'
//     },
//     buildPaths = {
//         html: buildRoot + dir.html,
//         htmlDev: buildRoot + dir.versionsDev + dir.html,
//         htmlDemo: buildRoot + dir.versionsDemo + dir.html,
//         htmlMain: buildRoot + dir.versionsMain + dir.html,

//         php: buildRoot + dir.php,

//         js: buildRoot + dir.js,
//         jsDev: buildRoot + dir.versionsDev + dir.js,
//         jsDemo: buildRoot + dir.versionsDemo + dir.js,
//         jsMain: buildRoot + dir.versionsMain + dir.js,

//         css: buildRoot +  dir.css,
//         cssDev: buildRoot +  dir.versionsDev + dir.css,
//         cssDemo: buildRoot + dir.versionsDemo + dir.css,
//         cssMain: buildRoot + dir.versionsMain + dir.css,

//         images: buildRoot + dir.images,
        
//         fonts: buildRoot + dir.fonts,

//         libs: buildRoot + dir.libs
// };

/*===> SAVE CSS <===*/
/*gulp.task('stylesheets', function() {
    var a = gulp.src(appPaths.scss)
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'compressed',
            includePaths: bourbon.includePaths
        })).on('error', sass.logError)
        .pipe(autoprefixer({
            browsers: ['last 3 versions']
        }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(buildPaths.css))
        .pipe(reload({
            stream: true
        }));

    var b = gulp.src(appPaths.scss)
                    .pipe(sass({
                        includePaths: bourbon.includePaths
                    })).on('error', sass.logError)
                    .pipe(autoprefixer({
                        browsers: ['last 3 versions']
                    }))
                    .pipe(gulp.dest(buildPaths.cssDev))
                    .pipe(reload({
                        stream: true
                    }));

    var c = gulp.src(appPaths.scss)
                    .pipe(sass({
                        outputStyle: 'compressed',
                        includePaths: bourbon.includePaths
                    })).on('error', sass.logError)
                    .pipe(autoprefixer({
                        browsers: ['last 3 versions']
                    }))
                    .pipe(gulp.dest(buildPaths.cssDemo))
                    .pipe(reload({
                        stream: true
                    }));

    var d = gulp.src(appPaths.scss)
                    .pipe(sass({
                        outputStyle: 'compressed',
                        includePaths: bourbon.includePaths
                    })).on('error', sass.logError)
                    .pipe(autoprefixer({
                        browsers: ['last 3 versions']
                    }))
                    .pipe(gulp.dest(buildPaths.cssMain))
                    .pipe(reload({
                        stream: true
                    }));
    return {a,b,c,d}
    // return a;
});*/

/*===> SAVE JS <===*/
/*gulp.task('js', function() {
    var a = gulp.src(appPaths.js)
        .pipe(uglify())
        .pipe(gulp.dest(buildPaths.js))
        .pipe(reload({
            stream: true
        }));

    var b = gulp.src(appPaths.js)
        .pipe(gulp.dest(buildPaths.jsDev))
        .pipe(reload({
            stream: true
        }));

    var c = gulp.src(appPaths.js)
        .pipe(uglify())
        .pipe(gulp.dest(buildPaths.jsDemo))
        .pipe(reload({
            stream: true
        }));

    var d = gulp.src(appPaths.js)
        .pipe(uglify())
        .pipe(gulp.dest(buildPaths.jsMain))
        .pipe(reload({
            stream: true
        }));
        
    return{a,b,c,d}
    // return a;
});*/

/*===> SAVE HTML <===*/
/*gulp.task('html', function() {
    var a = gulp.src(appPaths.html)
        .pipe(rigger())
        .pipe(gulp.dest(buildPaths.html))
        .pipe(reload({
            stream: true
        }));

    var b = gulp.src(appPaths.html)
        .pipe(rigger())
        .pipe(gulp.dest(buildPaths.htmlDev))
        .pipe(reload({
            stream: true
        }));

    var c = gulp.src(appPaths.html)
        .pipe(rigger())
        .pipe(gulp.dest(buildPaths.htmlDemo))
        .pipe(reload({
            stream: true
        }));

    var d = gulp.src(appPaths.html)
        .pipe(rigger())
        .pipe(gulp.dest(buildPaths.htmlMain))
        .pipe(reload({
            stream: true
        }));

    return{a,b,c,d}
    // return a; 
});*/
/*===> END VERSION COMPILE <===*/


gulp.task('php', function() {
    gulp.src(appPaths.php)
        .pipe(rigger())
        .pipe(gulp.dest(buildPaths.php))
        .pipe(reload({
            stream: true
        }));
});

gulp.task('server', function() {
    browsersync.init({
        server: buildRoot,
        port: 4000,
        notify: false,
        open: true
    });
});

gulp.task('build', [
    'html',
    'php',
    'js',
    'stylesheets',
]);

gulp.task('watch', function() {
    watch([appPaths.html, appPaths.htmlTmp], function(event, cb) {
        gulp.start('html');
    });
    watch([appPaths.php], function(event, cb) {
        gulp.start('php');
    });
    watch([appPaths.scss], function(event, cb) {
        gulp.start('stylesheets');
    });
    watch([appPaths.js], function(event, cb) {
        gulp.start('js');
    });
    watch([appPaths.images], function(event, cb) {
        reload({
            stream: true
        });
    });
    watch([appPaths.fonts], function(event, cb) {
        reload({
            stream: true
        });
    });
    watch([appPaths.libs], function(event, cb) {
        reload({
            stream: true
        });
    });
});

gulp.task('default', [
    'build',
    'server',
    'watch'
]);