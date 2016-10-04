const webpack = require('webpack');

module.exports = {
	entry: './assets/es6/app.js',
	output: {
		filename: 'app.js',
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
	plugins: [
		new webpack.optimize.UglifyJsPlugin(),
		new webpack.optimize.OccurrenceOrderPlugin(),
		new webpack.optimize.DedupePlugin(),
	],
};
