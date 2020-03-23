$(document).foundation();

$(document).ready(function() {

  /*     On scroll add background to navbar and move it up     */

  function checkScroll() {
    var startY = 5; //The point where the navbar changes in px

    if ($(window).scrollTop() > startY) {
      $('.nav').addClass("nav--scrolled");
    } else {
      $('.nav').removeClass("nav--scrolled");
    }
  }

  $(window).on("scroll load resize", function () {
    if ($('.nav').length > 0) {
      checkScroll();
    }
  });

  $('#load-primary, #load-primary-2,  #load-secondary-2').on('click', function() {
    const el = $(this)
    el.addClass('button--loading')
    el.prop("disabled", true);

    setTimeout(function() {
      el.removeClass('button--loading')
      el.prop("disabled", false);
    }, 4000)
  })

  checkScroll();

})