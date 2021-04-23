class TailwindExtractor {
	static extract(content) {
		return content.match(/[A-z0-9-:\/]+/g)
	}
}

module.exports = {
  plugins: [
    require('postcss-import')({
      path: ["themes/callvoiptelefonie/assets/css"],
    }),
    require('tailwindcss')('./themes/callvoiptelefonie/assets/css/tailwind.config.js'),
    require('autoprefixer')({
      browsers: ['>1%']
    }),
  ]
}