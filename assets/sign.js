$(document).ready(function() {
  var re = /^(([^<>()\[\]\\.,;:\s@']+(\.[^<>()\[\]\\.,;:\s@']+)*)|('.+'))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var allLetters = /^[a-zA-Z]+$/;
  var letter = /[a-zA-Z]/;
  var number = /[0-9]/;

  $('#country').countrySelector({ value: -1, codeMode: 'numeric' });

  function hideMessage() {
    $('.frm-message').text('');
    $('.frm-message').removeClass('message-error');
    $('.frm-message').removeClass('message-warning');
    $('.frm-message').removeClass('message-success');
  }

  function showMessage(msgType, msgText) {
    hideMessage();
    $('.frm-message').addClass('message-' + msgType);
    $('.frm-message').text(msgText);
  }

  $('#frm-signup .btn-submit').click(function() {
    if ($('#firstname').val().trim() == '') {
      $('#firstname').select();
      showMessage('error', 'Enter First Name');
      return;
    }
    if ($('#lastname').val().trim() == '') {
      $('#lastname').select();
      showMessage('error', 'Enter Last Name');
      return;
    }
    if ($('#email').val().trim() == '') {
      $('#email').select();
      showMessage('error', 'Enter Email Address');
      return;
    }
    if (!re.test($('#email').val().toLowerCase()))
    {
      $('#email').select();
      showMessage('error', 'Invalid email');
      return;
    }
    if ($('#password').val() == '') {
      $('#password').select();
      showMessage('error', 'Enter Pasword');
      return;
    }
    if ($('#password').val().length < 6) {
      $('#password').focus();
      showMessage('error', 'Password must be 6 characters minimum!');
      return;
    }
    if (!letter.test($('#password').val()) || !number.test($('#password').val())) {
      $('#password').focus();
      showMessage('error', 'Password must include a letter and number!');
      return;
    }
    if ($('#cnf-password').val() == '') {
      $('#cnf-password').select();
      showMessage('error', 'Enter Confirm Password');
      return;
    }
    if ($('#password').val() != $('#cnf-password').val()) {
      $('#password').select();
      showMessage('error', 'Dismatch passwords');
      return;
    }
    if ($('#country').val() == undefined || $('#country').val() == null || $('#country').val() == '' || $('#country').val() == '-1') {
      $('#country').focus();
      showMessage('error', 'Select Country');
      return;
    }
    if (!document.getElementById('agree').checked) {
      $('#agree').focus();
      showMessage('error', 'Check Terms');
      return;
    }
    if (grecaptcha.getResponse() == "") {
      showMessage('error', 'Confirm not a robot');
      return;
    }
    $('#frm-signup').attr('action', 'signup');
    hideMessage();
    $('#loading-container').show();
    $('#frm-signup').ajaxSubmit({
      error: function(xhr) {
        $('#loading-container').hide();
		    console.log('Error: ' + xhr.status);
      },
      success: function(response) {
        var resp = JSON.parse(response);
        $('#loading-container').hide();
        if (resp.res == 200) {
          showMessage('success', resp.msg);
        } else {
          showMessage('error', resp.msg);
        }
      }
	  });
  });

  $('#password').keydown(function(event) {
    if (event.keyCode == 13)
      $('#frm-signin .btn-submit').click();
  });
  $('#frm-signin .btn-submit').click(function() {
    if ($('#email').val().trim() == '') {
      $('#email').select();
      showMessage('error', 'Enter Email Address');
      return;
    }
    if ($('#password').val() == '') {
      $('#password').select();
      showMessage('error', 'Enter Pasword');
      return;
    }
    // if (grecaptcha.getResponse() == "") {
    //   showMessage('error', 'Confirm not a robot');
    //   return;
    // }
    $('#frm-signin').attr('action', 'signin');
    hideMessage();
    $('#loading-container').show();
    $('#frm-signin').ajaxSubmit({
      error: function(xhr) {
        $('#loading-container').hide();
		    console.log('Error: ' + xhr.status);
      },
      success: function(response) {
        var resp = JSON.parse(response);
        $('#loading-container').hide();
        if (resp.res == 200) {
          showMessage('success', resp.msg);
          document.location.href = "socialreward";
        } else {
          showMessage('error', resp.msg);
        }
      }
	  });
  });

  $('#frm-forgot .btn-submit').click(function() {
    if ($('#email').val().trim() == '') {
      $('#email').select();
      showMessage('error', 'Enter Email Address');
      return;
    }
    // if (grecaptcha.getResponse() == "") {
    //   showMessage('error', 'Confirm not a robot');
    //   return;
    // }
    $('#frm-forgot').attr('action', 'forgot');
    hideMessage();
    $('#loading-container').show();
    $('#frm-forgot').ajaxSubmit({
      error: function(xhr) {
        $('#loading-container').hide();
		    console.log('Error: ' + xhr.status);
      },
      success: function(response) {
        var resp = JSON.parse(response);
        $('#loading-container').hide();
        if (resp.res == 200) {
          // showMessage('success', resp.msg);
        } else {
          showMessage('error', resp.msg);
        }
      }
	  });
  });

  $('#frm-reset .btn-submit').click(function() {
    if ($('#password').val() == '') {
      $('#password').select();
      showMessage('error', 'Enter Pasword');
      return;
    }
    if ($('#password').val().length < 6) {
      $('#password').focus();
      showMessage('error', 'Password must be 6 characters minimum!');
      return;
    }
    if (!letter.test($('#password').val()) || !number.test($('#password').val())) {
      $('#password').focus();
      showMessage('error', 'Password must include a letter and number!');
      return;
    }
    if ($('#cnf-password').val() == '') {
      $('#cnf-password').select();
      showMessage('error', 'Enter Confirm Password');
      return;
    }
    if ($('#password').val() != $('#cnf-password').val()) {
      $('#password').select();
      showMessage('error', 'Dismatch passwords');
      return;
    }
    // if (grecaptcha.getResponse() == "") {
    //   showMessage('error', 'Confirm not a robot');
    //   return;
    // }
    $('#frm-reset').attr('action', 'reset');
    hideMessage();
    $('#loading-container').show();
    $('#frm-reset').ajaxSubmit({
      error: function(xhr) {
        $('#loading-container').hide();
		    console.log('Error: ' + xhr.status);
      },
      success: function(response) {
        $('#loading-container').hide();
        var resp = JSON.parse(response);
        if (resp.res == 200) {
          document.location.href = "../signin";
        } else {
          showMessage('error', resp.msg);
        }
      }
	  });
  });
});