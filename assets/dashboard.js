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
  $('#send-referrals-btn').click(function() {
    var name = $('#name').val();
    if (name.trim() == "") {
      $('#name').select();
      return;
    }
    var emails = $('#emails').val();
    if (emails.trim() == "") {
      $('#emails').select();
      return;
    }
    var message = $('#message').val();
    if (message.trim() == "") {
      $('#message').select();
      return;
    }

    $('#referral-form').ajaxSubmit({
      error: function(xhr) {
		    console.log('Error: ' + xhr.status);
      },
      success: function(response) {
        console.log(response);
      }
	  });
  });
});