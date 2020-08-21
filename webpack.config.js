const path = require('path');
const miniCssExtractPlugin = require('mini-css-extract-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = {
    entry: [
        './resources/scss/index.scss'
    ],
    output: {
        filename: 'js/app.min.js',
        path: path.resolve(__dirname, 'public/assets')
    },
    plugins: [
        new CleanWebpackPlugin(),
        new miniCssExtractPlugin({
            filename: 'css/app.min.css'
        })
    ],
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: [
                    miniCssExtractPlugin.loader,
                    'css-loader',
                    'sass-loader',
                ]
            }
        ]
    },
};