<?php
session_start();
include("lib/functions.php");
include("lib/db.php");
if (isset($_REQUEST["action"]) && $_REQUEST["action"] == "signin") {
  $accounts = getAll("select * from accounts where `email`='{$_REQUEST["email"]}'");
  if (count($accounts) == 0)
    die(json_encode(array("res" => 300, "msg" => "Email is not exist or incorrect password.")));
  else if ($accounts[0]["password"] != $_REQUEST["password"])
    die(json_encode(array("res" => 301, "msg" => "Email is not exist or incorrect password.")));
  $_SESSION["accountid"] = $accounts[0]["id"];
  die(json_encode(array("res" => 200, msg => "Success")));
}
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
  <link rel="shortcut icon" href="assets/images/favicon.png" />
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome-all.css">
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="assets/sign.css">
</head>
<body>
  <section>
    <div class="container sign-form-container">
      <div class="row">
        <div class="col col-sm-12">
          <img class="sign-logo" src="assets/images/home-logo.png">
          <div id="signin-logo-txt">4NEW</div>
          <form id="frm-signin" method="post">
            <input type="hidden" name="action" value="signin">
            <p class="signfrm-title">Log in your account</p>
            <input type="email" name="email" id="email" placeholder="Email Address" />
            <input type="password" name="password" id="password" placeholder="Password" />
            <p class="forgot-link"><a href="#">Forgot your password?</a></p>
            <!-- <div class="g-recaptcha" data-sitekey="6Le9j1cUAAAAAIohkeM5WjH4SwEhjs5csrHxI8sq"></div> -->
            <div class="frm-message"></div>
            <button type="button" class="btn-submit">LOG IN</button>
            <p>Don't you have an account?</p>
            <p class="sign-link"><a href="signup">Sign up</a></p>
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

  <script src="assets/jquery.min.js"></script>
  <script src="assets/jquery.form.min.js"></script>
  <script src="assets/jquery.countrySelector.js"></script>
	<script src="assets/sign.js"></script>
  <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
</body>
</html>