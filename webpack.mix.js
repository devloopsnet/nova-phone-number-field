let mix = require('laravel-mix')

require('./nova.mix')

mix
    .setPublicPath('dist')
    .webpackConfig({
        resolve: {
            extensions: ['.ts', '.tsx', '.js']
        },
        module: {
            rules: [{
                test: /\.tsx?$/,
                loader: 'ts-loader'
            }]
        }
    })
    .js('resources/js/field.js', 'js')
    .vue({version: 3})
    .css('resources/css/field.css', 'css')
    .nova('devloops/phone-number')
