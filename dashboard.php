<?php
session_start();
$d = "../";
$page  = isset($_REQUEST['page']) && $_REQUEST['page'] ? $_REQUEST['page'] : "index";
$option  = isset($_REQUEST['option']) && $_REQUEST['option'] ? $_REQUEST['option'] : "";
if ($option) $d .= "../";
if (!$_SESSION["accountid"]) header("Location:{$d}signin");

include("lib/functions.php");
include("lib/db.php");

$account = getOne("select * from `accounts` where `id`=" . $_SESSION["accountid"]);

$baseurl = "{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}/";
if ($_SERVER["SERVER_NAME"] == "localhost") $baseurl .= "4new/";
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
  <link rel="shortcut icon" href="<?php echo $d; ?>assets/images/favicon.png" />
  <link rel="stylesheet" href="<?php echo $d; ?>assets/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $d; ?>assets/fontawesome-all.css">
  <link rel="stylesheet" href="<?php echo $d; ?>assets/style.css">
  <link rel="stylesheet" href="<?php echo $d; ?>assets/dashboard.css">
  <script>var d = '<?=$d?>';</script>
</head>
<body class="nav-hide-title">
  <header>
    <img id="header-logo" src="<?php echo $d; ?>assets/images/4new-logo-white.png" />
    <div class="header-notice">
      ANNOUNCEMENTS:<br>Token Sale Begins December 7th 10AM EST (NYC Time)
    </div>
    <div class="header-user-signout"><a href="<?php echo $d; ?>signout">Sign out</a></div>
    <div class="header-user-email"><?=$account["email"]?></div>
  </header>

  <section>
    <nav>
      <ul>
        <li class="menu-dashboard<?php echo $page == "index" ? " menu-selected" : ""; ?>" id="menu-dashboard-index">Dashboard</li>
        <li class="menu-dashboard<?php echo $page == "social" ? " menu-selected" : ""; ?>" id="menu-dashboard-social">Social Rewards</li>
      </ul>
    </nav>
    <div class="main-container">
      <?php include("dashboard/$page.php"); ?>
    </div>
  </section>

  <?php include("footer.php"); ?>

  <!-- Vendor scripts -->
  <script src="<?php echo $d; ?>assets/jquery.min.js"></script>
  <script src="<?php echo $d; ?>assets/jquery.form.min.js"></script>
  <script src="<?php echo $d; ?>assets/dashboard.js"></script>
</body>
</html>