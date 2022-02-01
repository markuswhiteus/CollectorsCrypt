// binds $ to jquery, requires you to write strict code. Will fail validation if it doesn't match requirements.
(function($) {
    "use strict";

	// add all of your code within here, not above or below
  console.log('start');
  $(document).ready(function(){
    console.log('Ready');
    $(".burgermenu").click(function(){
        console.log('Click');
      $(".mobilemenu").animate({
        height: 'toggle'
      });
    });
  });
})(jQuery);

// jQuery(document).ready(function(){
//     console.log('Ready');
//     jQuery(".burgermenu").click(function(){
//         console.log('Click');
//       jQuery(".mobilemenu").animate({
//         height: 'toggle'
//       });
//     });
//   });