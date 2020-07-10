// smooth scroll back up
function onTop() {
  $("#upBtn").on("click", function () {
    $("html, body").animate({
      scrollTop: 0
    }, 8000);
  });

}
// animations
AOS.init({
  easing: "ease",
  duration: 1200,
  once: true
});
