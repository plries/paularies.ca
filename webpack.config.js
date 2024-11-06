const path = require('path');
// fs = file system
const fs = require('fs');
// imports webpack
const webpack = require('webpack');

module.exports = {
    // configures webpack to use all javascript files in the 'src/' folder
    entry: fs.readdirSync(path.resolve(__dirname, 'src'))
            .filter(filename => filename.endsWith('.js'))
            .map(filename => './src/' + filename),
    // configures webpack to output the file 'bundle.js' to the 'dist' folder
    output: {
        filename: '[name].js',
        path: path.resolve(__dirname, 'dist'),
    },
    mode: 'development',

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

    plugins: [
        new webpack.ProvidePlugin({
            // makes jQuery available as $
            $: 'jquery'
        }),
    ],

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