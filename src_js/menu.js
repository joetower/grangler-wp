/**
* @file
* Provide JavaScript for main menu toggle.
*/

(function ($) {

 'use strict';

    var $navToggle = $('header .js-menu-item .more-link');

    // hide items depending on the viewport
    $('header .js-hidden--small').addClass('hidden--small');
    $('header .js-hidden--medium').addClass('hidden--medium');
    $('header .js-hidden--large').addClass('hidden--large');
    // remove the hidden (everywhere) class
    $('header .js-not-hidden').removeClass( 'hidden' );

    // Toggle
    $navToggle.on('click', function (event) {
      event.preventDefault();

      // Toggle text
      var el = $(this);
      el.text() === el.data('text-swap') ? el.text(el.data('text-original')) : el.text(el.data('text-swap'));

      // Show/unshow hidden menu
      $('header .js-hidden--small').toggleClass('hidden--small');
      $('header .js-hidden--medium').toggleClass('hidden--medium');
    });

})(jQuery);
