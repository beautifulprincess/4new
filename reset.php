<?php
session_start();
include("lib/functions.php");
include("lib/db.php");

$baseurl = "{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}/";
if ($_SERVER["SERVER_NAME"] == "localhost") $baseurl .= "4new/";

$hash = isset($_REQUEST["hash"]) ? trim($_REQUEST["hash"]) : "";
if (!$hash) {
  header("Location: signin");
  die();
}

$account = getOne("select * from accounts where `verifyHash`='$hash'");

if (!$account)
  die("Don't recognized the verification code! Please check again your mailbox.");

if (isset($_REQUEST["action"]) && $_REQUEST["action"] == "reset") {
  sql("update `accounts` set `password`='{$_REQUEST['password']}', `verifyHash`='' where `verifyHash`='$hash'");
  die(json_encode(array("res" => 200, "msg" => "Success")));
}
$d = "../";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="" />
  <meta name="keyword" content="" />
  <title>4NEW</title>
  <link rel="shortcut icon" href="<?=$d?>assets/images/favicon.png" />
  <link rel="stylesheet" href="<?=$d?>assets/bootstrap.min.css">
  <link rel="stylesheet" href="<?=$d?>assets/fontawesome-all.css">
  <link rel="stylesheet" href="<?=$d?>assets/style.css">
  <link rel="stylesheet" href="<?=$d?>assets/sign.css">
</head>
<body>
  <section>
    <div class="container sign-form-container">
      <div class="row">
        <div class="col col-sm-12">
          <img class="sign-logo" src="<?=$d?>assets/images/home-logo.png">
          <div id="signin-logo-txt">4NEW</div>
          <form id="frm-reset" method="post">
            <input type="hidden" name="action" value="reset">
            <input type="hidden" name="hash" value="<?=$hash?>">
            <p class="signfrm-title">Reset your password</p>
            <input type="password" name="password" id="password" placeholder="New password" />
            <input type="password" id="cnf-password" placeholder="Confirm password" />
            <!-- <div class="g-recaptcha" data-sitekey="6Le9j1cUAAAAAIohkeM5WjH4SwEhjs5csrHxI8sq"></div> -->
            <div class="frm-message"></div>
            <button type="button" class="btn-submit">Reset Password</button>
            <p class="sign-link"><a href="signin">Sign in</a> | <a href="signup">Sign up</a></p>
          </form>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col col-sm-12 disclaimer">
          <h6>Disclaimer</h6>
          <p>Nothing contained in the Site constitutes investment, legal or tax advice. Neither the information nor any opinion contained in the Site constitutes a solicitation or an offer to buy or sell any securities, futures, options or other financial instruments. Decisions based on information contained on this site are the sole responsibility of the visitor. The materials in the Site are provided “AS IS” and without warranties of any kind (either express or implied). To the fullest extent permissible pursuant to applicable law, any and all warranties, express or implied, including, but not limited to, implied warranties of merchantability and fitness for a particular purpose, are disclaimed.</p>
        </div>
      </div>
    </div>
  </section>

  <?php include("footer.php"); ?>

  <script src="<?=$d?>assets/jquery.min.js"></script>
  <script src="<?=$d?>assets/jquery.form.min.js"></script>
  <script src="<?=$d?>assets/jquery.countrySelector.js"></script>
	<script src="<?=$d?>assets/sign.js"></script>
  <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
</body>
</html>