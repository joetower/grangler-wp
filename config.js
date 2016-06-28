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
      blue: '#51C6D8',
      blueLightest: '#DAF6FB',
      blueLighter: '#99E8F4',
      blueLight: '#5ADAEE',
      blueMidDark: '#1998AB',
      blueDark: '#126D7A',
      yellow: '#F3E442',
      yellowMidDark: '#E0D23C',

      // Grays and Neutrals
      gray: '#4A4A4A',
      grayLight: '#999999',
      grayLighter: '#B2B2B2',
      grayLightest: '#F4F4F4',
      grayMid: '#4C4C4C',
      grayDark: '#333333',

      white: '#FFFFFF',
      black: '#000',

    },
    compressPNG: true,
    customselectors: {
      'check': ['.check li'],
      'check-black': ['.messages.success, .messages.status'],
      'check-white': ['.callout .check li'],
      'check_box_outline_blank': ['div:not(#foo) input[type="checkbox"] + label'],
      'check_box-black': ['div:not(#foo) input[type="checkbox"]:checked + label'],
      'error-white': ['.messages.error'],
      'expand_more-black': ['.submenu-icon'],
      'expand_more-blueDark': ['.sub-menu li.menu-item--collapsed > a'],
      'expand_more-white': ['.sub-menu li.menu-item--collapsed > a:hover, .sub-menu li.menu-item--expanded > a, .sub-menu li.menu-item--expanded > a:hover'],
      'expand_less-white': ['.sub-menu li.menu-item--expanded > a.is-active, .sub-menu li.menu-item--expanded > a.is-active, .sub-menu li.menu-item--expanded > a.is-active:hover, .menu-open .submenu-icon'],
      'format_quote-yellowMidDark': ['blockquote'],
      'radio_button_unchecked': ['div:not(#foo) input[type="radio"] + label'],
      'radio_button_checked-black': ['div:not(#foo) input[type="radio"]:checked + label'],
      'search-gray': ['input.form-search'],
      'warning-black': ['.messages.warning'],
      'facebook-white': ['.facebook'],
      'instagram-white': ['.instagram'],
      'pinterest-white': ['.pinterest'],
      'twitter-white': ['.twitter'],
    },
  }
};
