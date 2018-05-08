$(document).ready(function() {
  $('#navmenu-btn').click(function() {
    $('#navmenu').toggleClass('opened');
  });
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

    $('#loading-container').show();
    $('#referral-form').ajaxSubmit({
      error: function(xhr) {
        $('#loading-container').hide();
		    console.log('Error: ' + xhr.status);
      },
      success: function(response) {
        $('#emails').val("");
        $(".send-referrals-btn-label").text("SENT");
        $('#loading-container').hide();
        setTimeout(function() {
          $(".send-referrals-btn-label").text("SEND INVITES");
        }, 1000);
      }
	  });
  });
});