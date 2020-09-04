// Adiciona os modulos instalados
const gulp = require("gulp");
const sass = require("gulp-sass");
const autoprefixer = require("gulp-autoprefixer");
const browserSync = require("browser-sync").create();
const concat = require("gulp-concat");
const babel = require("gulp-babel");
const uglify = require("gulp-uglify");
const imagemin = require("gulp-imagemin");

// Funçao para compilar o SASS e adicionar os prefixos
function compilaSass() {
    return gulp
        .src("assets/scss/**/*.scss")
        .pipe(
            sass({
                outputStyle: "compressed",
                includePaths: [
                    "./node_modules/bootstrap/scss/",
                    "./node_modules/@fortawesome/fontawesome-free/scss/",
                ],
            }).on("error", sass.logError)
        )
        .pipe(
            autoprefixer({
                browsers: ["last 2 versions"],
                cascade: false,
            })
        )
        .pipe(gulp.dest("./"))
        .pipe(browserSync.stream());
}

exports.compilaSass = compilaSass;

// Tarefa de gulp para a função de SASS
gulp.task("sass", function (done) {
    compilaSass();
    done();
});

// Função para juntar o JS
function gulpJS() {
    return gulp
        .src("assets/js/**/*.js")
        .pipe(concat("all.js"))
        .pipe(
            babel({
                presets: ["env"],
            })
        )
        .pipe(uglify())
        .pipe(gulp.dest("public/"))
        .pipe(browserSync.stream());
}

exports.gulpJS = gulpJS;

// JS Plugins
function pluginJS() {
    return gulp
        .src(["assets/js/plugins/*.js"])
        .pipe(concat("plugins.js"))
        .pipe(gulp.dest("public/"))
        .pipe(browserSync.stream());
}

exports.pluginJS = pluginJS;

// Images
function images() {
    return gulp
        .src("assets/images/*")
        .pipe(imagemin())
        .pipe(sourcemaps.write("./"))
        .pipe(browserSync.stream({ match: "src/images/*" }))
        .pipe(gulp.dest("./public/images"));
}

exports.images = images;

// Fonts
function fonts() {
    return gulp
        .src([
            "node_modules/@fortawesome/fontawesome-free/webfonts/*",
            "src/fonts/*",
        ])
        .pipe(
            browserSync.stream({
                match: "node_modules/@fortawesome/fontawesome-free/webfonts/*",
            })
        )
        .pipe(gulp.dest("./public/fonts"));
}

exports.fonts = fonts;

// Função para iniciar o browser
function browser() {
    browserSync.init({
        server: {
            baseDir: "./",
        },
    });
}

// Tarefa para iniciar o browser-sync
exports.browser = browser;

// Função de watch do Gulp
function watch() {
    gulp.watch("css/scss/*.scss", compilaSass);
    gulp.watch("js/main/*.js", gulpJS);
    gulp.watch("js/plugins/*.js", pluginJS);
    gulp
        .watch(["*.html", "template-parts/*.html"])
        .on("change", browserSync.reload);
    // gulp.watch(["*.php", "./**/*.php"]).on("change", browserSync.reload);
}

// Inicia a tarefa de watch
exports.watch = watch;

exports.watch = gulp.parallel(watch, browser, sass, gulpJS, fonts);