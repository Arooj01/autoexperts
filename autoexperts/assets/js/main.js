(function ($) {
  "use strict";
  
  /*----------- 02. Mobile Menu ----------*/
  function mobielMenu() {
    // Active The Menu
    let mobileMenu = {
      menuActive: '.main-menu',
      menuContainer: '.mobile-menu',
      meanScreenWidth: 992,
      subMenuContainer: 'li.menu-item-has-children',
      mainWrapper: '.mobile-menu-wrapper',
      areaWrapper: '.mean-menu-area',
      openBtn: '.menuToggleBtn',
      clsBtn: '.mobileMenucls'
    }

    // Transfer the object with short form
    let opt = $.extend(mobileMenu),
      menu = $(opt.menuActive),
      container = $(opt.menuContainer),
      subMenu = opt.subMenuContainer + '> ul',
      dropDownBtn = opt.subMenuContainer + '> a';
    // Show Mean Menu
    function meanMenu() {
      menu.css('display', 'none');
      container.html(menu.html());
      // Hide the menu By default
      $(subMenu).css('display', 'none');
      // Mobile Menu Dropdown
      $(dropDownBtn).each(function () {
        $(this).on('click', function (e) {
          e.preventDefault();
          $(this).parent().toggleClass('show');
          $(this).next('ul').slideToggle(300);
          $(this).next('ul').toggleClass('open');
        })
      });
    }
    // Show Orginal Menu
    function menuOrginal() {
      menu.css('display', '');
      $(subMenu).css('display', '');
      $(opt.mainWrapper).removeClass('menu-visible');
      container.html('')
    }
    // Current Windows Size
    let screenWidth = $(window).width();
    // Check Screen Size
    function screenChecker() {
      if (screenWidth < opt.meanScreenWidth) {
        meanMenu();
      } else {
        menuOrginal();
      }
    };
    screenChecker();
    // Check On windows Resize
    $(window).on('resize', function () {
      screenWidth = $(window).width();
      screenChecker();
    });


    // Menu Wrapper
    var menuWrap = $(opt.mainWrapper);
    var menuArea = $(opt.areaWrapper);

    // Menu Open
    $(opt.openBtn).on('click', function () {
      menuWrap.addClass('menu-visible');
    })

    // Menu Close
    $(opt.clsBtn).on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      menuWrap.removeClass('menu-visible');
      autoMenuCls();
    });

    // Outside Click Hide
    menuWrap.on('click', function (e) {
      e.stopPropagation();
      $(this).removeClass('menu-visible');
      autoMenuCls();
    });
    menuArea.on('click', function (e) {
      e.stopPropagation();
      menuWrap.addClass('menu-visible')
    });

    // Auto Close Sub Menu On Click Cls Btn
    function autoMenuCls() {
      if ($(subMenu).hasClass('open')) {
        $(subMenu).removeClass('open');
        $(subMenu).slideUp(300);
        $(opt.subMenuContainer).removeClass('show');
      }
    }

  }
  mobielMenu();
  
  /*---------- 03. Sticky fix ----------*/
  var lastScrollTop = '';
  function stickyMenu($targetMenu, $toggleClass) {
    var st = $(window).scrollTop();
    if ($(window).scrollTop() > 600) {
      if (st > lastScrollTop) {
        // hide sticky menu on scroll down
        $targetMenu.removeClass($toggleClass);

      } else {
        // active sticky menu on scroll up
        $targetMenu.addClass($toggleClass);
      };
    } else {
      $targetMenu.removeClass($toggleClass);
    };

    lastScrollTop = st;
  };

  $(window).on("scroll", function () {
    stickyMenu($('.sticky-header'), "active");

    //Check to see if the window is top if not then display button
    if ($(this).scrollTop() > 400) {
      $('.scrollToTop').addClass('show');
    } else {
      $('.scrollToTop').removeClass('show');
    }

  });

  /*---------- 04. Scroll To Top ----------*/
  $('.scrollToTop').on('click', function (e) {
    $('html, body').animate({
      scrollTop: 0
    }, 4000);
    return false;
  })


/*---------- 21. Scroll Down ----------*/
  function smoothScrollDown() {
    $('.scroll-down').each(function () {
      $(this).on('click', function (event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
          event.preventDefault();
          $('html, body').stop().animate({
            scrollTop: target.offset().top - 100
          }, 1500);
        }
      });
    })
  };
  smoothScrollDown();

  /*----------- 39. Google Map Active ----------*/

  // Google Map For Footer 1
  function basicmap() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
      // How zoomed in you want the map to start at (always required)
      zoom: 11,
      scrollwheel: false,
      // The latitude and longitude to center the map (always required)
      center: new google.maps.LatLng(25.1485, 55.2373), // New York
      // This is where you would paste any style found on Snazzy Maps.
      styles: [{
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{
          "color": "#e9e9e9"
        }, {
          "lightness": 17
        }]
      }, {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [{
          "color": "#f5f5f5"
        }, {
          "lightness": 20
        }]
      }, {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#ffffff"
        }, {
          "lightness": 17
        }]
      }, {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{
          "color": "#ffffff"
        }, {
          "lightness": 29
        }, {
          "weight": .2
        }]
      }, {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [{
          "color": "#ffffff"
        }, {
          "lightness": 18
        }]
      }, {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [{
          "color": "#ffffff"
        }, {
          "lightness": 16
        }]
      }, {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{
          "color": "#f5f5f5"
        }, {
          "lightness": 21
        }]
      }, {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [{
          "color": "#dedede"
        }, {
          "lightness": 21
        }]
      }, {
        "elementType": "labels.text.stroke",
        "stylers": [{
          "visibility": "on"
        }, {
          "color": "#ffffff"
        }, {
          "lightness": 16
        }]
      }, {
        "elementType": "labels.text.fill",
        "stylers": [{
          "saturation": 36
        }, {
          "color": "#333333"
        }, {
          "lightness": 40
        }]
      }, {
        "elementType": "labels.icon",
        "stylers": [{
          "visibility": "off"
        }]
      }, {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [{
          "color": "#f2f2f2"
        }, {
          "lightness": 19
        }]
      }, {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#fefefe"
        }, {
          "lightness": 20
        }]
      }, {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [{
          "color": "#fefefe"
        }, {
          "lightness": 17
        }, {
          "weight": 1.2
        }]
      }]
    };
    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('footer-map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(25.1485, 55.2373),
      map: map,
      title: 'Cryptox'
    });
  }
  if ($('#footer-map').length != 0) {
    google.maps.event.addDomListener(window, 'load', basicmap);
  }

  /*----------- Google Map For Contact Map --------------------*/

  function contactMap() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
      // How zoomed in you want the map to start at (always required)
      zoom: 11,
      scrollwheel: false,
      // The latitude and longitude to center the map (always required)
      center: new google.maps.LatLng(25.1485, 55.2373), // New York
      // This is where you would paste any style found on Snazzy Maps.
      styles: [{
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{
          "color": "#e9e9e9"
        }, {
          "lightness": 17
        }]
      }, {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [{
          "color": "#f5f5f5"
        }, {
          "lightness": 20
        }]
      }, {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#ffffff"
        }, {
          "lightness": 17
        }]
      }, {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{
          "color": "#ffffff"
        }, {
          "lightness": 29
        }, {
          "weight": .2
        }]
      }, {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [{
          "color": "#ffffff"
        }, {
          "lightness": 18
        }]
      }, {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [{
          "color": "#ffffff"
        }, {
          "lightness": 16
        }]
      }, {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{
          "color": "#f5f5f5"
        }, {
          "lightness": 21
        }]
      }, {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [{
          "color": "#dedede"
        }, {
          "lightness": 21
        }]
      }, {
        "elementType": "labels.text.stroke",
        "stylers": [{
          "visibility": "on"
        }, {
          "color": "#ffffff"
        }, {
          "lightness": 16
        }]
      }, {
        "elementType": "labels.text.fill",
        "stylers": [{
          "saturation": 36
        }, {
          "color": "#333333"
        }, {
          "lightness": 40
        }]
      }, {
        "elementType": "labels.icon",
        "stylers": [{
          "visibility": "off"
        }]
      }, {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [{
          "color": "#f2f2f2"
        }, {
          "lightness": 19
        }]
      }, {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#fefefe"
        }, {
          "lightness": 20
        }]
      }, {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [{
          "color": "#fefefe"
        }, {
          "lightness": 17
        }, {
          "weight": 1.2
        }]
      }]
    };
    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('google-map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(25.1485, 55.2373),
      map: map,
      title: 'Cryptox'
    });
  }
  if ($('#google-map').length != 0) {
    google.maps.event.addDomListener(window, 'load', contactMap);
  }


})(jQuery);