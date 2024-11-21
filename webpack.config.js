const path = require('path');
// fs = file system
const fs = require('fs');
// imports webpack
const webpack = require('webpack');

module.exports = {
    entry: {
        global: ['./src/lenis.js', './src/cursor.js', './src/reveal.js', './src/menu.js', './src/footer.js', './src/tippy.js',],
        home: ['./src/fitty.js', './src/hero.js'],
        work: ['./src/filter.js'],
        about: ['./src/flickity.js', './src/skills.js'],
        project: ['./src/arrow.js', './src/dropdown.js', './src/modal.js', './src/highlight.js'],
    },
    // configures webpack to output the file 'bundle.js' to the 'dist' folder
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: '[name].js',
        // cleans the dist folder before each build
        clean: true,
    },
    mode: 'production',

    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        // ensures ES6+ syntax is compatible with older browsers
                        presets: ['@babel/preset-env'],
                    },
                },
            },
        ],
    },

    // seperates all dependencies from the main bundle
    optimization: {
        splitChunks: {
            cacheGroups: {
                vendor: {
                    test: /[\\/]node_modules[\\/]/,
                    name: 'vendors',
                    chunks: 'all',
                },
            },
        },
    },

}