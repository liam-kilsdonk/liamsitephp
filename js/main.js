function parallax_height() {
  var scroll_top = $(this).scrollTop();
  var sample_section_top = $(".sample-section").offset().top;
  var header_height = $(".sample-header-section").outerHeight();
  $(".sample-section").css({ "margin-top": header_height });
  $(".sample-header").css({ height: header_height - scroll_top });
}

parallax_height();

$(window).scroll(function () {
  parallax_height();
});

$(window).resize(function () {
  parallax_height();
});

$(function () {
  $(document).scroll(function () {
    var $nav = $(".nav-bar");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});

const naam = "liam"
const achternaam = "kilsdonk"

full_name = `Deze website is gemaakt door: ${naam} ${achternaam}`

console.log(full_name)
