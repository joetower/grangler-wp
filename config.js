module.exports = {
  paths: {
    sourceJs: 'src_js',
    js: 'js',
    sass: 'sass',
    css: 'css',
    img: 'img',
    fonts: 'fonts',
  },
  icons: {
    // CSS filenames.
    verbose: 'console.log',
    datasvgcss: 'icons.svg.css',
    datapngcss: 'icons.png.css',
    loadersnippet: 'grunticon.loader.js',
    corsEmbed: false,
    cssprefix: '.icon-',

    urlpngcss: 'icons.fallback.css',
    previewhtml: 'icons.html',
    // png folder.
    pngfolder: 'png',
    // Dimensions.
    defaultWidth: '24px',
    defaultHeight: '24px',
    colors: {

      // Primary
      orange: '#E06D06',
      brown: '#433E0E',
      cream: '#DFD6A7',
      green: '#64A300',

      gray: '#393E41',
      white: '#FFFFFF',
      black: '#000',

    },
    compressPNG: true,
    customselectors: {
      'check_box_outline_blank': ['div:not(#foo) input[type="checkbox"] + label'],
      'check_box-black': ['div:not(#foo) input[type="checkbox"]:checked + label'],
      'format_quote-orange': ['blockquote'],
      'search-gray': ['input.form-search'],
      'expand_more-gray': ['.comment-reply-title'],
      'expand_less-green': ['.comment-reply-title.open'],
    },
  }
};
