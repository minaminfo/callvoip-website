var path = require("path");
module.exports = {
  entry: {
    app: './themes/callvoiptelefonie/assets/icons/icons.js'
  },
	output: {
		path: path.join(__dirname, "./themes/callvoiptelefonie/assets/js"),
		filename: 'icons.bundle.js',
	},
}