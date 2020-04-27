$(document).foundation();

$(document).ready(function() {

  /*     On scroll add background to navbar and move it up     */

  function checkScroll() {
    var startY = 5; //The point where the navbar changes in px

    if ($('.staff__brief__text, .staff--wrapper').scrollTop() > startY) {
      $('.staff__brief__header').addClass("staff__brief__header--scrolled");
    } else {
      $('.staff__brief__header').removeClass("staff__brief__header--scrolled");
    }
  }

  $('.staff__brief__text').on("scroll load resize", function () {
    if ($('.staff__brief__header').length > 0) {
      checkScroll();
    }
  });

  $('.staff--wrapper').on("scroll load resize", function () {
    if ($('.staff__brief__header').length > 0) {
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