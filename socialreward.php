<?php
session_start();
$d = "";
if (!$_SESSION["accountid"]) header("Location:{$d}signin");

include("lib/functions.php");
include("lib/db.php");

$account = getOne("select * from `accounts` where `id`=" . $_SESSION["accountid"]);

$baseurl = "{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}/";
if ($_SERVER["SERVER_NAME"] == "localhost") $baseurl .= "4new/";

if ($_SERVER["SERVER_NAME"] == "localhost") {
  $signWithReferralUrl = "{$_SERVER["REQUEST_SCHEME"]}://localhost/4new/signup/" . $account["referralCode"];
} else {
  $signWithReferralUrl = "{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}/signup/" . $account["referralCode"];
}

$referralAccounts = getAll("select * from `accounts` where referralFrom='{$account["referralCode"]}'");
$referralAccountsCnt = count($referralAccounts);
$mycoins = $referralAccountsCnt * 100;
if ($account["referralFrom"]) {
  $mycoins += 10;
}

if (!file_exists("./referrals/" . md5($account['email']) . ".png")) {
  $referralEmail = $account['email'];
  $referralCode = $account['referralCode'];
  include("./create_referral_png.php");
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
  <link rel="shortcut icon" href="<?php echo $d; ?>assets/images/favicon.png" />
  <link rel="stylesheet" href="<?php echo $d; ?>assets/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $d; ?>assets/fontawesome-all.css">
  <link rel="stylesheet" href="<?php echo $d; ?>assets/style.css">
  <link rel="stylesheet" href="<?php echo $d; ?>assets/socialreward.css">
  <script>var d = '<?=$d?>';</script>
</head>
<body class="nav-hide-title">
  <header>
    <div class="container">
      <img id="header-logo" src="<?php echo $d; ?>assets/images/home-logo.png" />
      <div id="logo-text">4NEW</div>
      <a href="dashboard" class="header-menu menu-dashboard">Dashboard</a>
      <a href="special" class="header-menu menu-special">Special Rewards</a>
      <div class="coins-status">
        <div class="coins-st-item coin-st-kwatt">
          <div class="coins-st-name">KWATT Token price</div>
          <div class="coins-st-value">$2.47 USD</div>
        </div>
        <div class="coins-st-item coin-st-24h">
          <div class="coins-st-name">24 hr change</div>
          <div class="coins-st-value"><i class="fa fa-caret-up"></i><i class="fa fa-caret-down"></i>+3.47%</div>
        </div>
        <div class="coins-st-item coin-st-btc">
          <div class="coins-st-name">1 BTC price</div>
          <div class="coins-st-value">$9,389 USD</div>
        </div>
      </div>
      <a href="<?php echo $d; ?>signout" class="header-user-signout">Sign out</a>
      <div class="header-user-email"><?=$account["email"]?></div>
      <div id="navmenu">
        <div id="navmenu-btn"><div id="navmenu-btn-bar"></div></div>
        <div id="navmenu-list">
          <div class="navmenu-item"><a href="dashboard">Dashboard</a></div>
          <div class="navmenu-item"><a href="special">Special Rewards</a></div>
          <div class="navmenu-item"><a href="<?php echo $d; ?>signout">Sign out</a></div>
        </div>
      </div>
    </div>
  </header>

  <section>
    <div class="container">
      <h1>SOCIAL REWARDS</h1>
      <h3>ANNOUNCEMENTS <em>Token Sale Begins December 7th 10AM EST (NYC Time)</em></h3>
      <hr>
      <div class="row margin-top-20">
        <div class="col-md-8 col-xs-12">
          <div class="refer">
            <h4>Refer a Friend</h4>
            <p>Get a unique referral link and share it with your friends to earn free TPAY. When a friend uses your link, you will receive up to 100% bonus awarded in TPAY.</p>
          </div>
        </div>
        <div class="col-md-4 col-xs-12 text-center">
          <div class="information">
            <div class="stats">
              <img src="<?=$d?>assets/images/icons/social-rewards-5_03.png" alt="">
              <h6>No. of Referrals</h6>
              <span><?=$referralAccountsCnt?></span>
            </div>
            <div class="stats">
              <img src="<?=$d?>assets/images/kwatt.png" alt="">
              <h6>Coins Earned</h6>
              <span><?=$mycoins?></span>
            </div>
          </div>
        </div>
      </div>
      <div class="row margin-top-30">
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="code">
            <h3>JOIN COMMUNITY!</h3>
            <div class="socials">
              <a href="https://www.facebook.com/tokenpay" title="Facebook TokenPay" target="_blank"><img src="<?=$d?>assets/images/socials/facebook.png" alt=""></a>
              <a href="https://www.twitter.com/tokenpay" title="Twitter @TokenPay" target="_blank"><img src="<?=$d?>assets/images/socials/twitter.png" alt=""></a>
              <a href="https://t.me/joinchat/GgZih0NrYt2F11oXwQ11Cg" title="Telegram TokenPay" target="_blank"><img src="<?=$d?>assets/images/socials/telegram.png" alt=""></a>
              <a href="https://medium.com/tokenpay" target="_blank"><img src="<?=$d?>assets/images/socials/medium.png" alt=""></a>
              <!-- <a href="https://www.instagram.com/tokenpay/" target="_blank"><img src="<?=$d?>assets/images/icons/social-rewards-2_13.png" alt=""></a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="code">
            <h5>YOUR REFERRAL CODE IS:</h5>
            <span><?=$account['referralCode']?></span>
            <p class="margin-top-20">Your referral link is:</p>
            <div class="site">
              <div class="site-name"><input type="text" id="referral-code" value="<?=$signWithReferralUrl?>" readonly /></div>
              <button class="site-btn copy-clipboard" for="referral-code">Copy Link</button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-xs-12">
          <div class="code">
            <h3>Share Your Referral Code!</h3>
            <div class="socials">
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?=$signWithReferralUrl?>" target="_blank"><img src="<?=$d?>assets/images/socials/facebook.png" alt=""></a>
              <a href="http://twitter.com/share?text=Register+for+The+TokenPay+Coin+Sale+-+TokenPay+is+Bitcoin+on+Steroids%21&amp;url=<?=$signWithReferralUrl?>" target="_blank"><img src="<?=$d?>assets/images/socials/twitter.png" alt=""></a>
              <a href="whatsapp://send?text=Register+for+The+TokenPay+Coin+Sale+-+TokenPay+is+Bitcoin+on+Steroids%21<?=urlencode($signWithReferralUrl)?>" target="_blank" data-action="share/whatsapp/share"><img src="<?=$d?>assets/images/socials/whatsup.png" alt=""></a>
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?=$signWithReferralUrl?>" target="_blank"><img src="<?=$d?>assets/images/socials/messenger.png" alt=""></a>
              <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?=$signWithReferralUrl?>&amp;title=Register+for+The+TokenPay+Coin+Sale+-+TokenPay+is+Bitcoin+on+Steroids%21" target="_blank"><img src="<?=$d?>assets/images/socials/linkedin.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
      <hr class="margin-30">
      <div class="row margin-top-20">
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="data data-1">
            <img class="send-email-img" src="<?=$d?>assets/images/email.png" alt="">
            <h2>EMAIL SOME PEOPLE</h2>
            <form method="POST" action="<?=$d?>sendreferral" accept-charset="UTF-8" id="referral-form">
              <div class="form-group">
                <label for="name">Name</label>
                <input placeholder="Your name" name="name" type="text" value="<?=$account["firstname"]?> <?=$account["lastname"]?>" id="name">
              </div>
              <div class="form-group">
                <label for="emails">Email address</label>
                <input id="emails" placeholder="(Separate multiple emails with commas)" name="emails" type="text">
              </div>
              <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" cols="50" rows="10" id="message">I would like to share with you an amazing opportunity to get in ground floor on the hottest new crytpo asset called TPAY. It is the world’s most secure coin and has been called Bitcoin on Steroids. Register today and receive a 100% bonus on the official token sale on December 7th.</textarea>
              </div>
              <button class="sendinvite-btn" id="send-referrals-btn" type="button"><span class="send-referrals-btn-label">SEND INVITES</span></button>
            </form>
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
          <div class="data data-2">
            <div class="blue downloadable-referral-image">
              <h2>4new affiliate is bonus social rewards platform for buying KWATT token</h2>
              <div class="ref-code">
                <span><?=$account['referralCode']?></span>
                <h6>My Referral Code</h6>
              </div>
              <h2>Join the 4NEW token sale with this code and receive up to 50% additional 4NEW coins.</h2>
              <h3>Visit 4new.io and click Join!</h3>
              <span class="referral-4new">4NEW</span>
            </div>
            <div class="download-btn">
              <a class="download download-referral-image" href="<?=$baseurl?>referrals/<?=md5($account['email'])?>.png" download="<?=md5($account['email'])?>.png"><span class="fa fa-download"></span> Download image</a>
            </div>
            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="embed">
                  <h4>Image embed HTML:</h4>
                  <div class="site">
                    <div class="site-name">
                      <textarea id="copy-embed-html" class="referral-image-html">&lt;a href="<?=$signWithReferralUrl?>"&gt;&lt;img src="<?=$baseurl?>referrals/<?=md5($account['email'])?>.png" alt="TokenPay Signup Offer"/&gt;&lt;/a&gt;</textarea>
                      <button class="site-btn copy-clipboard" for="copy-embed-html"><img src="<?=$d?>assets/images/icons/book_70.png" alt=""></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xs-12">
                <div class="embed">
                  <h4>Image embed code:</h4>
                  <div class="site">
                    <div class="site-name">
                      <textarea id="copy-embed-code" class="referral-image-code">[url=<?=$signWithReferralUrl?>][img]<span class="referral-image-link"><?=$baseurl?>referrals/<?=md5($account['email'])?>.png</span>[/img][/url]</textarea>
                      <button class="site-btn copy-clipboard" for="copy-embed-code"><img src="<?=$d?>assets/images/icons/book_70.png" alt=""></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="margin-30">
      <div class="first-table">
        <img src="<?=$d?>assets/images/group.png" alt="">
        <div class="table-head">
          <h2>
            FRIENDS YOU’VE REFERRED 
            <div class="number"> <span><?=$referralAccountsCnt?></span> </div>
          </h2>
        </div>
        <table class="main-table">
          <tbody>
            <tr class="">
              <th style="width:40%">Name</th>
              <th style="width:40%">Date</th>
              <th style="width:20%">Coins Earned</th>
            </tr>
            <?php foreach ($referralAccounts as $referrer) { ?>
            <tr class="">
              <td><?=$referrer['firstname']?> <?=$referrer['lastname']?></td>
              <td><?=substr($referrer['createdAt'], 0, 10)?></td>
              <td>100</td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <hr class="margin-30">
      <div class="first-table">
        <h2>BONUS STRUCTURE</h2>
        <table class="main-table">
          <tbody>
            <tr class="">
              <th style="width:20%">Period</th>
              <th style="width:45%">Date</th>
              <th style="width:20%">Bonus Rate</th>
              <th style="width:15%">Referral Bonus</th>
            </tr>
            <tr>
              <td style="width:20%">Week 1</td>
              <td style="width:45%">December 7th to 14th</td>
              <td style="width:20%">100%</td>
              <td style="width:15%">100%</td>
            </tr>
            <tr>
              <td style="width:20%">Week 2</td>
              <td style="width:45%">December 15th to 21st</td>
              <td style="width:20%">50%</td>
              <td style="width:15%">50%</td>
            </tr>
            <tr>
              <td style="width:20%">Week 3</td>
              <td style="width:45%">December 21th to 27th</td>
              <td style="width:20%">50%</td>
              <td style="width:15%">50%</td>
            </tr>
            <tr>
              <td style="width:20%">Week 4</td>
              <td style="width:45%">December 28th to January 3rd</td>
              <td style="width:20%">50%</td>
              <td style="width:15%">50%</td>
            </tr>
            <tr>
              <td style="width:20%">Week 5</td>
              <td style="width:45%">January 4th to January 10th</td>
              <td style="width:20%">25%</td>
              <td style="width:15%">25%</td>
            </tr>
            <tr>
              <td style="width:20%">Week 6</td>
              <td style="width:45%">January 11th to January 17th</td>
              <td style="width:20%">10%</td>
              <td style="width:15%">20%</td>
            </tr>
          </tbody>
        </table>
        <h6>All times UTC</h6>
      </div>
    </div>
  </section>

  <?php include("footer.php"); ?>

  <!-- Vendor scripts -->
  <script src="<?php echo $d; ?>assets/jquery.min.js"></script>
  <script src="<?php echo $d; ?>assets/jquery.form.min.js"></script>
  <script src="<?php echo $d; ?>assets/socialreward.js"></script>
</body>
</html>