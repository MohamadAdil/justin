

$(document).ready(function () {
  // Client slider initialization
  $('.owl-carousel.client-slider').owlCarousel({
    loop: true,
    margin: 74,
    nav: true,
    autoHeight: true,
    navText: [
      '<span class="custom-owl-prev"><i class="fa-solid fa-arrow-left-long"></i></span>',
      '<span class="custom-owl-next"><i class="fa-solid fa-arrow-right-long"></i></span>'
    ],
    responsive: {
      0: {
        items: 1,
        margin: 20
      },
      600: {
        items: 1
      },
      800: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });
  // Marque
  $(document).ready(function () {
    nodeMarquee({
      parent: '.item-marquee-left',
      speed: 1
    });
    nodeMarquee({
      parent: '.item-marquee-right',
      speed: -1
    });
    nodeMarquee({
      parent: '.item-marquee-left2',
      speed: 1
    });
    nodeMarquee({
      parent: '.item-marquee-left3',
      speed: 1
    });
    nodeMarquee({
      parent: '.item-marquee-right3',
      speed: -1
    });
  });

  // Video player initialization
  var videos = document.querySelectorAll('.video-player');

  videos.forEach(function (video) {
    var playButton = video.parentElement.querySelector('.play-button');

    playButton.addEventListener('click', function () {
      if (video.paused) {
        video.play();
        playButton.classList.add('hidden');
      } else {
        video.pause();
        playButton.classList.remove('hidden');
      }
    });

    video.addEventListener('click', function () {
      if (video.paused) {
        video.play();
        playButton.classList.add('hidden');
      } else {
        video.pause();
        playButton.classList.remove('hidden');
      }
    });

    video.addEventListener('play', function () {
      playButton.classList.add('hidden');
    });

    video.addEventListener('pause', function () {
      playButton.classList.remove('hidden');
    });
  });
});

$(document).ready(function () {
  var ww = $(window).width();

  function adjustMenu() {
      if (ww < 768) {
          // Mobile view
          $(".toggleMenu").css("display", "inline-block");
          if (!$(".toggleMenu").hasClass("active")) {
              $(".nav").hide();
          } else {
              $(".nav").show();
          }
          $(".nav li").unbind('mouseenter mouseleave');
          $(".nav li a.parent").unbind('click').bind('click', function (e) {
              e.preventDefault();
              $(this).parent("li").toggleClass("hover");
          });
      } else if (ww >= 768) {
          // Desktop view
          $(".toggleMenu").css("display", "none");
          $(".nav").show();
          $(".nav li").removeClass("hover");
          $(".nav li a").unbind('click');
          $(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function () {
              $(this).toggleClass('hover');
          });
      }
  }

  // Initial adjustment
  adjustMenu();

  // Update on resize or orientation change
  $(window).on('resize orientationchange', function () {
      ww = $(window).width();
      adjustMenu();
  });

  // Toggle menu on button click
  $(".toggleMenu").click(function (e) {
      e.preventDefault();
      $(this).toggleClass("active");
      $(".nav").toggle();
  });

  // Add 'parent' class to links that have submenus
  $(".nav li a").each(function () {
      if ($(this).next().length > 0) {
          $(this).addClass("parent");
      }
  });

  // Handle menu item clicks for mobile view
  $(document).on('click', '.menu-item-has-children > a', function (e) {
      var $this = $(this);
      if ($(window).width() < 768) {
          e.preventDefault(); // Prevent default action for mobile view
          var $parent = $this.parent();
          
          if ($parent.hasClass('show-submenu')) {
              // If the submenu is already shown, allow navigation
              window.location.href = $this.attr('href');
          } else {
              // Otherwise, just toggle the submenu
              $parent.toggleClass('show-submenu');
          }
      }
  });
});