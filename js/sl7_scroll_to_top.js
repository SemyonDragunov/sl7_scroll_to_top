(function ($, Drupal, window, document, undefined) {

  $(document).ready(function() {

    $("#scroll-to-top").click(function() {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    }).fadeOut();

    $(window).scroll(function() {
      if ($(window).scrollTop() > 100)
        $("#scroll-to-top").fadeIn();
      else
        $("#scroll-to-top").fadeOut();
    });

  });

})(jQuery, Drupal, this, this.document);