const webpack = require('webpack');

module.exports = {
	entry: './assets/es6/app.js',
	output: {
		filename: 'app.js',
		sourceMapFilename: '',
	},
	module: {
		loaders: [
			{
				test: /\.js$/,
				exclude: '/node_modules/',
				loader: 'babel-loader',
			},
		],
	},
	devtool: 'eval-source-map',
};
