$(document).ready(function() {
  $(".nav-item").each(function(index, el) {
    var url = $(this).find("a").attr('href');
    url = window.location.href.split(url);
    if( url.length == 2 && url[1] == "")
      $(this).addClass('active');
  });
});
