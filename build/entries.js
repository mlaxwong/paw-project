module.exports = [
  {
    entry: [
      './src/assets/source/js/app.js',
      './src/assets/source/scss/app.scss'
    ],
    output: {
      path: './dist/',
      filename: {
        js: 'asset.app.js',
        css: 'asset.app.css'
      }
    }
  }
]