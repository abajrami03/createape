jQuery( document ).ready(function($) {
    $(window).on("load resize",function() {

        var counters = $(".count");
        var countersQuantity = counters.length;
        var counter = [];
      
        for (i = 0; i < countersQuantity; i++) {
          counter[i] = parseInt(counters[i].innerHTML);
        }
      
        var count = function(start, value, id) {
          var localStart = start;
          setInterval(function() {
            if (localStart < value) {
              localStart++;
              counters[id].innerHTML = localStart;
            }
          }, 0.5);
        }
      
        for (j = 0; j < countersQuantity; j++) {
          count(0, counter[j], j);
        }
      });

      $( ".menu_toggle" ).click(function() {
        $( "nav#site-navigation" ).toggle( "fast", function() {
          // Animation complete.
        });
        $( ".burger_menu" ).toggle( "fast", function() {
          // Animation complete.
        });
        $( ".x_menu" ).toggle( "fast", function() {
          // Animation complete.
        });
      });
});