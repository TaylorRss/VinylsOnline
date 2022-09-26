$(function () {
  $(document).scroll(function () {
    var $nav = $("nav");
    var $header = $("header");
    $nav.toggleClass('navbar-alt', $(this).scrollTop() > $header.height());
  });
});