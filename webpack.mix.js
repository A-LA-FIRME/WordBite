const mix = require('laravel-mix');
const fs = require('fs');
const path = require('path');

/**
 * Mix Asset Management
 */
function mixAsset(type, dir, includes = []) {
    const files = fs.readdirSync(dir);

    files.forEach((file) => {
        const idx = file.lastIndexOf('.');
        const min_file = `${file.substring(0, idx)}.min.${type}`;
        const output = path.join('public', type, min_file);
        const merged = [...includes, path.join(dir, file)];

        if (type === 'css') {
            mix.styles(merged, output).version();
        } else if (type === 'js') {
            mix.scripts(merged, output).version();
        }
    });
}

const type_css = 'css';
const type_js = 'js';
var includes_css;
var includes_js;

/*
 * Assets
 */

/** mix img */
mix.copy('resources/assets/img', 'public/img')
   .version();

/** mix css */
mix.styles([
    /** vendor */
    'resources/vendor/bootstrap/css/bootstrap.min.css',
    'resources/vendor/select2/css/select2.min.css',
    'resources/vendor/flatpickr/css/flatpickr.min.css',
    'resources/vendor/animate/css/animate.min.css',
    'resources/vendor/aos/css/aos.css',
    'resources/vendor/glightbox/css/glightbox.min.css',
    'resources/vendor/swal/css/dark.css',
    /** */
    'resources/assets/css/style.css',
], 'public/css/app.min.css').version();

/** mix js */
mix.scripts([
    /** vendor */
    'resources/vendor/jquery/js/jquery-3.7.1.min.js',
    'resources/vendor/jquery/js/jquery.validate.min.js',
    'resources/vendor/select2/js/select2.min.js',
    'resources/vendor/aos/js/aos.js',
    'resources/vendor/bootstrap/js/bootstrap.bundle.min.js',
    'resources/vendor/flatpickr/js/flatpickr.js',
    'resources/vendor/glightbox/js/glightbox.min.js',
    'resources/vendor/swal/js/sweetalert2.min.js',
    /** */
    'resources/assets/js/main.js',
], 'public/js/app.min.js').version();

const dir_js = 'resources/assets/js/';
const dir_css = 'resources/assets/css/';

includes_js = [];
includes_css = [];

mixAsset(type_js, dir_js, includes_js);
mixAsset(type_css, dir_css, includes_css);
