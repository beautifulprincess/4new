$(document).ready(function() {
  $('.menu-dashboard').click(function() {
    var id = $(this).attr('id');
    var page = id.substring(id.lastIndexOf('-') + 1, id.length);
    document.location.href = d + 'dashboard/' + page;
  });
  $(".copy-referral").click(function() {
    var copyText = document.getElementById("referral-value");
		copyText.select();
		document.execCommand("Copy");
  });
});