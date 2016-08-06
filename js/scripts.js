/**
* @file
* Provide JavaScript for main menu toggle.
*/

(function ($) {
  'use strict';
  $(document).ready(function () {

    $('.toggleComments').on('click', function(event) {
      event.preventDefault();
      if ($('.comment-form').hasClass('open')) {
        $('.comment-form').removeClass('open');
        $('.toggleComments').removeClass('open');
        $('.comments-area').removeClass('open');
      } else {
        $('.toggleComments').addClass('open');
        $('.comment-form').addClass('open');
        $('.comments-area').addClass('open');
      }
    });


  });

})(jQuery);
