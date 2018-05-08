<?php
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
$baseurl = "{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}/";
if ($_SERVER["SERVER_NAME"] == "localhost") $baseurl .= "4new/"
?>
<div class="container-fluid">
  <h1>SOCIAL REWARDS</h1>
  <div class="row margin-top-20">
    <div class="col-md-8 col-xs-12">
      <div class="refer">
        <h2>Refer a Friend</h2>
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
          <img src="<?=$d?>assets/images/icons/social-rewards-5_05.png" alt="">
          <h6>Coins Earned</h6>
          <span><?=$mycoins?></span>
        </div>
      </div>
    </div>
  </div>
  <div class="row margin-top-20">
    <div class="col-lg-4 col-md-6 col-xs-12">
      <div class="code" style="height: 207px;">
        <h3>JOIN COMMUNITY!</h3>
        <div class="socials">
          <a href="https://www.facebook.com/tokenpay" title="Facebook TokenPay" target="_blank"><img src="<?=$d?>assets/images/icons/social-rewards-2_03.png" alt=""></a>
          <a href="https://www.twitter.com/tokenpay" title="Twitter @TokenPay" target="_blank"><img src="<?=$d?>assets/images/icons/social-rewards-2_16.png" alt=""></a>
          <a href="https://t.me/joinchat/GgZih0NrYt2F11oXwQ11Cg" title="Telegram TokenPay" target="_blank"><img src="<?=$d?>assets/images/icons/social-rewards-2_07.png" alt=""></a>
          <a href="https://medium.com/tokenpay" target="_blank"><img src="<?=$d?>assets/images/icons/social-rewards-2_16-05.png" alt=""></a>
          <a href="https://www.instagram.com/tokenpay/" target="_blank"><img src="<?=$d?>assets/images/icons/social-rewards-2_13.png" alt=""></a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-xs-12">
      <div class="code" style="height: 207px;">
        <h4>YOUR REFERRAL CODE IS:</h4>
        <span><?=$account['referralCode']?></span>
        <h4 class="margin-top-20">Your referral link is:</h4>
        <div class="site">
          <div class="site-name"><input type="text" id="referral-code" value="<?=$signWithReferralUrl?>"></div>
          <button class="site-btn copy-clipboard" for="referral-code"><img src="<?=$d?>assets/images/icons/book_70.png" alt=""></button>
        </div>
      </div>
    </div>
    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-xs-12">
      <div class="code third" style="height: 207px;">
        <h3>Share Your Referral Code!</h3>
        <div class="socials">
          <a href="http://twitter.com/share?text=Register+for+The+TokenPay+Coin+Sale+-+TokenPay+is+Bitcoin+on+Steroids%21&amp;url=<?=$signWithReferralUrl?>" target="_blank"><img src="<?=$d?>assets/images/icons/social-rewards-3_16.png" alt=""></a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?=$signWithReferralUrl?>" target="_blank"><img src="<?=$d?>assets/images/icons/social-rewards-2_18.png" alt=""></a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?=$signWithReferralUrl?>" target="_blank"><img src="<?=$d?>assets/images/icons/social-rewards-3_20.png" alt=""></a>
          <a href="whatsapp://send?text=Register+for+The+TokenPay+Coin+Sale+-+TokenPay+is+Bitcoin+on+Steroids%21<?=urlencode($signWithReferralUrl)?>" target="_blank" data-action="share/whatsapp/share"><img src="<?=$d?>assets/images/icons/social-rewards-2_22.png" alt=""></a>
          <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?=$signWithReferralUrl?>&amp;title=Register+for+The+TokenPay+Coin+Sale+-+TokenPay+is+Bitcoin+on+Steroids%21" target="_blank"><img src="<?=$d?>assets/images/icons/social-rewards-2_24.png" alt=""></a>
        </div>
      </div>
    </div>
  </div>
  <div class="row margin-top-20">
    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
      <div class="data data-1" style="height: 631px;"> <img src="<?=$d?>assets/images/icons/social-rewards-4_03.png" alt="">
        <h2>EMAIL SOME PEOPLE</h2>
        <form method="POST" action="<?=$d?>sendreferral" accept-charset="UTF-8" id="referral-form">
          <div class="form-group">
            <label for="name">Your name:</label>
            <input placeholder="Your name" name="name" type="text" value="<?=$account["firstname"]?> <?=$account["lastname"]?>" id="name">
          </div>
          <div class="form-group">
            <input id="emails" placeholder="(Separate multiple emails with commas)" name="emails" type="text">
          </div>
          <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" cols="50" rows="10" id="message">I would like to share with you an amazing opportunity to get in ground floor on the hottest new crytpo asset called TPAY. It is the world’s most secure coin and has been called Bitcoin on Steroids. Register today and receive a 100% bonus on the official token sale on December 7th.</textarea>
          </div>
          <div class="download-btn">
            <button class="download" id="send-referrals-btn" type="button"><span class="fa fa-envelope"></span> <span class="send-referrals-btn-label">SEND INVITES</span></button>
          </div>
        </form>
      </div>
    </div>
    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
      <div class="data data-2" style="height: 631px;">
        <div class="blue downloadable-referral-image">
          <h2>TokenPay is the world’s most secure coin.<br>It’s Bitcoin on Steroids!</h2>
          <div class="ref-code">
            <span><?=$account['referralCode']?></span>
            <h6>My Referral Code</h6>
          </div>
          <h2>Join the TokenPay token sale with this code and receive up to 50% additional TokenPay coins.</h2>
          <h3>Visit TokenPay.com and click Join!</h3>
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
                  <textarea id="copy-embed-html" class="referral-image-html">&lt;a href="<?=$signWithReferralUrl?>"&gt;&lt;img src="<?=$baseurl?>referrals/<?=md5($account['email'])?>.png"
alt="TokenPay Signup Offer"/&gt;&lt;/a&gt;</textarea>
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
  <div class="first-table">
    <img src="<?=$d?>assets/images/icons/social-rewards-6_03.png" alt="">
    <div class="table-head">
      <h2>FRIENDS YOU’VE REFERRED </h2>
      <div class="number"> <span><?=$referralAccountsCnt?></span> </div>
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