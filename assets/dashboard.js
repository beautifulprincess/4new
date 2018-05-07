$(document).ready(function() {
  $('.menu-dashboard').click(function() {
    var id = $(this).attr('id');
    var page = id.substring(id.lastIndexOf('-') + 1, id.length);
    document.location.href = d + 'dashboard/' + page;
  });
  $(".copy-clipboard").click(function() {
    var textid = $(this).attr("for");
    var copyText = document.getElementById(textid);
		copyText.select();
		document.execCommand("Copy");
  });
});