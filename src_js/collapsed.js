/**
* @file
* Provide JavaScript for main menu toggle.
*/

(function ($) {
  'use strict';
  $(document).ready(function () {
    $('.show-comments').on('click touchstart', function(){
    var disqus_shortname = 'joetower'; // Replace this value with *your* username.
    // ajax request to load the disqus javascript
    $.ajax({
                      type: 'GET',
                      url: 'https://' + disqus_shortname + '.disqus.com/embed.js',
                      dataType: 'script',
                      cache: true
              });
    // hide the button once comments load
    $(this).fadeOut();
        });
});
})(jQuery);
