<?php
$d = "";
if ($section == "reset") $d = "../";
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

  <!-- Page title -->
  <title>4NEW</title>
  <link rel="shortcut icon" href="<?php echo $d; ?>assets/images/favicon.png" />

  <!-- App styles -->
  <link rel="stylesheet" href="<?php echo $d; ?>assets/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $d; ?>assets/fontawesome-all.css">
  <link rel="stylesheet" href="<?php echo $d; ?>assets/style.css">
  <link rel="stylesheet" href="<?php echo $d; ?>assets/index.css">
</head>
<body class="nav-hide-title">
  <header class="onTop">
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="header-logo"><a class="navbar-brand" href="#"><img src="<?php echo $d; ?>assets/images/4new-logo.png" alt="4NEW - logo mark"></a></div>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#whitepaper">WHITEPAPER</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#problematic">OVERVIEW</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#faq">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#members">TEAM</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#advisory">ADVISORY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#partners">PARTNERS</a>
        </li> -->
      </ul>
      </div>
    </nav>
  </header>

  <section id="home">
    <!-- <div id="video-container">
      <video preload="auto" autoplay loop><source src="<?php echo $d; ?>assets/latest-drone.mp4" type="video/mp4"></video>
    </div>
    <div id="particles-js"></div> -->
    <div class="container">
      <a href="https://4new.io/" target="_blank"><img id="home-logo" src="<?=$d?>assets/images/home-logo.png"></a>
      <div id="home-logo-txt"><a href="https://4new.io/" target="_blank">4NEW</a></div>
      <div id="home-title">Introducing The <span class="highlight">KWATT Coin</span><br>Tokenized <span class="highlight">Electricity</span></div>
      <div id="home-subtitle">Decentraiazed solutions</div>
      <div class="row">
        <div class="col col-sm-12 col-md-6">
          <video controls id="index-video1" poster="data:image/gif,AAAA">
            <source src="<?=$d?>assets/latest-drone.mp4" type="video/mp4">
          </video>
        </div>
        <div class="col col-sm-12 col-md-6">
          <video controls id="index-video2" poster="data:image/gif,AAAA">
            <source src="<?=$d?>assets/video2.mp4" type="video/mp4">
          </video>
        </div>
      </div>
      <div class="row">
        <div class="col col-sm-12">
          <div id="countdown">
            <span class="countdown-item">
              <span class="countdown-value" id="countdown-days">0</span>
              <span class="countdown-label">Days</span>
            </span>
            <span class="countdown-item">
              <span class="countdown-value" id="countdown-hours">0</span>
              <span class="countdown-label">Hours</span>
            </span>
            <span class="countdown-item">
              <span class="countdown-value" id="countdown-minutes">0</span>
              <span class="countdown-label">Minutes</span>
            </span>
            <span class="countdown-item">
              <span class="countdown-value" id="countdown-seconds">0</span>
              <span class="countdown-label">Seconds</span>
            </span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col col-sm-12" id="raised-col">
          <div class="raised-title">
            Over $42.1 million raised
          </div>
          <div class="raised-bar-back"><div class="raised-bar-progress"></div></div>
          <div class="raised-bar-values">
            <div class="raised-bar-value raised-var-value-start">0 M</div>
            <div class="raised-bar-value raised-var-value-progress">42.1 M</div>
            <div class="raised-bar-value raised-var-value-end">75 M</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="section-buttons">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6"><button class="btn-whitepaper">Whitepaper</button></div>
        <div class="col-sm-12 col-md-6"><button class="btn-onepager">One Pager</button></div>
      </div>
    </div>
  </section>
  <section id="section-calculator">
    <div id="section-calculator-background"></div>
    <div class="container">
      <div class="calculator-title">Valuation Estimator</div>
      <div class="row">
        <div class="col col-sm-12 col-md-6">
          <div id="calc-invest">
            <div class="calc-invest-title">Invest <span class="highlight calc-val-invest">50,000</span></div>
            <div class="calc-slidecontainer">
              <input id="calc-range-val" type="range" min=0 max=200 value=120>
            </div>
            <div class="calc-invest-vals-title">Projected Annual Token Valuation:</div>
            <table>
              <tr><td>Year 1</td><td class="calc-val-year1">$240,000</td></tr>
              <tr><td>Year 2</td><td class="calc-val-year2">$420,000</td></tr>
              <tr><td>Year 3</td><td class="calc-val-year3">$910,000</td></tr>
              <tr><td>Year 4</td><td class="calc-val-year4">$1247,000</td></tr>
              <tr><td>Year 5</td><td class="calc-val-year5">$3547,000</td></tr>
            </table>
            <hr>
            <p>Projected Annual Token Valuation based on increase in output capacity of the power plants, while maintaining fixed token supply</p>
            <div class="calc-box-content">Past performance should not be taken as an indication or guarantee of future performance and no representation or warranty, express or implied, is made regarding future performance. Opinions and/or estimates reflect an opinion at the original date of publication by us and are subject to change without notice. The price of, value of and income can fall as well as rise.</div>
            <div class="calc-click-here"><a href="#">Click Here</a> to view the underlying calculation details, assumptions and disclosures.</div>
          </div>
        </div>
        <div class="col col-sm-12 col-md-6">
          <div id="calc-graph">
            <div class="calc-graph-title">Projected Annual Token Valuation:</div>
            <div id="calc-graph-box">
              <div class="calc-graph-item" id="calc-graph-year1"></div>
              <div class="calc-graph-item" id="calc-graph-year2"></div>
              <div class="calc-graph-item" id="calc-graph-year3"></div>
              <div class="calc-graph-item" id="calc-graph-year4"></div>
              <div class="calc-graph-item" id="calc-graph-year5"></div>
              <div class="calc-graph-val calc-val-year1">$240,000</div>
              <div class="calc-graph-val calc-val-year2">$420,000</div>
              <div class="calc-graph-val calc-val-year3">$910,000</div>
              <div class="calc-graph-val calc-val-year4">$1247,000</div>
              <div class="calc-graph-val calc-val-year5">$3547,000</div>
            </div>
            <div id="calc-graph-labels">
              <div class="calc-graph-label">Year 1</div>
              <div class="calc-graph-label">Year 2</div>
              <div class="calc-graph-label">Year 3</div>
              <div class="calc-graph-label">Year 4</div>
              <div class="calc-graph-label">Year 5</div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col col-sm-12">
          <a href="#" class="get-your-bonus">GET YOUR BONUS NOW!</a>
          <a href="<?=$baseurl?>signup" class="link-join-our-affleate">Join our Affiliate Program</a>
          <p class="link-after-text">And be a part of our journey</p>
        </div>
      </div>
    </div>
  </section>

  <?php include("footer.php"); ?>

  <div class="modal-container">
    <div class="modal-form">
      <div class="modal-content">
        <iframe src="https://www.youtube.com/embed/NAEOKyRm8so?enablejsapi=1&amp;wmode=opaque" width="100%" height="420" frameborder="0" allowfullscreen="allowfullscreen" id="player_1"></iframe>
      </div>
    </div>
  </div>

  <!-- Vendor scripts -->
  <script src="<?php echo $d; ?>assets/jquery.min.js"></script>
  <script src="<?php echo $d; ?>assets/jquery.form.min.js"></script>
  <!-- <script src="<?php echo $d; ?>assets/particles/particles.min.js"></script> -->
  <!-- <script src="<?php echo $d; ?>assets/particles/app.js"></script> -->
  <script src="<?php echo $d; ?>assets/index.js"></script>
</body>
</html>