
const purgeTailwind = (content) => {
  return content.match(/[A-z0-9-:\/]+/g)
}

const purgecss = require('@fullhuman/postcss-purgecss')

module.exports = {
  future: {
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true,
  },
  plugins: [
    require('postcss-import')({
      path: ["themes/callvoiptelefonie/assets/css"],
    }),
    require('tailwindcss')('./themes/callvoiptelefonie/assets/css/tailwind.config.js'),

    purgecss({
      content: ['./themes/callvoiptelefonie/layouts/**/*.html'],
      fontFace: true,
      whitelist: ['pagination', 'layout-split', 'active', 'has-dropdown'],
      extractors: [
        {
          extractor: purgeTailwind,
          extensions: ['html']
        },
      ]
    }),

    require('autoprefixer')
  ]
}
