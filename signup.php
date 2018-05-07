<?php
include("lib/functions.php");
include("lib/db.php");
if (isset($_REQUEST["action"]) && $_REQUEST["action"] == "signup") {
  $accounts = getAll("select * from accounts where `email`='{$_REQUEST["email"]}'");
  if (count($accounts))
    die(json_encode(array("res" => 302, "msg" => "Email is already registered")));
  do {
    $referralCode = strtoupper(substr(md5($_REQUEST["email"] . time()), 0, 5));
    $accounts = getAll("select * from accounts where `referralCode`='$referralCode'");
    if (count($accounts) == 0) break;
  } while (true);
  sql("INSERT INTO `accounts` (`email`, `firstname`, `lastname`, `password`, `country`, `referralCode`, `level`) VALUES ('{$_REQUEST["email"]}', '{$_REQUEST["firstname"]}', '{$_REQUEST["lastname"]}', '{$_REQUEST["password"]}', '{$_REQUEST["country"]}', '$referralCode', 1);");
  die(json_encode(array("res" => 200, msg => "Success")));
}
$referral = isset($_REQUEST["referral"]) ? $_REQUEST["referral"] : "";
$d = "";
if ($referral) $d = "../";
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
          <img src="<?=$d?>assets/images/4new-logo.png">
          <form id="frm-signup" method="post">
            <input type="hidden" name="action" value="signup">
            <input type="hidden" name="referral" value="<?=$referral?>">
            <p class="signfrm-title">Signup new account</p>
            <input type="text" name="firstname" id="firstname" placeholder="First Name" />
            <input type="text" name="lastname" id="lastname" placeholder="Last Name" />
            <input type="email" name="email" id="email" placeholder="Email Address" />
            <input type="password" name="password" id="password" placeholder="Password" />
            <input type="password" id="cnf-password" placeholder="Confirm Password" />
            <select name="country" id="country"></select>
            <label>
              <input type="checkbox" id="agree" />
              I certify that I am not a citizen or resident of the United States or any of its territories including Puerto Rico, Guam, Northern Mariana Islands, the U.S. Virgin Islands, and American Samoa. I understand that participation in this token sale by a citizen or resident of the United States or any of its aforementioned territories is not permitted by TokenPay.
            </label>
            <div class="g-recaptcha" data-sitekey="6Le9j1cUAAAAAIohkeM5WjH4SwEhjs5csrHxI8sq"></div>
            <div class="frm-message"></div>
            <button type="button" class="btn-submit">Signup new account</button>
            <p>Already have an account? <span class="sign-link"><a href="<?=$d?>signin">Sign in</a></span></p>
          </form>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col col-sm-12">
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
  <script src="https://www.google.com/recaptcha/api.js"></script>
</body>
</html>