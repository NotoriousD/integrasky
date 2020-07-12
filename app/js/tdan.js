$(".situation__link").click(function (e) {
  e.preventDefault();
  $(this)
    .parent()
    .toggleClass("active")
    .siblings(".situation")
    .removeClass("active");
});

$(".rblock__block").click(function () {
  $(this).toggleClass("active");
});

$(".rblock__item").click(function (e) {
  e.preventDefault();
  $(this).toggleClass("active").siblings(".rblock__item").removeClass("active");
});
