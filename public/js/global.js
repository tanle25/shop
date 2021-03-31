function stickyMenu() {
    var timer;
    $(window).scroll(function() {
        if ( timer ) clearTimeout(timer)
        timer = setTimeout(function(){
            if ($(window).scrollTop() >= 90) {
                $('header').addClass('fixed');
            } else {
                $('header').removeClass('fixed');
            }
        }, 200);
        
    });
    $("#back-top").click(function(){
        $("body,html").animate({scrollTop:0 },"normal");
        return!1
    });
}
function menuToggle() {
    $('.navigation-mobile').on("click", function(e) {
        $(this).parent(".mobileheader").toggleClass("active");
        e.stopPropagation();
    });
    $(document).on('click', function(vl) {
        if ($(vl.target).is('.mobileheader')==false) {
            $('.mobileheader').removeClass("active");
        }
    });
}

function HoverItem() {
    $('.content-image').each(function(){
        $(this).hover(function() {
            var height = $(this).height();
            var img_height = $(this).find('.img-fluid').height();
            var value_top = height - img_height;
            $(this).find('.img-fluid').animate({'top' : value_top}, 2500);
        }, function() {
            $(this).find('.img-fluid').animate({'top' : 0}, 500);
        });
    });
}

$(document).ready( function() {
  menuToggle();
  stickyMenu();
});

$(document).ready(function(){
    $('.img-scroll').lazy();
    // init Isotope
    var $grid = $('.content').isotope({
      itemSelector: '.item',
      layoutMode: 'fitRows',
    });

    // filter functions
    var filterFns = {
      // show if number is greater than 50
      numberGreaterThan50: function() {
        var number = $(this).find('.number').text();
        return parseInt( number, 10 ) > 50;
      },
    };

    // bind filter button click
    $('#show-homepage').on( 'click', 'li', function() {
      var filterValue = $( this ).attr('data-filter');
      // use filterFn if matches value
      filterValue = filterFns[ filterValue ] || filterValue;
      $grid.isotope({ filter: filterValue });
    });

    // change active class
    $('.list-homepage').each( function( i, buttonGroup ) {
      var $buttonGroup = $( buttonGroup );
      $buttonGroup.on( 'click', 'li', function() {
        $buttonGroup.find('.active').removeClass('active');
        $( this ).addClass('active');
      });
    });

});