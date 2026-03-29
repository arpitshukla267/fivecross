/*--slider crousal open --*/
jQuery(document).ready(function ($) {
    $('.customer-logos').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 1500,
        arrows: true,
        dots: false,
        pauseOnHover: false,
        draggable: false,  // Disable drag/swipe functionality
        prevArrow: '<i class="slick-prev fas fa-angle-left"></i>',
        nextArrow: '<i class="slick-next fas fa-angle-right"></i>',
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 4
            }
        },{
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        },{
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });

    // Prevent scrolling through slides with mouse wheel
    $('.customer-logos').on('wheel', function(e) {
        e.preventDefault();
    });
});

         
/*--slider crousal close --*/

          
          
/*--projects page open --*/
          $(document).ready(function () {
    $('[name="options"]').change(function () {
      var target = $(this).attr('id');
      if (target === 'all') {
        $('.filter-item').show();
      } else {
        $('.filter-item').hide();
        $('.' + target).show();
      }
    });
  });
  
/*--projects page close --*/

/*--header section scrolling open --*/
  
  document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('scroll', function () {
        var scrollPosition = window.scrollY;

        // Adjust menu transparency based on scroll position
        var header = document.querySelector('site-header');
        if (header) {
            if (scrollPosition > 50) {
                header.style.backgroundColor = '#000';
            } else {
                header.style.backgroundColor = '#000';
            }
        }

        // Zoom out hero image based on scroll position
        var hero = document.querySelector('.wrapper');
        if (hero) {
            hero.style.backgroundSize = '100% ' + (100 + scrollPosition / 5) + '%';
        }
    });
});

/*--header section scrolling open --*/

/*--testimonial js --*/
$(document).ready(function() {
    // Background colors array
    const backgroundColors = ["#C74827", "#FBA328", "#919552", "#1D8E9E", "#9DC6D8"];
     // Remove the element with .mob_none class on mobile devices
    if ($(window).width() < 768) {
        $('.mob_none').remove();
    }

    const owl = $('#partner-carousel');
    owl.owlCarousel({
        loop: false,
        margin: 80,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    owl.on('changed.owl.carousel', function(event) {
        // Get the index of the current slide
        const currentIndex = event.item.index;
        const normalizedIndex = currentIndex % backgroundColors.length;

        // Change the background color of the section element
        $('#carousel-sect').css('background-color', backgroundColors[normalizedIndex]);
    });

    // Initialize with the first background color
    $('#carousel-sect').css('background-color', backgroundColors[0]);
});

	/*--testimonial js --*/
	
	/*--banner slider open --*/
window.addEventListener('load', function() {
    // Adjust the scroll position after the page has fully loaded
    window.scrollTo(0, 0);
});





	
	
	
	
	














	
