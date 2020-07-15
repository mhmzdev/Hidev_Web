$(document).ready(function () {

  $("#up").on("click", function () {
    $("html, body").animate({
      scrollTop: 0
    }, 700);
  });
});


$('textarea').each(function () {
  this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
}).on('input', function () {
  this.style.height = 'auto';
  this.style.height = (this.scrollHeight) + 'px';
});


$('.navbar-nav .nav-link').click(function(){
  $('.navbar-nav .nav-link').removeClass('active');
  $(this).addClass('active');
})