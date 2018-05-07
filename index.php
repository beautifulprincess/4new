<?php
$section = isset($_REQUEST['section']) ? $_REQUEST['section'] : "dashboard-account";
$token = isset($_REQUEST['token']) ? $_REQUEST['token'] : "";
$d = "";
if ($section == "reset") $d = "../";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="MC is a peer-to-peer crypto lending platform based on SmartMoney." />
  <meta name="keyword" content="wallet, wallets, bitcoin, bitcoins, coin, crypto, currency, cryptocurrency, ethereum, altcoin, exchange, exchanges, markets, market, transaction, payments, payment, paypal, passphrase, blockchain, account, withdrawal, deposit, cash, funds, paper wallet" />

  <!-- Page title -->
  <title>MC</title>

    <script>var initialSection = "<?php echo $section; ?>";</script>
    <script>var resetToken = "<?php echo $token; ?>";</script>

  <!-- App styles -->
  <link rel="stylesheet" href="<?php echo $d; ?>assets/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $d; ?>assets/fontawesome-all.css">
  <link rel="stylesheet" href="<?php echo $d; ?>assets/jquery.mcgraph.min.css">
  <link rel="stylesheet" href="<?php echo $d; ?>assets/style.css">
  <link rel="shortcut icon" href="<?php echo $d; ?>assets/images/favicon.png" />
</head>
<body class="nav-hide-title">
  <header>
    <img id="header-logo" src="<?php echo $d; ?>assets/images/header-logo.png" />
    <div class="navbar-toggle">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </div>
    <div class="deposit-btn">+ ADD DEPOSIT</div>
    <div class="timer"></div>
  </header>
  
  <nav class="navbar">
    <ul class="navbar-menus">
      <li class="navbar-menu menu-user" id="menu-profile">
        <span class="my-email">myemail@gmail.com</span>
        <span class="logout-lnk">Log out</span>
      </li>
      <li class="navbar-menu current-navbar-menu" id="menu-dashboard-account">Dashboard/Account</li>
      <li class="navbar-menu" id="menu-fiat-wallet">Fiat Wallet</li>
      <li class="navbar-menu" id="menu-crypto-wallet">Crypto Wallet</li>
      <li class="navbar-menu" id="menu-crypto-market-data">Crypto Market Data</li>
      <li class="navbar-menu" id="menu-trading-fund-arena">Trading/Fund Arena</li>
      <li class="navbar-menu" id="menu-corporate-account">Corporate Account</li>
      <li class="navbar-menu navbar-submenu" id="menu-corporate-fiat">Fiat Wallet</li>
      <li class="navbar-menu navbar-submenu" id="menu-corporate-crypto">Crypto Wallet</li>
      <li class="navbar-menu navbar-submenu" id="menu-corporate-merchant">Merchant Processing</li>
      <li class="navbar-menu" id="menu-transaction-history">Transaction History</li>
      <li class="navbar-menu" id="menu-verify-profile">Verification</li>
      <li class="navbar-menu" id="menu-security">Security</li>
      <li class="navbar-menu" id="menu-tell-friend">Tell Friend</li>
      <li class="navbar-menu" id="menu-settings">Settings</li>
      <li class="navbar-menu" id="menu-account-logs">Account Logs</li>
    </ul>
  </nav>

  <div class="main-wrapper">
    <section id="profile">
      <div class="page-title">Profile</div>
      <div class="container-fluid">
      </div>
    </section>
    <section id="dashboard-account">
      <div class="page-title"><span class="highlight">Dashboard</span></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="container-fluid">
              <div class="row">
                <div class="col col-sm-12 col-xs-12">
                  <div class="dashboard-block">
                    <div class="block-title">Profile</div>
                    <div class="block-view-more"></div>
                    <div class="profile-contents">
                      <div class="profile-content">
                        <div class="profile-status-complete"></div>
                      </div>
                      <div class="profile-content">
                        <div class="field-name">User name</div>
                        <div class="field-value profile-view-fullname"></div>
                      </div>
                      <div class="profile-content">
                        <div class="field-name">Email</div>
                        <div class="field-value profile-view-email"></div>
                      </div>
                      <div class="profile-content">
                        <div class="field-name">Phone Number</div>
                        <div class="field-value profile-view-phone"></div>
                      </div>
                      <div class="profile-content">
                        <div class="field-name">Two Factor</div>
                        <div class="field-value profile-view-twofactor"></div>
                      </div>
                      <div class="profile-content">
                        <div class="field-name">Base Currency</div>
                        <div class="field-value profile-view-basecurrency"></div>
                      </div>
                      <div class="profile-content">
                        <div class="field-name">Your Profile Status</div>
                        <div class="field-value profile-view-status"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col col-sm-12 col-xs-12">
                  <div class="block-title-outside">Your Fiat Accounts</div>
                  <div class="dashboard-block">
                    <div class="contener-fluid">
                      <div class="row block-contents dashboard-fiat-blocks"></div>
                    </div>
                  </div>
                </div>
                <div class="col col-sm-12 col-xs-12">
                  <div class="block-title-outside">Your Crypto Currency Accounts</div>
                    <div class="container-fluid">
                    <div class="row mc-row dashboard-crypto-blocks"></div>
                  </div>
                </div>
                <div class="col col-sm-12 col-xs-12">
                  <div class="block-title-outside">Your Corporate Fiat Accounts</div>
                  <div class="dashboard-block">
                    <div class="contener-fluid">
                      <div class="row block-contents dashboard-fiat-blocks"></div>
                    </div>
                  </div>
                </div>
                <div class="col col-sm-12 col-xs-12">
                  <div class="block-title-outside">Your Corporate Crypto Currency Accounts</div>
                  <div class="contener-fluid">
                    <div class="row mc-row block-contents dashboard-crypto-blocks"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <div class="container-fluid">
              <div class="row">
                <div class="col col-lg-12 col-md-4 col-sm-4 col-xs-12">
                  <div class="dashboard-block">
                    <div class="block-title">Verify Your Profile</div>
                    <div class="block-btn goto-section" sid="verify-profile">Complete Your Profile</div>
                    <div class="block-btn goto-section" sid="verify-corporate">Apply For Corporate Account</div>
                  </div>
                </div>
                <div class="col col-lg-12 col-md-4 col-sm-4 col-xs-12">
                  <div class="dashboard-block">
                    <div class="block-title">Linked Banks</div>
                    <div class="block-link">TD Bank</div>
                    <div class="block-link">Bank of America</div>
                    <div class="block-btn goto-section" sid="link-bank">Link A Bank</div>
                  </div>
                </div>
                <div class="col col-lg-12 col-md-4 col-sm-4 col-xs-12">
                  <div class="dashboard-block">
                    <div class="block-title">Linked Credit Cards</div>
                    <div class="block-link">Capital One</div>
                    <div class="block-link">Tinkoff Platinum</div>
                    <div class="block-btn goto-section" sid="link-card">Link A Card</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="verify-profile">
      <div class="page-title">Dashboard / <span class="highlight">Verify Your Profile</span></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col col-sm-12 col-xs-12">
            <div class="dashboard-block">
              <div class="block-title">Verify Your Profile</div>
              <div class="block-view-more"></div>
              <div class="profile-verify-step step-1 cur-step">
                <div class="step-title">Personal Information</div>
                <div class="profile-verify-contents">
                  <div class="profile-verify-infos">
                    <div class="profile-verify-infos-group">
                      <div class="field-group">
                        <div class="field-name">First Name</div>
                        <div class="field-input">
                          <input type="text" id="pv-firstname" placeholder="Enter First Name">
                        </div>
                      </div>
                      <div class="field-group">
                        <div class="field-name">Last Name</div>
                        <div class="field-input">
                          <input type="text" id="pv-lastname" placeholder="Enter Last Name">
                        </div>
                      </div>
                      <div class="field-group">
                        <div class="field-name">Phone Number</div>
                        <div class="field-input">
                          <input type="text" id="pv-phone" placeholder="Enter Phone Number">
                        </div>
                      </div>
                      <div class="field-group">
                        <div class="field-name">Email</div>
                        <div class="field-input">
                          <input type="text" id="pv-email" placeholder="youremail@gmail.com">
                        </div>
                      </div>
                      <div class="field-group">
                        <div class="field-name">Date of Birth</div>
                        <div class="field-input">
                          <input type="date" id="pv-birthday" value="">
                        </div>
                      </div>
                    </div>
                    <div class="profile-verify-infos-group">
                      <div class="field-group">
                        <div class="field-name">Country</div>
                        <div class="field-input">
                          <select class="select-country" id="pv-country"></select>
                        </div>
                      </div>
                      <div class="field-group">
                        <div class="field-name">State</div>
                        <div class="field-input">
                          <select class="select-state" id="pv-state"></select>
                        </div>
                      </div>
                      <div class="field-group">
                        <div class="field-name">City</div>
                        <div class="field-input">
                          <select class="select-city" id="pv-city"></select>
                        </div>
                      </div>
                      <div class="field-group">
                        <div class="field-name">Address</div>
                        <div class="field-input">
                          <input type="text" id="pv-address" placeholder="Enter Address">
                        </div>
                      </div>
                      <div class="field-group">
                        <div class="field-name">Zip Code</div>
                        <div class="field-input">
                          <input type="text" id="pv-zipcode" placeholder="Enter Zip Code">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="block-btn small-btn verify-btn" sid="to-step-2" for="profile-1">Next Step</div>
                </div>
              </div>
              <div class="profile-verify-step step-2">
                <div class="step-title">Required Documents</div>
                <div class="profile-verify-contents">
                  <form id="frm-profile-step2" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="token">
                    <input type="hidden" name="step" value=2>
                  <div class="profile-verify-infos">
                    <div class="field-group field-upload">
                      <div class="field-name">Upload Valid Identification (Passport or Driver's License)</div>
                      <div class="field-value">
                        <div class="uploader uploader-filePhotoID">
                          <div class="uploader-panel"></div>
                          <div class="preview-image"></div>
                          <input type="file" name="photoId" id="filePhotoID" />
                        </div>
                      </div>
                    </div>
                    <div class="field-group field-upload">
                      <div class="field-name">Upload Valid Utility Bill</div>
                      <div class="field-value">
                        <div class="uploader uploader-filePhotoBill">
                          <div class="uploader-panel"></div>
                          <div class="preview-image"></div>
                          <input type="file" name="photoBill" id="filePhotoBill" />
                        </div>
                      </div>
                    </div>
                  </div>
                  </form>
                  <div class="block-btn small-btn verify-btn" sid="to-step-1">Prev Step</div>
                  <div class="block-btn small-btn verify-btn" sid="to-step-3" for="profile-2">Next Step</div>
                </div>
              </div>
              <div class="profile-verify-step step-3 step-last">
                <div class="step-title">Approval</div>
                <div class="profile-verify-contents">
                  <div class="profile-verify-infos">
                    <div class="message-box message-pending">
                      <div class="message-title">
                        Thank you for submitting all of your documents!
                      </div>
                      <div class="message-description">
                        Your Approval is pending. If there was any problem submiting documents, <br>
                        please contact us at documents@magellancapital.com
                      </div>
                    </div>
                    <div class="message-box message-fail">
                      <div class="message-title">
                        Thank you for submitting all of your documents!
                      </div>
                      <div class="message-description">
                        Pending - We are Still missing some documents from you.<br>
                        Please resubmit the following documents:
                      </div>
                      <div class="missing-documents">
                        - Upload Valid Utility Bill
                      </div>
                    </div>
                  </div>
                  <div class="block-btn small-btn verify-btn" sid="to-step-2">Prev Step</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="verify-corporate">
      <div class="page-title">Dashboard / <span class="highlight">Apply for Corporate Account</span></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col col-sm-12 col-xs-12">
            <div class="dashboard-block">
              <div class="block-title">Apply for Corporate Account</div>
              <div class="profile-verify-step step-1 cur-step">
                <div class="step-title">
                  Provide Information for <span class="cur-username">Amos</span>
                </div>
                <div class="profile-verify-contents">
                  <div class="profile-verify-infos">
                    <div class="profile-verify-infos-group">
                      <div class="field-group">
                        <div class="field-name">Legal Business Name</div>
                        <div class="field-input">
                          <input type="text" id="cv-businessname" placeholder="Enter Business Name">
                        </div>
                      </div>
                      <div class="field-group">
                        <div class="field-name">Business Phone Number</div>
                        <div class="field-input">
                          <input type="text" id="cv-businessphonenumber" placeholder="Enter Business Phone Number">
                        </div>
                      </div>
                      <div class="field-group">
                        <div class="field-name">Business Email</div>
                        <div class="field-input">
                          <input type="text" id="cv-businessemail" placeholder="youremail@gmail.com">
                        </div>
                      </div>
                      <div class="field-group">
                        <div class="field-name">Business Website</div>
                        <div class="field-input">
                          <input type="text" id="cv-businesswebsite" placeholder="Enter Business Website">
                        </div>
                      </div>
                    </div>
                    <div class="profile-verify-infos-group">
                      <div class="field-group">
                        <div class="field-name">Country</div>
                        <div class="field-input">
                          <select class="select-country" id="cv-country"></select>
                        </div>
                      </div>
                      <div class="field-group">
                        <div class="field-name">State</div>
                        <div class="field-input">
                          <select class="select-state" id="cv-state"></select>
                        </div>
                      </div>
                      <div class="field-group">
                        <div class="field-name">City</div>
                        <div class="field-input">
                          <select class="select-state" id="cv-city"></select>
                        </div>
                      </div>
                      <div class="field-group">
                        <div class="field-name">Address</div>
                        <div class="field-input">
                          <input type="text" id="cv-address" placeholder="Enter Address">
                        </div>
                      </div>
                      <div class="field-group">
                        <div class="field-name">Zip Code</div>
                        <div class="field-input">
                          <input type="text" id="cv-zipcode" placeholder="Enter Zip Code">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="block-btn small-btn cv-btn" sid="to-step-2" for="cv-1">Next Step</div>
                </div>
              </div>
              <div class="profile-verify-step step-2">
                <div class="step-title">Tell us about your Business</div>
                <div class="profile-verify-contents">
                  <form id="frm-cv-profile-step2" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="token">
                    <input type="hidden" name="step" value=2>
                    <div class="profile-verify-infos">
                      <div class="profile-verify-infos-group">
                        <div class="field-group">
                          <div class="field-name">Your Business Type</div>
                          <div class="field-input">
                            <select id="cv-businesstype" name="businessType">
                              <option value="1">Sole Proprietorship</option>
                              <option value="2">Limited Liability Company (LLC)</option>
                              <option value="3">Corporation</option>
                              <option value="4">Nonprofit Corporation</option>
                              <option value="5">Limited Liability Partnership (LLP)</option>
                            </select>
                          </div>
                        </div>
                        <div class="field-group">
                          <div class="field-name">Describe Your Business</div>
                          <div class="field-input field-description">
                            <input type="text" id="cv-businessdescribe" placeholder="Tell us about your Business in a few words" name="businessDesc">
                          </div>
                        </div>
                      </div>
                      <div class="profile-verify-infos-group">
                        <div class="group-title">Corporate Banking Information</div>
                        <div class="field-group">
                          <div class="field-name">EIN (TAX ID)</div>
                          <div class="field-input">
                            <input type="text" id="cv-ein" name="ein" placeholder="Enter Your EIN">
                          </div>
                        </div>
                        <div class="field-group">
                          <div class="field-name">Routing Number</div>
                          <div class="field-input">
                            <input type="text" id="cv-routingnumber" name="routingNumber" placeholder="Enter Routing Number">
                          </div>
                        </div>
                        <div class="field-group">
                          <div class="field-name">Account Number</div>
                          <div class="field-input confirm-input">
                            <input type="text" id="cv-accountnumber" name="accountNumber" value="" placeholder="Enter Account Number">
                          </div>
                        </div>
                        <div class="field-group">
                          <div class="field-name">Confirm Account Number</div>
                          <div class="field-input confirm-input">
                            <input type="text" id="cv-cfaccountnumber" value="" placeholder="Enter Confirm Account Number">
                          </div>
                        </div>
                      </div>
                      <div class="profile-verify-infos-group">
                        <div class="field-group field-upload">
                          <div class="field-name">Upload Business Articles of Incorporation</div>
                          <div class="field-value">
                            <div class="uploader uploader-fileBusinessID">
                              <div class="uploader-panel"></div>
                              <div class="preview-image"></div>
                              <input type="file" name="articleImage"  id="fileBusinessID" />
                            </div>
                          </div>
                        </div>
                        <div class="field-group">
                          <div class="field-name">Agreement</div>
                          <div class="field-value">
                            <label class="cv-agree-text"><input type="checkbox" id="cv-agree"> Agree and Upgrade Account</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="block-btn small-btn cv-btn" sid="to-step-1">Prev Step</div>
                  <div class="block-btn small-btn cv-btn" sid="to-step-3" for="cv-2">Next Step</div>
                </div>
              </div>
              <div class="profile-verify-step step-3 step-last">
                <div class="step-title">Status</div>
                <div class="profile-verify-contents">
                  <div class="profile-verify-infos">
                    <div class="message-box message-pending">
                      <div class="message-title">
                        Pending
                      </div>
                      <div class="message-description">
                        Your Approval is pending. If there was any problem submiting documents, <br>
                        please contact us at documents@magellancapital.com
                      </div>
                    </div>
                    <div class="message-box message-success">
                      <div class="message-title">
                        Congratulations!
                      </div>
                      <div class="message-description">
                        Your corporate account has been approved!
                      </div>
                    </div>
                    <div class="message-box message-fail">
                      <div class="message-title">
                        Still Pending!
                      </div>
                      <div class="message-description">
                        Pending - We are Still missing some documents from you.<br>
                        Please resubmit the following documents:
                      </div>
                      <div class="missing-documents">
                        - Upload Valid Utility Bill
                      </div>
                    </div>
                  </div>
                  <div class="block-btn small-btn cv-btn" sid="to-step-2">Prev Step</div>
                  <div class="block-btn small-btn goto-section" sid="dashboard-account">Done</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="link-bank">
      <div class="page-title">Dashboard / <span class="highlight">Link a Bank Account</span></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col col-sm-12 col-xs-12">
            <div class="dashboard-block">
              <div class="block-title">Link a Bank Account</div>
              <div class="block-view-more"></div>
              <div class="block-row">
                <span class="radio-grp">
                  <span class="radio-item">Checking</span>
                  <span class="radio-item radio-selected">Savings</span>
                </span>
              </div>
              <div class="block-row">
                <div class="field-group">
                  <div class="field-name">Routing Number</div>
                  <div class="field-input">
                    <input type="text" id="lbv-bankrouting" placeholder="Enter Routing Number" value="1234 4321 3333 4533 3940">
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name">&nbsp;</div>
                  <div class="field-input">
                    <input type="text" id="lbv-bankaccount" placeholder="Enter Account Number">
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="message-box message-notice">
                  <div class="message-description">
                    By continuing, you are agree to let MagellanCapital send 2 small deposit amounts (less than $1.00 and retreive them in 1 withdrawal).
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="block-btn middle-btn goto-section" sid="dashboard-account">Agree and Link</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="link-card">
      <div class="page-title">Dashboard / <span class="highlight">Link a Debit or Credit Card</span></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col col-sm-12 col-xs-12">
            <div class="dashboard-block">
              <div class="block-title">Link a Debit or Credit Card</div>
              <div class="block-view-more"></div>
              <div class="block-row">
                <span class="radio-grp">
                  <span class="radio-item">AMEX</span>
                  <span class="radio-item">VISA</span>
                  <span class="radio-item radio-selected">MasterCard</span>
                  <span class="radio-item">Discover</span>
                </span>
              </div>
              <div class="block-row">
                <div class="field-group">
                  <div class="field-name">Debit or Credit Card Number</div>
                  <div class="field-input">
                    <input type="text" id="lcv-bankrouting" placeholder="Enter Card Number" value="1234 4321 3333 4533">
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name">Expiration Date</div>
                  <div class="field-input">
                    <input type="date" id="lcv-expdate">
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name">Security code</div>
                  <div class="field-input">
                    <input type="text" id="lcv-securitycode" value="123">
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name">Billing Address</div>
                  <div class="field-input">
                    <input type="text" id="lcv-billingaddr" placeholder="Enter Billing Address" value="">
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="block-btn small-btn goto-section" sid="dashboard-account">Link Card</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="fiat-wallet">
      <div class="page-title"><span class="highlight">Fiat Wallet</span></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col col-sm-12 col-xs-12">
            <div class="block-row-title-outside">Fiat Wallet</div>
            <div class="block-row fiat-blocks"></div>
          </div>
        </div>
        <div class="row">
          <div class="col col-sm-12 col-xs-12">
            <div class="block-row-title-outside">Your Activity</div>
            <div class="block-row">
              <div class="filter-col search-input">
                <input type="text" class="filter-option" placeholder="Search for Transactions">
              </div>
              <div class="filter-col">
                <select class="filter-option">
                  <option>Past 30 days</option>
                  <option>Past Week</option>
                  <option>Past MTD</option>
                  <option>Past QTR</option>
                  <option>Past YRLY</option>
                </select>
              </div>
              <div class="filter-col">
                <select class="filter-option">
                  <option>All Transactions</option>
                  <option>Incoming</option>
                  <option>Outgoing</option>
                  <option>Currency Exchange</option>
                  <option>Refund</option>
                </select>
              </div>
            </div>
            <div class="block-row">
              <table class="list-table">
              <thead>
                <tr>
                  <th class="align-center" width=50px><input type="checkbox" class="table-select table-select-all"></th>
                  <th class="align-left">Date</th>
                  <th class="align-left">Name</th>
                  <th class="align-left">Type</th>
                  <th class="align-left">Category</th>
                  <th class="align-right">Gross</th>
                  <th class="align-right">Fee</th>
                  <th class="align-right">Net</th>
                  <th class="align-right">Balance</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-center"><input type="checkbox" class="table-select"></td>
                  <td class="align-left color-white">12.12.18</td>
                  <td class="align-left">Transaction very long name</td>
                  <td class="align-left">Incoming</td>
                  <td class="align-center">-</td>
                  <td class="align-right">$123.45 USD</td>
                  <td class="align-right value-m">-$12.34</td>
                  <td class="align-right">$456.78</td>
                  <td class="align-right color-white">$1234.56 USD</td>
                </tr>
                <tr>
                  <td class="align-center"><input type="checkbox" class="table-select"></td>
                  <td class="align-left color-white">12.12.18</td>
                  <td class="align-left">Transaction name</td>
                  <td class="align-left">Currency Exchange</td>
                  <td class="align-center">-</td>
                  <td class="align-right value-m">-$123.45 USD</td>
                  <td class="align-right value-m">-$12.34</td>
                  <td class="align-right value-m">-$456.78</td>
                  <td class="align-right color-white">$1234.56 USD</td>
                </tr>
                <tr>
                  <td class="align-center"><input type="checkbox" class="table-select"></td>
                  <td class="align-left color-white">12.12.18</td>
                  <td class="align-left">Transaction very long name</td>
                  <td class="align-left">Outgoing Wiretransfer</td>
                  <td class="align-left">Education</td>
                  <td class="align-right">$123.45 USD</td>
                  <td class="align-right value-m">-$12.34</td>
                  <td class="align-right">$456.78</td>
                  <td class="align-right color-white">$1234.56 USD</td>
                </tr>
                <tr>
                  <td class="align-center"><input type="checkbox" class="table-select"></td>
                  <td class="align-left color-white">12.12.18</td>
                  <td class="align-left">Transaction name</td>
                  <td class="align-left">Refund</td>
                  <td class="align-left">Retail</td>
                  <td class="align-right">$123.45 USD</td>
                  <td class="align-right value-m">-$12.34</td>
                  <td class="align-right value-m">-$456.78</td>
                  <td class="align-right color-white">$1234.56 USD</td>
                </tr>
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div id="add-fiat-currency-div">
        <div class="add-currency-btn" kind="fiat">+ ADD CURRENCY</div>
        <div class="add-currency-form fiat-currency-form"></div>
      </div>
    </section>
    <section id="fiat-wallet-action">
      <div class="page-title">Fiat Wallet / <span class="highlight">Send Money(USD)</span></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col col-sm-12 col-xs-12">
            <div class="fiat-block">
              <div class="block-title">Currency Actions</div>
              <div class="block-row">
                <div class="field-group">
                  <select class="fiat-select" id="fiat-action-currency"></select>
                </div>
              </div>
              <div class="block-row">
                <span class="action-grp">
                  <span class="action-item" bid="fiat-action-block-1">Withdraw</span>
                  <span class="action-item" bid="fiat-action-block-2" fk="deposit">Deposit</span>
                  <span class="action-item" bid="fiat-action-block-3" fk="send">Send Money</span>
                  <span class="action-item" bid="fiat-action-block-4">Request</span>
                  <span class="action-item" bid="fiat-action-block-5">Exchange</span>
                  <span class="action-item" bid="fiat-action-block-6">Fund Card</span>
                </span>
              </div>
            </div>
            <div class="action-block action-fiat-withdraw" id="fiat-action-block-1">
              <div class="block-title">Withdraw Fiat</div>
              <div class="block-row">
                <div class="block-col">
                  <div class="block-col-title">From</div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Selection Account</div>
                      <div class="field-input">
                        <select>
                          <option>XXXX XXXX XXXX 2874</option>
                        </select>
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Available</div>
                      <div class="field-input">
                        <input type="text" value="1,500.00 USD" placeholder="0" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Withdraw Amount</div>
                      <div class="field-input">
                        <input type="text" value="652.00 USD" placeholder="Enter Amount">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="withdraw-arrows">
                  <i class="fas fa-arrow-right"></i>
                </div>
                <div class="block-col">
                  <div class="block-col-title">To</div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Select Bank Account</div>
                      <div class="field-input">
                        <select>
                          <option>Bank of Africa</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Checking</div>
                      <div class="field-input">
                        <input type="text" value="xxxx0521 USD" placeholder="0" readonly>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="message-box message-notice">
                  <div class="message-description">
                    Processing Time 1 Business Day. Transfers made after 7:00 PM or on weekends or holidays take longer.<br>
                    All transfers are subject to review and could be delayed or stopped if we identify an issue.
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="block-btn small-btn goto-section" sid="dashboard-account">Transfer Money</div>
              </div>
            </div>
            <div class="action-block action-fiat-deposit" id="fiat-action-block-2">
              <div class="block-title">Deposit Fiat</div>
              <div class="block-row">
                <span class="radio-grp">
                  <span class="radio-item fiat-selection" fid="fiat-deposit-form-1">Add Money from your Bank</span>
                  <span class="radio-item fiat-selection" fid="fiat-deposit-form-2">Wire Money to your Account</span>
                </span>
              </div>
              <div class="form-container" id="fiat-deposit-form-1">
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Bank</div>
                    <div class="field-input">
                      <select>
                        <option>x-7151 Capital ONe</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Amount</div>
                    <div class="field-input">
                      <input type="text" id="fiat-deposit-amount" placeholder="Enter Amount">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Card</div>
                    <div class="field-input">
                      <select>
                        <option>SotoCard</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="block-btn small-btn goto-section" sid="dashboard-account">Add</div>
                </div>
              </div>
              <div class="form-container" id="fiat-deposit-form-2">
                <div class="block-row">
                  <div class="message-box message-notice">
                    <div class="message-description">
                      Log in to your Bank Account, and send a wiretransfer <br>to the following account
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="block-row-title">SotoCard's bank details</div>
                  <div class="field-group">
                    <div class="field-name">Account Location</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Account Location">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Business Name</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Business Name">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Street Address</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Street Address">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">City</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Your City">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Zip Code</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Your Zip Code">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Routing Number</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Routing Number">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Account Number</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Account Number">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Account Type</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Account Type">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Type of Account</div>
                    <div class="field-input">
                      <input type="text" placeholder="Choose Type of Account">
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="block-btn small-btn goto-section" sid="dashboard-account">Transfer Money</div>
                  <div class="block-btn-description">Bank transfers may take 3~5 business days depending on your bank</div>
                </div>
              </div>
            </div>
            <div class="action-block action-fiat-send" id="fiat-action-block-3">
              <div class="block-title">Send Money(USD)</div>
              <div class="block-row">
                <span class="radio-grp">
                  <span class="radio-item fiat-selection radio-selected" fid="fiat-send-form-1">Transfer Between Users</span>
                  <span class="radio-item fiat-selection" fid="fiat-send-form-2">Outgoing Wire Transfer</span>
                  <span class="radio-item fiat-selection" fid="fiat-send-form-3">Transfer to Corporate Account</span>
                </span>
              </div>
              <div class="form-container" id="fiat-send-form-1">
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Debit From</div>
                    <div class="field-input">
                      <select id="fiat-debit">
                        <option>Select Fiat Account</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">User Email</div>
                    <div class="field-input">
                      <input type="text" id="fiat-email" placeholder="Enter User Email">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Amount to Transfer</div>
                    <div class="field-input">
                      <input type="text" id="fiat-amount" placeholder="Enter Amount">
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Description</div>
                    <div class="field-input field-description">
                      <input type="text" id="lcv-description" placeholder="Enter Description" value="">
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="block-btn small-btn goto-section" sid="dashboard-account">Cancel</div>
                  <div class="block-btn small-btn goto-section" sid="dashboard-account">Send Money</div>
                </div>
              </div>
              <div class="form-container" id="fiat-send-form-2">
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Debit From</div>
                    <div class="field-input">
                      <select id="fiat-debit">
                        <option>Select Fiat Account</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="block-row-title">Specify Benificiary Bank</div>
                  <div class="field-group">
                    <div class="field-name">Swift/BIC</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Bank Swift/BIC">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Bank Name</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Bank Name">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Country</div>
                    <div class="field-input">
                      <select class="select-country"></select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Location</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Bank Location">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Routing Number</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Routing Number">
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="block-row-title">Specify Benificiary Customer</div>
                  <div class="field-group">
                    <div class="field-name">Customer Name</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Customer Name">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Bank Name</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Bank Name">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Country</div>
                    <div class="field-input">
                      <select class="select-country"></select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Address</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Customer Address">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Acct#/IBAN</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Acct#/IBAN">
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Reference Message</div>
                    <div class="field-input field-description">
                      <input type="text" placeholder="Enter Message" value="">
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="block-row-title">Amount to Transfer</div>
                  <div class="field-group">
                    <div class="field-name">Amount</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Amount">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Currency</div>
                    <div class="field-input">
                      <input type="text" placeholder="Choose Currency">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Description</div>
                    <div class="field-input field-description">
                      <input type="text" placeholder="Enter Description" value="">
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="block-btn small-btn goto-section" sid="dashboard-account">Cancel</div>
                  <div class="block-btn small-btn goto-section" sid="dashboard-account">Send Money</div>
                </div>
              </div>
              <div class="form-container" id="fiat-send-form-3">
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Debit From</div>
                    <div class="field-input">
                      <select id="fiat-debit">
                        <option>Select Fiat Account</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Transfer To</div>
                    <div class="field-input">
                      <select id="fiat-debit">
                        <option>Corporate Wallet</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="block-btn small-btn goto-section" sid="dashboard-account">Cancel</div>
                  <div class="block-btn small-btn goto-section" sid="dashboard-account">Send Money</div>
                </div>
              </div>
            </div>
            <div class="action-block action-fiat-request" id="fiat-action-block-4">
              <div class="block-title">Request Money</div>
              <div class="block-row">
                <div class="message-box message-notice">
                  <div class="message-description">
                    You can request money from anyone with an email.<br>If they don't have a SotoCard account, signup is quick and free.
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="field-group">
                  <div class="field-name">Email</div>
                  <div class="field-input">
                    <input type="text" placeholder="Enter Email">
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name">Request Sum</div>
                  <div class="field-input">
                    <input type="text" value="999.00 USD" placeholder="Enter Amount">
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="field-group">
                  <div class="field-name">Write a Note(optional)</div>
                  <div class="field-input field-note">
                    <input type="text" placeholder="Enter Note" value="652.00 USD">
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="block-btn small-btn goto-section" sid="dashboard-account">Cancel</div>
                <div class="block-btn small-btn goto-section" sid="dashboard-account">Request Now</div>
              </div>
            </div>
            <div class="action-block action-fiat-exchange" id="fiat-action-block-5">
              <div class="block-title">Currency Exchange</div>
              <div class="block-row">
                <div class="block-col">
                  <div class="block-col-title">From</div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Currency</div>
                      <div class="field-input">
                        <select class="fiat-select"></select>
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Amount</div>
                      <div class="field-input">
                        <input type="text" value="1$" placeholder="Enter Amount">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="exchange-arrows">
                  <i class="fas fa-arrow-right"></i>
                  <i class="fas fa-arrow-left"></i>
                </div>
                <div class="block-col">
                  <div class="block-col-title">To</div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Currency</div>
                      <div class="field-input">
                        <select>
                          <option>Russian Ruble</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Amount</div>
                      <div class="field-input">
                        <input type="text" value="56.82" placeholder="0" readonly>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="block-btn small-btn goto-section" sid="dashboard-account">Exchange</div>
              </div>
            </div>
            <div class="action-block action-fiat-fundcard" id="fiat-action-block-6">
              <div class="block-title">Fund Card</div>
              <div class="block-row">
                <div class="block-col">
                  <div class="block-col-title">Debit From</div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Selection Account</div>
                      <div class="field-input">
                        <select>
                          <option>XXXX XXXX XXXX 2874</option>
                        </select>
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Available Balance</div>
                      <div class="field-input">
                        <input type="text" value="535,123.45 USD" placeholder="0" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Amount to Transfer</div>
                      <div class="field-input">
                        <input type="text" value="652.00 USD" placeholder="Enter Amount">
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Description</div>
                      <div class="field-input">
                        <input type="text" placeholder="Enter Description">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="withdraw-arrows">
                  <i class="fas fa-arrow-right"></i>
                </div>
                <div class="block-col">
                  <div class="block-col-title">Credit To</div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Select Card</div>
                      <div class="field-input">
                        <select>
                          <option>XXXX XXXX XXXX 5515</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Available Balance</div>
                      <div class="field-input">
                        <input type="text" value="1,123.45 USD" placeholder="0" readonly>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="block-btn small-btn goto-section" sid="dashboard-account">Transfer Money</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="crypto-wallet">
      <div class="page-title"><span class="highlight">Crypto Wallet</span></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col col-sm-12 col-xs-12">
            <div class="block-row-title-outside">Crypto Wallet</div>
            <div class="block-row has-option-blocks crypto-blocks"></div>
          </div>
        </div>
        <div class="row">
          <div class="col col-sm-12 col-xs-12">
            <div class="block-row-title-outside">Your Activity</div>
            <div class="block-row">
              <div class="filter-col search-input">
                <input type="text" class="filter-option" placeholder="Search for Transactions">
              </div>
              <div class="filter-col">
                <select class="filter-option">
                  <option>Past 30 days</option>
                  <option>Past Week</option>
                  <option>Past MTD</option>
                  <option>Past QTR</option>
                  <option>Past YRLY</option>
                </select>
              </div>
              <div class="filter-col">
                <select class="filter-option">
                  <option>All Transactions</option>
                  <option>Bought</option>
                  <option>Sold</option>
                  <option>Received</option>
                </select>
              </div>
            </div>
            <div class="block-row">
              <table class="list-table">
              <thead>
                <tr>
                  <th class="align-center" width=50px><input type="checkbox" class="table-select table-select-all"></th>
                  <th class="align-left">Date</th>
                  <th class="align-left">Wallet Address</th>
                  <th class="align-left">Type</th>
                  <th class="align-right">Gross</th>
                  <th class="align-right">Fee</th>
                  <th class="align-right">Net</th>
                  <th class="align-right">Balance</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-center"><input type="checkbox" class="table-select"></td>
                  <td class="align-left color-white">12.12.18</td>
                  <td class="align-left">abcdefghijklmnopqrstuvwxyz</td>
                  <td class="align-left">Bought</td>
                  <td class="align-right">$123.45 USD</td>
                  <td class="align-right value-m">-$12.34</td>
                  <td class="align-right">$456.78</td>
                  <td class="align-right color-white">$1234.56 USD</td>
                </tr>
                <tr>
                  <td class="align-center"><input type="checkbox" class="table-select"></td>
                  <td class="align-left color-white">12.12.18</td>
                  <td class="align-left">abcdefghijklmnopqrstuvwxyz</td>
                  <td class="align-left">Sold</td>
                  <td class="align-right value-m">-$123.45 USD</td>
                  <td class="align-right value-m">-$12.34</td>
                  <td class="align-right value-m">-$456.78</td>
                  <td class="align-right color-white">$1234.56 USD</td>
                </tr>
                <tr>
                  <td class="align-center"><input type="checkbox" class="table-select"></td>
                  <td class="align-left color-white">12.12.18</td>
                  <td class="align-left">abcdefghijklmnopqrstuvwxyz</td>
                  <td class="align-left">Received</td>
                  <td class="align-right">$123.45 USD</td>
                  <td class="align-right value-m">-$12.34</td>
                  <td class="align-right">$456.78</td>
                  <td class="align-right color-white">$1234.56 USD</td>
                </tr>
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div id="add-crypto-currency-div">
        <div class="add-currency-btn" kind="crypto">+ ADD CURRENCY</div>
        <div class="add-currency-form crypto-currency-form"></div>
      </div>
    </section>
    <section id="crypto-wallet-action">
      <div class="page-title">Crypto Wallet / <span class="highlight">Send Money(USD)</span></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col col-sm-12 col-xs-12">
            <div class="crypto-block">
              <div class="block-title">Currency Actions</div>
              <div class="block-row">
                <div class="field-group">
                  <select class="crypto-select" id="crypto-action-currency"></select>
                </div>
              </div>
              <div class="block-row">
                <span class="action-grp">
                  <span class="action-item" bid="crypto-action-block-1">Buy</span>
                  <span class="action-item" bid="crypto-action-block-2">Sell</span>
                  <span class="action-item" bid="crypto-action-block-3">Send</span>
                  <span class="action-item" bid="crypto-action-block-4">Receive</span>
                  <span class="action-item" bid="crypto-action-block-5">Exchange Cryptocurrency</span>
                  <span class="action-item" bid="crypto-action-block-6">Create Deposit Address</span>
                </span>
              </div>
            </div>
            <div class="action-block action-crypto-buy" id="crypto-action-block-1">
              <div class="block-title">Buy</div>
              <div class="block-row">
                <div class="field-groups">
                  <div class="field-group">
                    <div class="field-name"><span class="crypto-currency-view"></span> Balance</div>
                    <div class="field-value-big">
                      <span class="crypto-price-balance"></span>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Fiat Account</div>
                    <div class="field-input">
                      <select>
                        <option>Select Fiat Wallet</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="field-groups">
                  <div class="field-group">
                    <div class="field-name"><span class="crypto-currency-view"></span> Buy Price</div>
                    <div class="field-value-big">
                      $<span class="crypto-price-usd"></span>
                      <span class="currency-pm crypto-price-percent currency-p"></span>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Amount</div>
                    <div class="field-input">
                      <input type="text" id="crypto-action-amount" value="" placeholder="Enter Amount">
                    </div>
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="block-btn small-btn goto-section" sid="crypto-wallet">Cancel</div>
                <div class="block-btn small-btn crypto-action-button-buy" sid="crypto-wallet">Buy</div>
              </div>
            </div>
            <div class="action-block action-crypto-sell" id="crypto-action-block-2">
              <div class="block-title">Sell</div>
              <div class="block-row">
                <div class="field-groups">
                  <div class="field-group">
                    <div class="field-name"><span class="crypto-currency-view"></span> Balance</div>
                    <div class="field-value-big">
                      <span class="crypto-price-balance"></span>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Fiat Account</div>
                    <div class="field-input">
                      <select>
                        <option>Select Fiat Wallet</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="field-groups">
                  <div class="field-group">
                    <div class="field-name"><span class="crypto-currency-view"></span> Buy Price</div>
                    <div class="field-value-big">
                      $<span class="crypto-price-usd"></span>
                      <span class="currency-pm crypto-price-percent currency-p">%</span>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Amount</div>
                    <div class="field-input">
                      <input type="text" value="" placeholder="Enter Amount">
                    </div>
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="block-btn small-btn goto-section" sid="crypto-wallet">Cancel</div>
                <div class="block-btn small-btn goto-section" sid="crypto-wallet">Buy</div>
              </div>
            </div>
            <div class="action-block action-crypto-send" id="crypto-action-block-3">
              <div class="block-title">Send Funds to <span class="crypto-currency-view"></span> Address</div>
              <div class="block-row">
                <div class="field-group">
                  <div class="field-name"><span class="crypto-currency-view"></span> Address</div>
                  <div class="field-input">
                    <select id="fiat-debit">
                      <option>Select Fiat Wallet</option>
                    </select>
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name"><span class="crypto-currency-view"></span>'s amount</div>
                  <div class="field-input">
                    <input type="text" placeholder="Enter Amount">
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="block-btn small-btn goto-section" sid="crypto-wallet">Cancel</div>
                <div class="block-btn small-btn goto-section" sid="crypto-wallet">Transfer <span class="crypto-currency-view"></span></div>
              </div>
            </div>
            <div class="action-block action-crypto-receive" id="crypto-action-block-4">
              <div class="block-title">Receive Bitcoins</div>
              <div class="block-row">
                <div class="field-group">
                  <div class="field-name"><span class="crypto-currency-view"></span> Balance</div>
                  <div class="field-value">
                    <span class="crypto-price-balance"></span>
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name"><span class="crypto-currency-view"></span> Wallet Address</div>
                  <div class="field-value">
                    <span class="crypto-address"></span>
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="field-group">
                  <div class="field-name">Sender Email</div>
                  <div class="field-input">
                    <input type="text" placeholder="Enter Sender Email">
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name"><span class="crypto-currency-view"></span> Amount</div>
                  <div class="field-input">
                    <input type="text" value="" placeholder="Enter Amount">
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="field-group">
                  <div class="field-name">Write a Note(optional)</div>
                  <div class="field-input field-note">
                    <input type="text" placeholder="Enter Something">
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="message-box message-notice">
                  <div class="message-description">
                    Only send <span class="crypto-currency-view"></span> to this Email!<br>Sending any other digital assets will result in permanent loss.
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="block-btn small-btn goto-section" sid="crypto-wallet">Cancel</div>
                <div class="block-btn small-btn goto-section" sid="crypto-wallet">Send Request</div>
              </div>
            </div>
            <div class="action-block action-crypto-exchange" id="crypto-action-block-5">
              <div class="block-title">Currency Exchange</div>
              <div class="block-row">
                <div class="block-col">
                  <div class="block-col-title">From</div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Currency</div>
                      <div class="field-input">
                        <select class="crypto-select"></select>
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Amount</div>
                      <div class="field-input">
                        <input type="text" value="28C" placeholder="Enter Amount">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="exchange-arrows">
                  <i class="fas fa-arrow-right"></i>
                  <i class="fas fa-arrow-left"></i>
                </div>
                <div class="block-col">
                  <div class="block-col-title">To</div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Currency</div>
                      <div class="field-input">
                        <select>
                          <option>Ethereum (ETH)</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Amount</div>
                      <div class="field-input">
                        <input type="text" value="342.34 ETH" placeholder="Enter Amount" readonly>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="block-btn small-btn goto-section" sid="dashboard-account">Exchange</div>
              </div>
            </div>
            <div class="action-block action-crypto-create" id="crypto-action-block-6">
              <div class="block-title">Create Deposit Address</div>
              <div class="block-row">
                <div class="message-box message-notice">
                  <div class="message-description">
                    Minimum Deposit is 0.00100 <span class="crypto-currency-view"></span>. <br>Don't send any other Cryptocoin or an address or you will lose them.
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="field-group">
                  <div class="field-name">Your <span class="crypto-currency-view"></span> Deposit Address</div>
                  <div class="field-value">
                    abcdefghijklmnopqrstuvwxyz
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name">Deposit Currency</div>
                  <div class="field-value">
                    <span class="crypto-currency-view"></span>
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="field-group">
                  <div class="field-name">QR Code</div>
                  <div class="field-value">
                    Scan this image to receive <span class="crypto-currency-view"></span>
                  </div>
                  <div class="field-img">
                    <img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=0x3DFda9D92Dd12544a9C9A9734F2ee11558f22ec1&choe=UTF-8"/>
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="block-btn small-btn goto-section" sid="crypto-wallet">Cancel</div>
                <div class="block-btn small-btn copy-address" cptxt="abcdefghijklmnopqrstuvwxyz">Copy Address</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="crypto-market-data">
      <iframe src="http://magellancapital.com/" width="100%" height="100%" frameborder=0></iframe>
    </section>
    <section id="trading-fund-arena">
      <div class="page-title">Main page / <span class="highlight">Trading Arena</span></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="container-fluid">
              <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="dashboard-block">
                    <div class="block-title">Trading Data</div>
                    <div class="block-input trading-filter-block">
                      <input type="text" id="trading-filter" placeholder="Filter">
                    </div>
                    <div class="trading-filter-table">
                      <table>
                        <thead>
                          <tr>
                            <th><input type="checkbox"></th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Change</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td>LTC</td>
                            <td>452.7</td>
                            <td><span class="currency-pm currency-p">0.24%</span></td>
                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td>XPR</td>
                            <td>452.7</td>
                            <td><span class="currency-pm currency-p">0.24%</span></td>
                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td>ETH</td>
                            <td>452.7</td>
                            <td><span class="currency-pm currency-p">0.24%</span></td>
                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td>BTC</td>
                            <td>452.7</td>
                            <td><span class="currency-pm currency-p">0.24%</span></td>
                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td>LTC</td>
                            <td>452.7</td>
                            <td><span class="currency-pm currency-p">0.24%</span></td>
                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td>XPR</td>
                            <td>452.7</td>
                            <td><span class="currency-pm currency-p">0.24%</span></td>
                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td>LTC</td>
                            <td>452.7</td>
                            <td><span class="currency-pm currency-p">0.24%</span></td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan=4>Select assets to create Fund</td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="container-fluid">
              <div class="row">
                <div class="col col-sm-12 col-xs-12">
                  <div class="dashboard-block">
                    <div class="block-title">Account Balance</div>
                    <div class="block-view-more"></div>
                    <div class="container-fluid mc-container-fluid">
                      <div class="row">
                        <div class="col col-xs-12 col-sm-5 col-md-4">
                          <div class="field-name"><span class="big-balance">$238,349,485</span></div>
                          <div class="field-value"><span class="small-balance">$208,563,470</span><span class="currency-pm currency-p">0.24%</span></div>
                        </div>
                        <div class="col col-xs-12 col-sm-5 col-md-4 offset-md-1">
                          <div class="field-name">Account performance</div>
                          <span class="balance-graph">
                            <svg width="246" height="30">
                              <rect x="0" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                              <rect x="10" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);" />
                              <rect x="20" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                              <rect x="30" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);" />
                              <rect x="40" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                              <rect x="50" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                              <rect x="60" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);" />
                              <rect x="70" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                              <rect x="80" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);" />
                              <rect x="90" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                              <rect x="100" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                              <rect x="110" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);" />
                              <rect x="120" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                              <rect x="130" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);" />
                              <rect x="140" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                              <rect x="150" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                              <rect x="160" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);" />
                              <rect x="170" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                              <rect x="180" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);" />
                              <rect x="190" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                              <rect x="200" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                              <rect x="210" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);" />
                              <rect x="220" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                              <rect x="230" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);" />
                            </svg>
                          </span>
                        </div>
                        <div class="col col-xs-12 col-sm-2 col-md-2 offset-md-1">
                          <div class="field-name">Base Currency</div>
                          <div class="field-value">
                            <select class="balance-base-currency">
                              <option>EUR</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col col-sm-12 col-xs-12">
                  <div class="container-fluid">
                    <div class="row mc-row">
                      <div class="col mc-col col-xs-12 col-sm-6 col-md-4">
                        <div class="dashboard-block">
                          <div class="block-title">USD</div>
                          <div class="block-view-more"></div>
                          <div class="field-value">
                            <span class="big-value">1234123</span>
                            <span class="currency-pm currency-p">4.24%</span>
                            <span class="currency-graph">
                              <svg width="46" height="30">
                                <rect x="0" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);"></rect>
                                <rect x="10" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);"></rect>
                                <rect x="20" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);"></rect>
                                <rect x="30" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);"></rect>
                                <rect x="40" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);"></rect>
                              </svg>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col mc-col col-xs-12 col-sm-6 col-md-4">
                        <div class="dashboard-block">
                          <div class="block-title">EUR</div>
                          <div class="block-view-more"></div>
                          <div class="field-value">
                            <span class="big-value">1234</span>
                            <span class="currency-pm currency-m">-4.24%</span>
                            <span class="currency-graph">
                              <svg width="46" height="30">
                                <rect x="0" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);"></rect>
                                <rect x="10" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);"></rect>
                                <rect x="20" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);"></rect>
                                <rect x="30" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);"></rect>
                                <rect x="40" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);"></rect>
                              </svg>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col mc-col col-xs-12 col-sm-6 col-md-4">
                        <div class="dashboard-block">
                          <div class="block-title">GBP</div>
                          <div class="block-view-more"></div>
                          <div class="field-value">
                            <span class="big-value">121212</span>
                            <span class="currency-pm currency-p">4.24%</span>
                            <span class="currency-graph">
                              <svg width="46" height="30">
                                <rect x="0" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);"></rect>
                                <rect x="10" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);"></rect>
                                <rect x="20" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);"></rect>
                                <rect x="30" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);"></rect>
                                <rect x="40" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);"></rect>
                              </svg>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col col-sm-12 col-xs-12">
                  <div class="contener-fluid">
                    <div class="row mc-row block-contents">
                      <div class="col mc-col col-xs-12 col-sm-12 col-md-12">
                        <div class="fund-graph-block opened-block" id="fund-graph-block-1">
                          <table class="fund-graphs-table"><tr>
                            <td class="fund-name">Fund Number One</td>
                            <td class="fund-amount">$238,349,485</td>
                            <td class="fund-graph">
                              <span class="currency-graph">
                                <svg width="206" height="30">
                                  <line x1="3" y1="27" x2="43" y2="10" style="stroke-width: 1" />
                                  <line x1="43" y1="10" x2="83" y2="20" style="stroke-width: 1" />
                                  <line x1="83" y1="20" x2="123" y2="5" style="stroke-width: 1" />
                                  <line x1="123" y1="5" x2="163" y2="25" style="stroke-width: 1" />
                                  <line x1="163" y1="25" x2="203" y2="3" style="stroke-width: 1" />
                                  <circle cx="3" cy="27" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                  <circle cx="43" cy="10" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                  <circle cx="83" cy="20" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                  <circle cx="123" cy="5" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                  <circle cx="163" cy="25" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                  <circle cx="203" cy="3" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                </svg>
                              </span>
                            </td>
                            <td class="fund-detail">
                              <span class="fund-view-detail" fid="fund-graph-block-1">View Details</span>
                            </td>
                          </tr></table>
                          <div class="fund-small-detail">
                            <table>
                              <tr>
                                <td>ETH</td>
                                <td>$23,234,234</td>
                                <td><span class="currency-pm currency-m">4.24%</span></td>
                                <td>
                                  <svg width="100" height="20">
                                    <line x1="0" y1="17" x2="11" y2="10" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="11" y1="10" x2="19" y2="20" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="19" y1="20" x2="27" y2="5" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="27" y1="5" x2="35" y2="15" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="35" y1="15" x2="43" y2="3" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="43" y1="3" x2="100" y2="13" style="stroke:rgb(254, 202, 5)"></line>
                                  </svg>
                                </td>
                              </tr>
                              <tr>
                                <td>BTC</td>
                                <td>$2,234,234</td>
                                <td><span class="currency-pm currency-p">4.24%</span></td>
                                <td>
                                  <svg width="100" height="20">
                                    <line x1="0" y1="17" x2="11" y2="10" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="11" y1="10" x2="19" y2="20" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="19" y1="20" x2="27" y2="5" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="27" y1="5" x2="35" y2="15" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="35" y1="15" x2="43" y2="3" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="43" y1="3" x2="100" y2="13" style="stroke:rgb(254, 202, 5)"></line>
                                  </svg>
                                </td>
                              </tr>
                              <tr>
                                <td>XPR</td>
                                <td>$234,234</td>
                                <td><span class="currency-pm currency-p">4.24%</span></td>
                                <td>
                                  <svg width="100" height="20">
                                    <line x1="0" y1="17" x2="11" y2="10" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="11" y1="10" x2="19" y2="20" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="19" y1="20" x2="27" y2="5" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="27" y1="5" x2="35" y2="15" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="35" y1="15" x2="43" y2="3" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="43" y1="3" x2="100" y2="13" style="stroke:rgb(254, 202, 5)"></line>
                                  </svg>
                                </td>
                              </tr>
                              <tr>
                                <td>LTH</td>
                                <td>$34,234</td>
                                <td><span class="currency-pm currency-p">4.24%</span></td>
                                <td>
                                  <svg width="100" height="20">
                                    <line x1="0" y1="17" x2="11" y2="10" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="11" y1="10" x2="19" y2="20" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="19" y1="20" x2="27" y2="5" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="27" y1="5" x2="35" y2="15" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="35" y1="15" x2="43" y2="3" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="43" y1="3" x2="100" y2="13" style="stroke:rgb(254, 202, 5)"></line>
                                  </svg>
                                </td>
                              </tr>
                            </table>
                          </div>
                          <div class="fund-graphs-detail">
                            <div class="fund-graphs-detail-title">Fund Number One</div>
                            <div class="fund-close-detail" fid="fund-graph-block-1"><i class="fas fa-chevron-up"></i></div>
                            <div class="row">
                              <div class="col col-sm-6">
                                <div class="field-group">
                                  <div class="field-name">Balance</div>
                                  <div class="fund-big-value">$238,349,485</div>
                                </div>
                                <div class="field-group has-border float-right">
                                  <div class="field-name">Buy Quantity</div>
                                  <div class="fund-big-value">1<i class="fas fa-chevron-down"></i></div>
                                </div>
                              </div>
                              <div class="col col-sm-6">
                                <div class="field-group">
                                  <div class="field-name">Amount</div>
                                  <div class="fund-big-value">13251.32<sup>USD</sup></div>
                                </div>
                                <div class="field-group float-right">
                                  <div class="fund-detail-action-btn">Place Buy Order</div>
                                  <div class="fund-detail-action-btn">Share</div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col col-xs-12 col-sm-12">
                                <div class="field-name">Fund Performance</div>
                                <div id="fund-detail-1" class="fund-detail-graph"></div>
                              </div>
                            </div>
                            <div class="row">
                              <table class="fund-detail-table">
                                <thead>
                                  <tr>
                                    <th>Name</th>
                                    <th>Coins</th>
                                    <th>Price</th>
                                    <th>Cap.History</th>
                                    <th>% in Fund</th>
                                    <th>Value</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>BTC</td>
                                    <td class="value-m">235</td>
                                    <td class="value-m">452.7</td>
                                    <td>
                                      <svg width="206" height="30">
                                        <line x1="3" y1="27" x2="43" y2="10" style="stroke-width: 1"></line>
                                        <line x1="43" y1="10" x2="83" y2="20" style="stroke-width: 1"></line>
                                        <line x1="83" y1="20" x2="123" y2="5" style="stroke-width: 1"></line>
                                        <line x1="123" y1="5" x2="163" y2="25" style="stroke-width: 1"></line>
                                        <line x1="163" y1="25" x2="203" y2="3" style="stroke-width: 1"></line>
                                        <circle cx="3" cy="27" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="43" cy="10" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="83" cy="20" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="123" cy="5" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="163" cy="25" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="203" cy="3" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                      </svg>
                                    </td>
                                    <td>
                                      <div class="fund-percent">
                                        <div class="fund-percent-value" style="width: 20%">20%</div>
                                      </div>
                                    </td>
                                    <td>452.7</td>
                                  </tr>
                                  <tr>
                                    <td>ETH</td>
                                    <td class="value-m">235</td>
                                    <td class="value-m">452.7</td>
                                    <td>
                                      <svg width="206" height="30">
                                        <line x1="3" y1="27" x2="43" y2="10" style="stroke-width: 1"></line>
                                        <line x1="43" y1="10" x2="83" y2="20" style="stroke-width: 1"></line>
                                        <line x1="83" y1="20" x2="123" y2="5" style="stroke-width: 1"></line>
                                        <line x1="123" y1="5" x2="163" y2="25" style="stroke-width: 1"></line>
                                        <line x1="163" y1="25" x2="203" y2="3" style="stroke-width: 1"></line>
                                        <circle cx="3" cy="27" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="43" cy="10" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="83" cy="20" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="123" cy="5" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="163" cy="25" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="203" cy="3" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                      </svg>
                                    </td>
                                    <td>
                                      <div class="fund-percent">
                                        <div class="fund-percent-value" style="width: 49%">49%</div>
                                      </div>
                                    </td>
                                    <td>452.7</td>
                                  </tr>
                                  <tr>
                                    <td>LTC</td>
                                    <td class="value-p">235</td>
                                    <td class="value-p">452.7</td>
                                    <td>
                                      <svg width="206" height="30">
                                        <line x1="3" y1="27" x2="43" y2="10" style="stroke-width: 1"></line>
                                        <line x1="43" y1="10" x2="83" y2="20" style="stroke-width: 1"></line>
                                        <line x1="83" y1="20" x2="123" y2="5" style="stroke-width: 1"></line>
                                        <line x1="123" y1="5" x2="163" y2="25" style="stroke-width: 1"></line>
                                        <line x1="163" y1="25" x2="203" y2="3" style="stroke-width: 1"></line>
                                        <circle cx="3" cy="27" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="43" cy="10" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="83" cy="20" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="123" cy="5" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="163" cy="25" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="203" cy="3" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                      </svg>
                                    </td>
                                    <td>
                                      <div class="fund-percent">
                                        <div class="fund-percent-value" style="width: 11%">11%</div>
                                      </div>
                                    </td>
                                    <td>452.7</td>
                                  </tr>
                                  <tr>
                                    <td>XPR</td>
                                    <td class="value-p">235</td>
                                    <td class="value-p">452.7</td>
                                    <td>
                                      <svg width="206" height="30">
                                        <line x1="3" y1="27" x2="43" y2="10" style="stroke-width: 1"></line>
                                        <line x1="43" y1="10" x2="83" y2="20" style="stroke-width: 1"></line>
                                        <line x1="83" y1="20" x2="123" y2="5" style="stroke-width: 1"></line>
                                        <line x1="123" y1="5" x2="163" y2="25" style="stroke-width: 1"></line>
                                        <line x1="163" y1="25" x2="203" y2="3" style="stroke-width: 1"></line>
                                        <circle cx="3" cy="27" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="43" cy="10" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="83" cy="20" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="123" cy="5" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="163" cy="25" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                        <circle cx="203" cy="3" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000"></circle>
                                      </svg>
                                    </td>
                                    <td>
                                      <div class="fund-percent">
                                        <div class="fund-percent-value" style="width: 20%">20%</div>
                                      </div>
                                    </td>
                                    <td>452.7</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mc-row block-contents">
                      <div class="col mc-col col-xs-12 col-sm-12 col-md-12">
                        <div class="fund-graph-block" id="fund-graph-block-2">
                          <table class="fund-graphs-table"><tr>
                            <td class="fund-name">Fund Number Two</td>
                            <td class="fund-amount">$238,349,485</td>
                            <td class="fund-graph">
                              <span class="currency-graph">
                                <svg width="206" height="30">
                                  <line x1="3" y1="27" x2="43" y2="10" style="stroke-width: 1" />
                                  <line x1="43" y1="10" x2="83" y2="20" style="stroke-width: 1" />
                                  <line x1="83" y1="20" x2="123" y2="5" style="stroke-width: 1" />
                                  <line x1="123" y1="5" x2="163" y2="25" style="stroke-width: 1" />
                                  <line x1="163" y1="25" x2="203" y2="3" style="stroke-width: 1" />
                                  <circle cx="3" cy="27" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                  <circle cx="43" cy="10" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                  <circle cx="83" cy="20" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                  <circle cx="123" cy="5" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                  <circle cx="163" cy="25" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                  <circle cx="203" cy="3" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                </svg>
                              </span>
                            </td>
                            <td class="fund-detail">
                              <span class="fund-view-detail" fid="fund-graph-block-2">View Details</span>
                            </td>
                          </tr></table>
                          <div class="fund-small-detail">
                            <table>
                              <tr>
                                <td>ETH</td>
                                <td>$23,234,234</td>
                                <td><span class="currency-pm currency-m">4.24%</span></td>
                                <td>
                                  <svg width="100" height="20">
                                    <line x1="0" y1="17" x2="11" y2="10" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="11" y1="10" x2="19" y2="20" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="19" y1="20" x2="27" y2="5" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="27" y1="5" x2="35" y2="15" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="35" y1="15" x2="43" y2="3" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="43" y1="3" x2="100" y2="13" style="stroke:rgb(254, 202, 5)"></line>
                                  </svg>
                                </td>
                              </tr>
                              <tr>
                                <td>BTC</td>
                                <td>$2,234,234</td>
                                <td><span class="currency-pm currency-p">4.24%</span></td>
                                <td>
                                  <svg width="100" height="20">
                                      <line x1="0" y1="17" x2="11" y2="10" style="stroke:rgb(254, 202, 5)"></line>
                                      <line x1="11" y1="10" x2="19" y2="20" style="stroke:rgb(254, 202, 5)"></line>
                                      <line x1="19" y1="20" x2="27" y2="5" style="stroke:rgb(254, 202, 5)"></line>
                                      <line x1="27" y1="5" x2="35" y2="15" style="stroke:rgb(254, 202, 5)"></line>
                                      <line x1="35" y1="15" x2="43" y2="3" style="stroke:rgb(254, 202, 5)"></line>
                                      <line x1="43" y1="3" x2="100" y2="13" style="stroke:rgb(254, 202, 5)"></line>
                                    </svg>
                                </td>
                              </tr>
                              <tr>
                                <td>XPR</td>
                                <td>$234,234</td>
                                <td><span class="currency-pm currency-p">4.24%</span></td>
                                <td>
                                  <svg width="100" height="20">
                                    <line x1="0" y1="17" x2="11" y2="10" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="11" y1="10" x2="19" y2="20" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="19" y1="20" x2="27" y2="5" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="27" y1="5" x2="35" y2="15" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="35" y1="15" x2="43" y2="3" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="43" y1="3" x2="100" y2="13" style="stroke:rgb(254, 202, 5)"></line>
                                  </svg>
                                </td>
                              </tr>
                              <tr>
                                <td>LTH</td>
                                <td>$34,234</td>
                                <td><span class="currency-pm currency-p">4.24%</span></td>
                                <td>
                                  <svg width="100" height="20">
                                    <line x1="0" y1="17" x2="11" y2="10" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="11" y1="10" x2="19" y2="20" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="19" y1="20" x2="27" y2="5" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="27" y1="5" x2="35" y2="15" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="35" y1="15" x2="43" y2="3" style="stroke:rgb(254, 202, 5)"></line>
                                    <line x1="43" y1="3" x2="100" y2="13" style="stroke:rgb(254, 202, 5)"></line>
                                  </svg>
                                </td>
                              </tr>
                            </table>
                          </div>
                          <div class="fund-graphs-detail">
                            Fund Number Two
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="corporate-account">
      <div class="page-title"><span class="highlight">Corporate Account</span></div>
      <div class="container-fluid">
        <div class="block-title-outside">Fiat Wallet</div>
        <div class="row">
          <div class="col col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="container-fluid">
              <div class="row">
                <div class="col col-sm-12 col-xs-12">
                  <div class="dashboard-block">
                    <div class="contener-fluid">
                      <div class="row block-contents">
                        <div class="col col-xs-12 col-md-4 block-content">
                          <div class="block-title">USD</div>
                          <div class="field-value">
                            <span class="big-value">$121212</span>
                            <span class="currency-pm currency-p">4.24%</span>
                            <span class="currency-graph">
                              <svg width="46" height="30">
                                <rect x="0" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                                <rect x="10" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);" />
                                <rect x="20" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                                <rect x="30" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);" />
                                <rect x="40" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                              </svg>
                            </span>
                          </div>
                        </div>
                        <div class="col col-xs-12 col-md-4 block-content">
                          <div class="block-title">EUR</div>
                          <div class="field-value">
                            <span class="big-value">$121212</span>
                            <span class="currency-pm currency-m">-4.24%</span>
                            <span class="currency-graph">
                              <svg width="46" height="30">
                                <rect x="0" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                                <rect x="10" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);" />
                                <rect x="20" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                                <rect x="30" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);" />
                                <rect x="40" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                              </svg>
                            </span>
                          </div>
                        </div>
                        <div class="col col-xs-12 col-md-4 block-content">
                          <div class="block-title">GBP</div>
                          <div class="field-value">
                            <span class="big-value">$121212</span>
                            <span class="currency-pm currency-p">4.24%</span>
                            <span class="currency-graph">
                              <svg width="46" height="30">
                                <rect x="0" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                                <rect x="10" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);" />
                                <rect x="20" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                                <rect x="30" y="5" width="6" height="25" style="fill:rgb(34, 117, 183);" />
                                <rect x="40" y="10" width="6" height="20" style="fill:rgb(34, 117, 183);" />
                              </svg>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col col-sm-12 col-xs-12">
                  <div class="block-title-outside">Crypto Wallet</div>
                  <div class="container-fluid">
                    <div class="row mc-row">
                      <div class="col mc-col col-xs-12 col-sm-6 col-md-4">
                        <div class="dashboard-block">
                          <div class="block-title">BTC</div>
                          <div class="block-view-more"></div>
                          <div class="field-value">
                            <span class="big-value">23.00228</span>
                            <span class="currency-pm currency-p">4.24%</span>
                            <span class="currency-graph">
                              <svg width="46" height="30">
                                <line x1="3" y1="27" x2="11" y2="10" style="stroke:rgb(254, 202, 5)" />
                                <line x1="11" y1="10" x2="19" y2="20" style="stroke:rgb(254, 202, 5)" />
                                <line x1="19" y1="20" x2="27" y2="5" style="stroke:rgb(254, 202, 5)" />
                                <line x1="27" y1="5" x2="35" y2="25" style="stroke:rgb(254, 202, 5)" />
                                <line x1="35" y1="25" x2="43" y2="3" style="stroke:rgb(254, 202, 5)" />
                                <circle cx="3" cy="27" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="11" cy="10" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="19" cy="20" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="27" cy="5" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="35" cy="25" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="43" cy="3" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                              </svg>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col mc-col col-xs-12 col-sm-6 col-md-4">
                        <div class="dashboard-block">
                          <div class="block-title">ETH</div>
                          <div class="block-view-more"></div>
                          <div class="field-value">
                            <span class="big-value">5.393428</span>
                            <span class="currency-pm currency-m">4.24%</span>
                            <span class="currency-graph">
                              <svg width="46" height="30">
                                <line x1="3" y1="27" x2="11" y2="10" style="stroke:rgb(254, 202, 5)" />
                                <line x1="11" y1="10" x2="19" y2="20" style="stroke:rgb(254, 202, 5)" />
                                <line x1="19" y1="20" x2="27" y2="5" style="stroke:rgb(254, 202, 5)" />
                                <line x1="27" y1="5" x2="35" y2="25" style="stroke:rgb(254, 202, 5)" />
                                <line x1="35" y1="25" x2="43" y2="3" style="stroke:rgb(254, 202, 5)" />
                                <circle cx="3" cy="27" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="11" cy="10" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="19" cy="20" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="27" cy="5" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="35" cy="25" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="43" cy="3" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                              </svg>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col mc-col col-xs-12 col-sm-6 col-md-4">
                        <div class="dashboard-block">
                          <div class="block-title">Dash</div>
                          <div class="block-view-more"></div>
                          <div class="field-value">
                            <span class="big-value">0.723513</span>
                            <span class="currency-pm currency-p">4.24%</span>
                            <span class="currency-graph">
                              <svg width="46" height="30">
                                <line x1="3" y1="27" x2="11" y2="10" style="stroke:rgb(254, 202, 5)" />
                                <line x1="11" y1="10" x2="19" y2="20" style="stroke:rgb(254, 202, 5)" />
                                <line x1="19" y1="20" x2="27" y2="5" style="stroke:rgb(254, 202, 5)" />
                                <line x1="27" y1="5" x2="35" y2="25" style="stroke:rgb(254, 202, 5)" />
                                <line x1="35" y1="25" x2="43" y2="3" style="stroke:rgb(254, 202, 5)" />
                                <circle cx="3" cy="27" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="11" cy="10" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="19" cy="20" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="27" cy="5" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="35" cy="25" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="43" cy="3" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                              </svg>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col mc-col col-xs-12 col-sm-6 col-md-4">
                        <div class="dashboard-block">
                          <div class="block-title">Bitcoin Cash</div>
                          <div class="block-view-more"></div>
                          <div class="field-value">
                            <span class="big-value">23.00228</span>
                            <span class="currency-pm currency-p">4.24%</span>
                            <span class="currency-graph">
                              <svg width="46" height="30">
                                <line x1="3" y1="27" x2="11" y2="10" style="stroke:rgb(254, 202, 5)" />
                                <line x1="11" y1="10" x2="19" y2="20" style="stroke:rgb(254, 202, 5)" />
                                <line x1="19" y1="20" x2="27" y2="5" style="stroke:rgb(254, 202, 5)" />
                                <line x1="27" y1="5" x2="35" y2="25" style="stroke:rgb(254, 202, 5)" />
                                <line x1="35" y1="25" x2="43" y2="3" style="stroke:rgb(254, 202, 5)" />
                                <circle cx="3" cy="27" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="11" cy="10" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="19" cy="20" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="27" cy="5" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="35" cy="25" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="43" cy="3" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                              </svg>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col mc-col col-xs-12 col-sm-6 col-md-4">
                        <div class="dashboard-block">
                          <div class="block-title">XPR</div>
                          <div class="block-view-more"></div>
                          <div class="field-value">
                            <span class="big-value">5.393428</span>
                            <span class="currency-pm currency-p">4.24%</span>
                            <span class="currency-graph">
                              <svg width="46" height="30">
                                <line x1="3" y1="27" x2="11" y2="10" style="stroke:rgb(254, 202, 5)" />
                                <line x1="11" y1="10" x2="19" y2="20" style="stroke:rgb(254, 202, 5)" />
                                <line x1="19" y1="20" x2="27" y2="5" style="stroke:rgb(254, 202, 5)" />
                                <line x1="27" y1="5" x2="35" y2="25" style="stroke:rgb(254, 202, 5)" />
                                <line x1="35" y1="25" x2="43" y2="3" style="stroke:rgb(254, 202, 5)" />
                                <circle cx="3" cy="27" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="11" cy="10" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="19" cy="20" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="27" cy="5" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="35" cy="25" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                                <circle cx="43" cy="3" r="2" stroke="rgb(254, 202, 5)" stroke-width="1" fill="#000" />
                              </svg>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col col-sm-12 col-xs-12">
                  <div class="block-title-outside">Merchant Processing</div>
                  <div class="dashboard-block">
                    <div class="contener-fluid">
                      <div class="row">
                        <div class="col col-xs-12 col-sm-12">
                          <div class="block-row">
                            <div class="field-group">
                              <div class="field-name">Today</div>
                              <div class="field-value">
                                <span class="big-value">$238,123,123</span>
                              </div>
                            </div>
                            <div class="field-group">
                              <div class="field-name">Choose Currency</div>
                              <div class="field-input">
                                <select>
                                  <option>itBit</option>
                                </select>
                              </div>
                            </div>
                            <div class="field-group">
                              <div class="field-name">Analysis</div>
                              <div class="field-input">
                                <select>
                                  <option>12.12.18 | 12.25.18</option>
                                </select>
                              </div>
                            </div>
                            <div class="field-group">
                              <div class="field-name">Parameters</div>
                              <div class="field-input">
                                <select>
                                  <option>Successful Payments</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div id="corporate-merchant-graph"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <div class="container-fluid">
              <div class="row">
                <div class="col col-lg-12 col-md-4 col-sm-4 col-xs-12">
                  <div class="dashboard-block">
                    <div class="block-title">Corporate Account Status</div>
                    <div class="block-link">Activated</div>
                    <div class="block-btn goto-section" sid="verify-corporate">Apply For Corporate Account</div>
                  </div>
                </div>
                <div class="col col-lg-12 col-md-4 col-sm-4 col-xs-12">
                  <div class="dashboard-block">
                    <div class="block-title">Linked Banks</div>
                    <div class="block-link">TD Bank</div>
                    <div class="block-link">Bank of America</div>
                    <div class="block-btn goto-section" sid="link-bank">Link A Bank</div>
                  </div>
                </div>
                <div class="col col-lg-12 col-md-4 col-sm-4 col-xs-12">
                  <div class="dashboard-block">
                    <div class="block-title">Linked Credit Cards</div>
                    <div class="block-link">Capital One</div>
                    <div class="block-link">Tinkoff Platinum</div>
                    <div class="block-btn goto-section" sid="link-card">Link A Card</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="corporate-fiat">
      <div class="page-title"><span class="highlight">Fiat Wallet</span></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col col-sm-12 col-xs-12">
            <div class="block-row-title-outside">Fiat Wallet</div>
            <div class="block-row fiat-blocks"></div>
          </div>
        </div>
        <div class="row">
          <div class="col col-sm-12 col-xs-12">
            <div class="block-row-title-outside">Your Activity</div>
            <div class="block-row">
              <div class="filter-col search-input">
                <select class="filter-option">
                  <option>Business Name</option>
                </select>
                <input type="text" class="filter-option relation-option" placeholder="Search for Transactions">
              </div>
              <div class="filter-col">
                <select class="filter-option">
                  <option>US Dollar</option>
                  <option>EUR</option>
                  <option>GBP</option>
                </select>
              </div>
              <div class="filter-col">
                <select class="filter-option">
                  <option>Past 30 days</option>
                  <option>Past Week</option>
                  <option>Past MTD</option>
                  <option>Past QTR</option>
                  <option>Past YRLY</option>
                </select>
              </div>
              <div class="filter-col">
                <select class="filter-option">
                  <option>All Transactions</option>
                  <option>Incoming</option>
                  <option>Outgoing</option>
                  <option>Currency Exchange</option>
                  <option>Refund</option>
                </select>
              </div>
            </div>
            <div class="block-row">
              <table class="list-table">
              <thead>
                <tr>
                  <th class="align-center" width=50px><input type="checkbox" class="table-select table-select-all"></th>
                  <th class="align-left">Date</th>
                  <th class="align-left">Type</th>
                  <th class="align-left">Name</th>
                  <th class="align-left">Payment</th>
                  <th class="align-right">Gross</th>
                  <th class="align-right">Fee</th>
                  <th class="align-right">Net</th>
                  <th class="align-right">Balance</th>
                  <th class="align-left">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-center"><input type="checkbox" class="table-select"></td>
                  <td class="align-left color-white">12.12.18</td>
                  <td class="align-left">Subscription payments</td>
                  <td class="align-left">Transaction very long name</td>
                  <td class="align-left"><i class="fas fa-times-circle class-failed"></i>Failed</td>
                  <td class="align-right">$123.45 USD</td>
                  <td class="align-right value-m">-$2.00</td>
                  <td class="align-right">$456.78</td>
                  <td class="align-right color-white">$1234.56 USD</td>
                  <td class="align-right">
                    <select>
                      <option>Archive</option>
                      <option>Refund</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td class="align-center"><input type="checkbox" class="table-select"></td>
                  <td class="align-left color-white">12.12.18</td>
                  <td class="align-left">Subscription payments</td>
                  <td class="align-left">Transaction very long name</td>
                  <td class="align-left"><i class="fas fa-circle class-processing"></i>Processing</td>
                  <td class="align-right">$123.45 USD</td>
                  <td class="align-right value-m">-$2.00</td>
                  <td class="align-right">$456.78</td>
                  <td class="align-right color-white">$1234.56 USD</td>
                  <td class="align-right">
                    <select>
                      <option>Archive</option>
                      <option>Refund</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td class="align-center"><input type="checkbox" class="table-select"></td>
                  <td class="align-left color-white">12.12.18</td>
                  <td class="align-left">Subscription payments</td>
                  <td class="align-left">Transaction very long name</td>
                  <td class="align-left"><i class="fas fa-check-circle class-completed"></i>Completed</td>
                  <td class="align-right">$123.45 USD</td>
                  <td class="align-right value-m">-$2.00</td>
                  <td class="align-right">$456.78</td>
                  <td class="align-right color-white">$1234.56 USD</td>
                  <td class="align-right">
                    <select>
                      <option>Archive</option>
                      <option>Refund</option>
                    </select>
                  </td>
                </tr>
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div id="add-corporate-fiat-currency-div">
        <div class="add-currency-btn" kind="corporate-fiat">+ ADD CURRENCY</div>
        <div class="add-currency-form fiat-currency-form"></div>
      </div>
    </section>
    <section id="corporate-crypto">
      <div class="page-title"><span class="highlight">Crypto Wallet</span></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col col-sm-12 col-xs-12">
            <div class="block-row-title-outside">Crypto Wallet</div>
            <div class="block-row has-option-blocks crypto-blocks"></div>
          </div>
        </div>
        <div class="row">
          <div class="col col-sm-12 col-xs-12">
            <div class="block-row-title-outside">Your Activity</div>
            <div class="block-row">
              <div class="filter-col search-input">
                <select class="filter-option">
                  <option>Business Name</option>
                </select>
                <input type="text" class="filter-option relation-option" placeholder="Search for Transactions">
              </div>
              <div class="filter-col">
                <select class="filter-option">
                  <option>US Dollar</option>
                  <option>EUR</option>
                  <option>GBP</option>
                </select>
              </div>
              <div class="filter-col">
                <select class="filter-option">
                  <option>Past 30 days</option>
                  <option>Past Week</option>
                  <option>Past MTD</option>
                  <option>Past QTR</option>
                  <option>Past YRLY</option>
                </select>
              </div>
              <div class="filter-col">
                <select class="filter-option">
                  <option>All Transactions</option>
                  <option>Incoming</option>
                  <option>Outgoing</option>
                  <option>Currency Exchange</option>
                  <option>Refund</option>
                </select>
              </div>
            </div>
            <div class="block-row">
              <table class="list-table">
              <thead>
                <tr>
                  <th class="align-center" width=50px><input type="checkbox" class="table-select table-select-all"></th>
                  <th class="align-left">Date</th>
                  <th class="align-left">Type</th>
                  <th class="align-left">Name</th>
                  <th class="align-left">Payment</th>
                  <th class="align-right">Gross</th>
                  <th class="align-right">Fee</th>
                  <th class="align-right">Net</th>
                  <th class="align-right">Balance</th>
                  <th class="align-left">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-center"><input type="checkbox" class="table-select"></td>
                  <td class="align-left color-white">12.12.18</td>
                  <td class="align-left">Subscription payments</td>
                  <td class="align-left">Transaction very long name</td>
                  <td class="align-left"><i class="fas fa-times-circle class-failed"></i>Failed</td>
                  <td class="align-right">$123.45 USD</td>
                  <td class="align-right value-m">-$2.00</td>
                  <td class="align-right">$456.78</td>
                  <td class="align-right color-white">$1234.56 USD</td>
                  <td class="align-right">
                    <select>
                      <option>Archive</option>
                      <option>Refund</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td class="align-center"><input type="checkbox" class="table-select"></td>
                  <td class="align-left color-white">12.12.18</td>
                  <td class="align-left">Subscription payments</td>
                  <td class="align-left">Transaction very long name</td>
                  <td class="align-left"><i class="fas fa-circle class-processing"></i>Processing</td>
                  <td class="align-right">$123.45 USD</td>
                  <td class="align-right value-m">-$2.00</td>
                  <td class="align-right">$456.78</td>
                  <td class="align-right color-white">$1234.56 USD</td>
                  <td class="align-right">
                    <select>
                      <option>Archive</option>
                      <option>Refund</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td class="align-center"><input type="checkbox" class="table-select"></td>
                  <td class="align-left color-white">12.12.18</td>
                  <td class="align-left">Subscription payments</td>
                  <td class="align-left">Transaction very long name</td>
                  <td class="align-left"><i class="fas fa-check-circle class-completed"></i>Completed</td>
                  <td class="align-right">$123.45 USD</td>
                  <td class="align-right value-m">-$2.00</td>
                  <td class="align-right">$456.78</td>
                  <td class="align-right color-white">$1234.56 USD</td>
                  <td class="align-right">
                    <select>
                      <option>Archive</option>
                      <option>Refund</option>
                    </select>
                  </td>
                </tr>
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div id="add-corporate-crypto-currency-div">
        <div class="add-currency-btn" kind="corporate-crypto">+ ADD CURRENCY</div>
        <div class="add-currency-form crypto-currency-form"></div>
      </div>
    </section>
    <section id="corporate-merchant">
      <div class="page-title">Merchant Processing / <span class="highlight">Transactions</span></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col col-sm-12 col-xs-12">
            <div class="crypto-block">
              <div class="block-row">
                <span class="action-grp">
                  <span class="action-item" bid="corporate-action-block-transactions">Transactions</span>
                  <span class="action-item" bid="corporate-action-block-balance">Balance</span>
                  <span class="action-item" bid="corporate-action-block-create-payment">Create Payment</span>
                  <span class="action-item" bid="corporate-action-block-disputes">Disputes</span>
                  <span class="action-item" bid="corporate-action-block-customers">Customers</span>
                  <span class="action-item" bid="corporate-action-block-substriptions">Substriptions</span>
                  <span class="action-item" bid="corporate-action-block-products">Products</span>
                  <span class="action-item" bid="corporate-action-block-coupons">Coupons</span>
                  <span class="action-item" bid="corporate-action-block-invoices">Invoices</span>
                  <span class="action-item" bid="corporate-action-block-settings">Settings</span>
                </span>
              </div>
            </div>
            <div class="action-block action-corporate-" id="corporate-action-block-transactions">
              <div class="corporate-transaction-content corporate-transaction-table">
                <div class="block-row-title-outside">Transactions</div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Date Filter</div>
                    <div class="field-input">
                      <select>
                        <option>None</option>
                        <option>In the last month</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Amount Filter</div>
                    <div class="field-input">
                      <select>
                        <option>None</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Status Filter</div>
                    <div class="field-input">
                      <select>
                        <option>None</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Refunded Filter</div>
                    <div class="field-input">
                      <select>
                        <option>None</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Captured Filter</div>
                    <div class="field-input">
                      <select>
                        <option>None</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Disputed Filter</div>
                    <div class="field-input">
                      <select>
                        <option>None</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Payment Source Filter</div>
                    <div class="field-input">
                      <select>
                        <option>None</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Currency Filter</div>
                    <div class="field-input">
                      <select>
                        <option>None</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Cryptocurrency Filter</div>
                    <div class="field-input">
                      <select>
                        <option>None</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Amount</th>
                        <th>Description</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th width="330px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>$983.34 USD</td>
                        <td>Test Payment</td>
                        <td>Mike Oldfield</td>
                        <td>12.12.18 08:32</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn corporate-transaction-button-detail">View Payment Details</div>
                          <div class="block-btn small-btn table-option-btn corporate-transaction-button-refund">Refund Payment</div>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>$983.34 USD</td>
                        <td>Test Payment</td>
                        <td>Mike Oldfield</td>
                        <td>12.12.18 08:32</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn corporate-transaction-button-detail">View Payment Details</div>
                          <div class="block-btn small-btn table-option-btn corporate-transaction-button-refund">Refund Payment</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-transaction-button-prev">Prev</div>
                  <div class="block-btn small-btn corporate-transaction-button-next">Next</div>
                  <div class="block-btn small-btn corporate-transaction-button-export">Export</div>
                </div>
              </div>
              <div class="corporate-transaction-content corporate-transaction-payment-details">
                <div class="block-row">
                  <span class="radio-grp">
                    <span class="radio-item corporate-transaction-details-selection" fid="corporate-transaction-details-payment">Payment Details</span>
                    <span class="radio-item corporate-transaction-details-selection" fid="corporate-transaction-details-card">Card Details</span>
                  </span>
                </div>
                <div class="corporate-transaction-details" id="corporate-transaction-details-payment">
                  <div class="block-row-title-outside">Payment Details</div>
                  <div class="message-box message-notice">
                    <div class="message-description">
                      Payment is disputed.<br>The cardholder doesn't recognize this charge and reportedit as fraudulent.
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Amount</div>
                      <div class="field-title">$99.99 USD</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Payment Successed</div>
                      <div class="field-title">2018 / 03 / 20 12:34:56</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Risk Evaluation</div>
                      <div class="field-title">Normal</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">ID</div>
                      <div class="field-title">ch_asdfasdfasdf</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Statement Descriptor</div>
                      <div class="field-title">Test Payment</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Fee</div>
                      <div class="field-title">$9.99 USD</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Net</div>
                      <div class="field-title">$90.00 USD</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Description</div>
                      <div class="field-title">Test 2</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Deposit Method</div>
                      <div class="field-title">No Method</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Metadata</div>
                      <div class="field-title">No Metadata</div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Processor ID</div>
                      <div class="field-title">asdfasdf12</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Wallet ID</div>
                      <div class="field-title">asdfasfd12</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Transaction ID</div>
                      <div class="field-title">asdfasdf12</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Fail Reason</div>
                      <div class="field-title">No Data</div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Transaction Type</div>
                      <div class="field-title">Payment</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Email</div>
                      <div class="field-title">myemail@gmail.com</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Fees</div>
                      <div class="field-title">$0.02 USD</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Rolling Reserves</div>
                      <div class="field-title">None</div>
                    </div>
                  </div>
                  <div class="block-row margin-top-15">
                    <div class="block-btn small-btn corporate-transaction-button-refund">Refund</div>
                    <div class="block-btn small-btn corporate-transaction-button-evidence">Submit Evidence</div>
                    <div class="block-btn small-btn corporate-transaction-button-dispute">Accept Dispute</div>
                    <div class="block-btn small-btn corporate-transaction-button-addnote">+ Add Note</div>
                  </div>
                </div>
                <div class="corporate-transaction-details" id="corporate-transaction-details-card">
                  <div class="block-row-title-outside">Card Details</div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Card Id</div>
                      <div class="field-title">card_asdf1234asdf1234</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Email History</div>
                      <div class="field-title">No email sent</div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Card Holdername</div>
                      <div class="field-title">David Jones</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Card Number</div>
                      <div class="field-title">xxxx 2384</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Fingerprint</div>
                      <div class="field-title">sFxaaaaaa</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Expiration Date</div>
                      <div class="field-title">12 / 2018</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Card Type</div>
                      <div class="field-title"></div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Address</div>
                      <div class="field-title">42, Wall... address</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Origin</div>
                      <div class="field-title">United States</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">CVC Check</div>
                      <div class="field-title">Passed</div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Zip Check</div>
                      <div class="field-title">Passed</div>
                    </div>
                  </div>
                  <div class="row">
                    <table class="list-table">
                      <thead>
                        <tr>
                          <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                          <th>Log info</th>
                          <th width="120px">Date</th>
                          <th width="70px">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox" class="table-select"></td>
                          <td>200 OK ... log info</td>
                          <td>12.12.18 08:32</td>
                          <td>
                            <div class="block-btn small-btn table-option-btn table-option-delete">Delete</div>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="table-select"></td>
                          <td>200 OK ... log info</td>
                          <td>12.12.18 08:32</td>
                          <td>
                            <div class="block-btn small-btn table-option-btn table-option-delete">Delete</div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="row">
                    <table class="list-table">
                      <thead>
                        <tr>
                          <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                          <th>Event info</th>
                          <th width="120px">Date</th>
                          <th width="70px">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox" class="table-select"></td>
                          <td>200 OK ... event info</td>
                          <td>12.12.18 08:32</td>
                          <td>
                            <div class="block-btn small-btn table-option-btn table-option-delete">Delete</div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="block-row margin-top-15">
                    <div class="block-btn small-btn corporate-transaction-button-view-receipt">View Receipt</div>
                    <div class="block-btn small-btn corporate-transaction-button-send-receipt">Send Receipt</div>
                  </div>
                </div>
              </div>
              <div class="corporate-transaction-content corporate-transaction-refund-payment">
                <div class="block-row-title-outside">Refund Payment</div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Refund</div>
                    <div class="field-input">
                      <input type="text" value="$99.99 USD" placeholder="Enter Refund Amount">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Reson</div>
                    <div class="field-input">
                      <select><option>Requested by customer</option></select>
                    </div>
                  </div>
                </div>
                <div class="message-box message-notice">
                  <div class="message-description">
                    Refunds take between 5~10 days to appear<br>on a customers statement
                  </div>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-transaction-button-cancel-refund">Cancel</div>
                  <div class="block-btn small-btn corporate-transaction-button-submit-refund">Refund</div>
                </div>
              </div>
              <div class="corporate-transaction-content corporate-transaction-view-receipt">
                <div class="block-row-title-outside">Receipt</div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Amount</div>
                    <div class="field-title">$99.99 USD</div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Card info</div>
                    <div class="field-title">daviv card</div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Date</div>
                    <div class="field-title">2018 / 03 / 20 12:34:56</div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">ID</div>
                    <div class="field-title">#1234-5678</div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Description</div>
                    <div class="field-title">Test Payment</div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Total</div>
                    <div class="field-title">$99.99 USD</div>
                  </div>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-transaction-button-send-receipt">Send Receipt</div>
                  <div class="block-btn small-btn corporate-transaction-button-done-receipt">Done</div>
                </div>
              </div>
              <div class="corporate-transaction-content corporate-transaction-send-receipt">
                <div class="block-row-title-outside">Send Receipt</div>
                <div class="message-box message-notice">
                  <div class="message-description line-1">
                    Separate multiple email addresses with commas
                  </div>
                </div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Send Receipt to</div>
                    <div class="field-input field-note">
                      <input type="text" value="davidjonse@gmail.com, realadam@gmail.com">
                    </div>
                  </div>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-transaction-button-cancel-receipt">Cancel</div>
                  <div class="block-btn small-btn corporate-transaction-button-submit-receipt">Send</div>
                </div>
              </div>
            </div>
            <div class="action-block action-corporate-" id="corporate-action-block-balance">
              <div class="block-row-title-outside">Balance</div>
              <div class="block-title-highlight">USD Balance</div>
              <div class="block-row">
                <div class="field-groups">
                  <div class="field-group">
                    <div class="field-name">Funds in wallet</div>
                    <div class="field-title">$1,234.56</div>
                  </div>
                </div>
                <div class="field-groups">
                  <div class="field-group">
                    <div class="field-name">Funds in old</div>
                    <div class="field-title">$123.45</div>
                  </div>
                </div>
                <div class="field-groups">
                  <div class="field-group">
                    <div class="field-name">Funds on the way to your bank</div>
                    <div class="field-title">$12,345.67</div>
                  </div>
                </div>
              </div>
              <div class="block-title-highlight">EUR Balance</div>
              <div class="block-row">
                <div class="field-groups">
                  <div class="field-group">
                    <div class="field-name">Funds in wallet</div>
                    <div class="field-title">$1,234.56</div>
                  </div>
                </div>
                <div class="field-groups">
                  <div class="field-group">
                    <div class="field-name">Funds in old</div>
                    <div class="field-title">$123.45</div>
                  </div>
                </div>
                <div class="field-groups">
                  <div class="field-group">
                    <div class="field-name">Funds on the way to your bank</div>
                    <div class="field-title">$12,345.67</div>
                  </div>
                </div>
              </div>
              <div class="block-title-highlight">GPB Balance</div>
              <div class="block-row">
                <div class="field-groups">
                  <div class="field-group">
                    <div class="field-name">Funds in wallet</div>
                    <div class="field-title">$1,234.56</div>
                  </div>
                </div>
                <div class="field-groups">
                  <div class="field-group">
                    <div class="field-name">Funds in old</div>
                    <div class="field-title">$123.45</div>
                  </div>
                </div>
                <div class="field-groups">
                  <div class="field-group">
                    <div class="field-name">Funds on the way to your bank</div>
                    <div class="field-title">$12,345.67</div>
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="block-btn small-btn corporate-balance-button-add-bank-account">Add bank account</div>
                <div class="block-btn small-btn corporate-balance-button-add-withdraw-funds">Add withdraw funds</div>
              </div>
            </div>
            <div class="action-block action-corporate-" id="corporate-action-block-create-payment">
              <div class="block-row-title-outside">Create a New Payment</div>
              <div class="block-row">
                <div class="field-group">
                  <div class="field-name">Choose Currency</div>
                  <div class="field-input">
                    <select id="fiat-debit">
                      <option>US Dollar</option>
                    </select>
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name">Amount</div>
                  <div class="field-input">
                    <input type="text" value="$99.99 USD" placeholder="Enter Amount">
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name">Card Number</div>
                  <div class="field-input">
                    <input type="text" value="1234 1234 1234 1234" placeholder="Enter Card Number">
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name">Expiration Date</div>
                  <div class="field-input">
                    <input type="date">
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name">CVC / CVV</div>
                  <div class="field-input">
                    <input type="password" value="123">
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="field-group">
                  <div class="field-name">Cardholder Name</div>
                  <div class="field-input">
                    <input type="text" value="Igor Aaa" placeholder="Enter Cardholder Name">
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name">Description</div>
                  <div class="field-input field-note">
                    <input type="text" value="" placeholder="Enter Description">
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name">Email for receipt</div>
                  <div class="field-input">
                    <input type="text" value="myemail@gmail.com" placeholder="Enter Card Email">
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="field-group">
                  <div class="field-name">Country</div>
                  <div class="field-input">
                    <select class="select-country"></select>
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name">State/Province</div>
                  <div class="field-input">
                    <select class="select-state"></select>
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name">City</div>
                  <div class="field-input">
                    <select class="select-city"></select>
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name">Address</div>
                  <div class="field-input">
                    <input type="text" placeholder="Enter Address">
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name">Zip Code</div>
                  <div class="field-input">
                    <input type="text" placeholder="Enter Zip Code">
                  </div>
                </div>
              </div>
              <div class="block-row">
                <div class="block-btn small-btn goto-section" sid="crypto-wallet">Cancel</div>
                <div class="block-btn small-btn goto-section" sid="crypto-wallet">Create Payment</div>
              </div>
            </div>
            <div class="action-block action-corporate-" id="corporate-action-block-disputes">
              <div class="corporate-disputes-content corporate-disputes-table">
                <div class="block-row-title-outside">Corporate Account Disputes</div>
                <div class="block-row">
                  <div class="field-name">Search</div>
                  <div class="filter-col search-input">
                    <input type="text" class="filter-option" placeholder="Search for Disputes">
                  </div>
                </div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Reason</div>
                    <div class="field-input">
                      <select><option>Incorrect account details</option></select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Status</div>
                    <div class="field-input">
                      <select><option>Needs response</option></select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Amount</div>
                    <div class="field-input field-opt-number">
                      <select>
                        <option>is equal to</option>
                        <option>is less than</option>
                        <option>is greater than</option>
                        <option>is between</option>
                        <option>None</option>
                      </select>
                      <input type="text">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Disputed Date</div>
                    <div class="field-input field-number">
                      in the last <input type="text"> days
                    </div>
                  </div>
                </div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Reason</th>
                        <th>Description</th>
                        <th>Customer</th>
                        <th>Transaction Date</th>
                        <th>Date Disputed</th>
                        <th>Respond by</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>$983.34 USD</td>
                        <td>Need Response</td>
                        <td>fraudulent</td>
                        <td>Test Dispute</td>
                        <td>John David</td>
                        <td>12.12.18 08:32</td>
                        <td>12.12.18 08:32</td>
                        <td>12.12.18 08:32</td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>$983.34 USD</td>
                        <td>Need Response</td>
                        <td>fraudulent</td>
                        <td>Test Dispute</td>
                        <td>John David</td>
                        <td>12.12.18 08:32</td>
                        <td>12.12.18 08:32</td>
                        <td>12.12.18 08:32</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row">
                  <div class="block-btn small-btn corporate-dispute-button-prev">Prev</div>
                  <div class="block-btn small-btn corporate-dispute-button-next">Next</div>
                  <div class="block-btn small-btn corporate-dispute-button-export">Export</div>
                </div>
              </div>
              <div class="corporate-disputes-content corporate-disputes-view">
                <div class="block-row-title-outside">Respond to dispute</div>
                <div class="row">
                  <div class="col col-sm-6">
                    <div class="field-title">
                      Dispute reason: <span>Fraudulent</span>
                    </div>
                    <div class="field-value multiline dispute-value">
                      The owner of the card claims that they did not authorize this change. This can happen if the card was stolen. It might be because the owner did not recognize the change as it appears on the billing statement of their bank.
                    </div>
                  </div>
                  <div class="col col-sm-6">
                    <div class="field-title">
                      What should you do?
                    </div>
                    <div class="field-value multiline dispute-value">
                      Provide as much evidence as you can in the form below to show that the owner of the card did in fact authorize this change. This can include any communication you had with the cardholder, acknowledging their purchase or this change. This can include communication you had with the cardholder, acknowledging their purchase or receipt of the product or service, and/or proof that the cardholder received and/or used the product or service.
                    </div>
                  </div>
                </div>
                <div class="field-title">
                  I porvided the customer with
                </div>
                <span class="radio-grp">
                  <span class="radio-item corporate-dispute-selection radio-selected" fid="corporate-dispute-goods">Physical goods</span>
                  <span class="radio-item corporate-dispute-selection" fid="corporate-dispute-product">Digital Products</span>
                  <span class="radio-item corporate-dispute-selection" fid="corporate-dispute-online">Online Services</span>
                  <span class="radio-item corporate-dispute-selection" fid="corporate-dispute-offline">Offline Services</span>
                  <span class="radio-item corporate-dispute-selection" fid="corporate-dispute-financial">Financial/Forex</span>
                </span>
                <div class="corporate-dispute-content" id="corporate-dispute-goods">
                  <div class="block-row">
                    <div class="message-box message-notice">
                      <div class="message-description">
                        This includes anything that was physically delivered or shipped to the customer.<br>For example: clothing or electronics
                      </div>
                    </div>
                  </div>
                  <div class="block-title-outside">Customer Information</div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Customer Name</div>
                      <div class="field-input">
                        <input type="text" value="John Davis" placeholder="Enter Customer Name">
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Customer Email</div>
                      <div class="field-input">
                        <input type="text" value="johndavis@gmail.com" placeholder="Enter Customer Email">
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Customer Signature</div>
                      <div class="field-value">
                        <div class="signature uploader-penSignature">
                          <div class="uploader-panel"></div>
                          <div class="preview-image"></div>
                        </div>
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">&nbsp;</div>
                      <div class="field-value">
                        <div class="uploader uploader-fileSignature">
                          <div class="uploader-panel"></div>
                          <div class="preview-image"></div>
                          <input type="file" name="fileSignature" id="fileSignature">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="block-title-outside">Billing Address</div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Street Name</div>
                      <div class="field-input">
                        <input type="text" value="" placeholder="Enter Street Name">
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Apartment/sute number</div>
                      <div class="field-input">
                        <input type="text" value="" placeholder="">
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">City</div>
                      <div class="field-input">
                        <input type="text" value="" placeholder="Enter City">
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Zip code</div>
                      <div class="field-input">
                        <input type="text" value="" placeholder="Enter Zip code">
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Country</div>
                      <div class="field-input">
                        <select class="select-country">
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Customer communication</div>
                      <div class="field-value">
                        <div class="uploader uploader-comm">
                          <div class="uploader-panel"></div>
                          <div class="preview-image"></div>
                          <input type="file" name="fileComm" id="fileComm">
                        </div>
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">IP Address</div>
                      <div class="field-input">
                        <input type="text" value="" placeholder="Enter IP Address">
                      </div>
                    </div>
                  </div>
                  <div class="block-title-outside">Shipping information</div>
                  <div class="block-row">
                    <div class="message-box message-notice">
                      <div class="message-description">
                        Provide shipping information for any physical products that were shipped <br>to help prove the customer did indeed receive the items they purchased.
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Proof of shipping <i class="fa fa-info-circle"><div class="setting-info">Provide shipping information for any physical products that were shipped to help prove the customer did indeed receive the items they purchased.</div></i></div>
                      <div class="field-value">
                        <div class="uploader uploader-proof">
                          <div class="uploader-panel"></div>
                          <div class="preview-image"></div>
                          <input type="file" name="fileProof" id="fileProof">
                        </div>
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Date of shipping</div>
                      <div class="field-value">
                        12.12.18 12:34
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Package carrier</div>
                      <div class="field-value">
                        Feedex
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Tracking Number</div>
                      <div class="field-value">
                        1234567890
                      </div>
                    </div>
                  </div>
                  <div class="block-title-outside">Shipping Address</div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Street Name</div>
                      <div class="field-input">
                        <input type="text" value="" placeholder="Enter Street Name">
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Apartment/sute number</div>
                      <div class="field-input">
                        <input type="text" value="" placeholder="">
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">City</div>
                      <div class="field-input">
                        <input type="text" value="" placeholder="Enter City">
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Zip code</div>
                      <div class="field-input">
                        <input type="text" value="" placeholder="Enter Zip code">
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Country</div>
                      <div class="field-input">
                        <select class="select-country">
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="block-title-outside">Additional Information <i class="fa fa-info-circle"><div class="setting-info">Please provide any additional relevent information that you'd like the cardholder's bank to see either as text or upload document.</div></i></div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Upload file</div>
                      <div class="field-value">
                        <div class="uploader uploader-additional">
                          <div class="uploader-panel"></div>
                          <div class="preview-image"></div>
                          <input type="file" name="fileGoodsAdditional" id="fileGoodsAdditional">
                        </div>
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Text Description</div>
                      <div class="field-input field-note">
                        <input type="text" placeholder="Enter Description">
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="message-box message-notice">
                      <div class="message-description">
                        When you submit your evidence, we'll compile it and send it to the cardholder's bank, and then email you once the dispute has been decided.<br>All evidence submission is final.<br>You can also save this evidence report for further editing or later submission.
                      </div>
                    </div>
                  </div>
                  <div class="block-row margin-top-15">
                    <div class="block-btn small-btn corporate-dispute-physical-button-save">Save for Later</div>
                    <div class="block-btn small-btn corporate-dispute-physical-button-submit">Submit Evidence Now</div>
                  </div>
                </div>
                <div class="corporate-dispute-content" id="corporate-dispute-product">
                  <div class="field-value multiline dispute-value">
                    Access to software, files or digital experience. For example apps or downloadables. (No shipping information for digital products but rest the same + added below access information.)<br>
                    Access information: Please provider server or activity log that will help prove the customer accessed or download the purchased digital product. These log should include IP addresses, corresponding timestamps, and any detailed Recorded activity.
                  </div>
                  <div class="block-title-outside">Additional Information <i class="fa fa-info-circle"><div class="setting-info">Please provide any additional relevent information that you'd like the cardholder's bank to see either as text or upload document.</div></i></div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Upload file</div>
                      <div class="field-value">
                        <div class="uploader uploader-additional">
                          <div class="uploader-panel"></div>
                          <div class="preview-image"></div>
                          <input type="file" name="fileProductAdditional" id="fileProductAdditional">
                        </div>
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Text Description</div>
                      <div class="field-input field-note">
                        <input type="text" placeholder="Enter Description">
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="message-box message-notice">
                      <div class="message-description">
                        When you submit your evidence, we'll compile it and send it to the cardholder's bank, and then email you once the dispute has been decided.<br>All evidence submission is final.<br>You can also save this evidence report for further editing or later submission.
                      </div>
                    </div>
                  </div>
                  <div class="block-row margin-top-15">
                    <div class="block-btn small-btn corporate-dispute-physical-button-save">Save for Later</div>
                    <div class="block-btn small-btn corporate-dispute-physical-button-submit">Submit Evidence Now</div>
                  </div>
                </div>
                <div class="corporate-dispute-content" id="corporate-dispute-online">
                  <div class="field-value multiline dispute-value">
                    For example website or app development (no shipping info for offline services but rest is the same + added below service info).
                  </div>
                  <div class="block-title-outside">Service Information</div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Proof of service <i class="fa fa-info-circle"><div class="setting-info">This document could include a copy of a signed agreement or contract, work order etc, and should prove that a service was provided to the customer.</div></i></div>
                      <div class="field-value">
                        <div class="uploader uploader-additional">
                          <div class="uploader-panel"></div>
                          <div class="preview-image"></div>
                          <input type="file" name="fileOnlineService" id="fileOnlineService">
                        </div>
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Date of service</div>
                      <div class="field-value">
                        12.12.18 17:45
                      </div>
                    </div>
                  </div>
                  <div class="block-title-outside">Additional Information <i class="fa fa-info-circle"><div class="setting-info">Please provide any additional relevent information that you'd like the cardholder's bank to see either as text or upload document.</div></i></div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Upload file</div>
                      <div class="field-value">
                        <div class="uploader uploader-additional">
                          <div class="uploader-panel"></div>
                          <div class="preview-image"></div>
                          <input type="file" name="fileOnlineAdditional" id="fileOnlineAdditional">
                        </div>
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Description</div>
                      <div class="field-input field-note">
                        <input type="text" placeholder="Enter text">
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="message-box message-notice">
                      <div class="message-description">
                        When you submit your evidence, we'll compile it and send it to the cardholder's bank, and then email you once the dispute has been decided.<br>All evidence submission is final.<br>You can also save this evidence report for further editing or later submission.
                      </div>
                    </div>
                  </div>
                  <div class="block-row margin-top-15">
                    <div class="block-btn small-btn corporate-dispute-physical-button-save">Save for Later</div>
                    <div class="block-btn small-btn corporate-dispute-physical-button-submit">Submit Evidence Now</div>
                  </div>
                </div>
                <div class="corporate-dispute-content" id="corporate-dispute-offline">
                  <div class="field-value multiline dispute-value">
                    Labor or assistance provided on location or remotely. For example: Repair or transpotation service (no shipping info for offline services but rest is the same + added below service info).
                  </div>
                  <div class="block-title-outside">Service Information</div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Proof of service <i class="fa fa-info-circle"><div class="setting-info">This document could include a copy of a signed agreement or contract, work order etc, and should prove that a service was provided to the customer.</div></i></div>
                      <div class="field-value">
                        <div class="uploader uploader-additional">
                          <div class="uploader-panel"></div>
                          <div class="preview-image"></div>
                          <input type="file" name="fileOfflineService" id="fileOfflineService">
                        </div>
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Date of service</div>
                      <div class="field-value">
                        12.12.18 17:45
                      </div>
                    </div>
                  </div>
                  <div class="block-title-outside">Additional Information <i class="fa fa-info-circle"><div class="setting-info">Please provide any additional relevent information that you'd like the cardholder's bank to see either as text or upload document.</div></i></div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Upload file</div>
                      <div class="field-value">
                        <div class="uploader uploader-additional">
                          <div class="uploader-panel"></div>
                          <div class="preview-image"></div>
                          <input type="file" name="fileOfflineAdditional" id="fileOfflineAdditional">
                        </div>
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Description</div>
                      <div class="field-input field-note">
                        <input type="text" placeholder="Enter text">
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="message-box message-notice">
                      <div class="message-description">
                        When you submit your evidence, we'll compile it and send it to the cardholder's bank, and then email you once the dispute has been decided.<br>All evidence submission is final.<br>You can also save this evidence report for further editing or later submission.
                      </div>
                    </div>
                  </div>
                  <div class="block-row margin-top-15">
                    <div class="block-btn small-btn corporate-dispute-physical-button-save">Save for Later</div>
                    <div class="block-btn small-btn corporate-dispute-physical-button-submit">Submit Evidence Now</div>
                  </div>
                </div>
                <div class="corporate-dispute-content" id="corporate-dispute-financial">
                  <div class="field-value multiline dispute-value">
                    No shipping info or offline services but rest is the same + added KYC info.<br>KYC Information - Please provide all "Know Your Customer" documentation including driver's license, passport, utillity bill, corporate documents, any purchased and sales agreements, bonus agreements and any signed documentation.
                  </div>
                  <div class="block-title-outside">Service Information</div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Proof of service <i class="fa fa-info-circle"><div class="setting-info">This document could include a copy of a signed agreement or contract, work order etc, and should prove that a service was provided to the customer.</div></i></div>
                      <div class="field-value">
                        <div class="uploader uploader-additional">
                          <div class="uploader-panel"></div>
                          <div class="preview-image"></div>
                          <input type="file" name="fileFinanceService" id="fileFinanceService">
                        </div>
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Date of service</div>
                      <div class="field-value">
                        12.12.18 17:45
                      </div>
                    </div>
                  </div>
                  <div class="block-title-outside">Additional Information <i class="fa fa-info-circle"><div class="setting-info">Please provide any additional relevent information that you'd like the cardholder's bank to see either as text or upload document.</div></i></div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Upload file</div>
                      <div class="field-value">
                        <div class="uploader uploader-additional">
                          <div class="uploader-panel"></div>
                          <div class="preview-image"></div>
                          <input type="file" name="fileFinanceAdditional" id="fileFinanceAdditional">
                        </div>
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Description</div>
                      <div class="field-input field-note">
                        <input type="text" placeholder="Enter text">
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="message-box message-notice">
                      <div class="message-description">
                        When you submit your evidence, we'll compile it and send it to the cardholder's bank, and then email you once the dispute has been decided.<br>All evidence submission is final.<br>You can also save this evidence report for further editing or later submission.
                      </div>
                    </div>
                  </div>
                  <div class="block-row margin-top-15">
                    <div class="block-btn small-btn corporate-dispute-physical-button-save">Save for Later</div>
                    <div class="block-btn small-btn corporate-dispute-physical-button-submit">Submit Evidence Now</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="action-block action-corporate-" id="corporate-action-block-customers">
              <div class="corporate-customers-content corporate-customers-table">
                <div class="block-row-title-outside">Customers</div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Search</div>
                    <div class="filter-col search-input">
                      <input type="text" class="filter-option" placeholder="Search for Transactions">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Time Period</div>
                    <div class="field-input">
                      <input type="datetime-local">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Cryptocurrency Filter</div>
                    <div class="field-input">
                      <select>
                        <option>Bitcoin(BTC)</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Customer</th>
                        <th>Card</th>
                        <th>Created</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>johndavid@gmail.com - cusMikeOldfield</td>
                        <td>xxxx 9876</td>
                        <td>12.12.18 08:32</td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>johndavid@gmail.com - cusMikeOldfield</td>
                        <td>xxxx 9876</td>
                        <td>12.12.18 08:32</td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>johndavid@gmail.com - cusMikeOldfield</td>
                        <td>xxxx 9876</td>
                        <td>12.12.18 08:32</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-customers-button-prev">Prev</div>
                  <div class="block-btn small-btn corporate-customers-button-next">Next</div>
                  <div class="block-btn small-btn corporate-customers-button-export">Export</div>
                  <div class="block-btn small-btn corporate-customers-button-new-customer">+ New Customer</div>
                </div>
              </div>
              <div class="corporate-customers-content corporate-customers-view">
                <div class="block-row-title-outside">johndavid@gmail.com</div>
                <div class="block-title-highlight">Account info</div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">ID</div>
                    <div class="field-title">cusMikeOldfield</div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Created</div>
                    <div class="field-title">2018 / 03 / 20 12:34:56</div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Email</div>
                    <div class="field-title">johndavid@gmail.com</div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Description</div>
                    <div class="field-title">John David - Customer</div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">VAT ID</div>
                    <div class="field-title">No VAT ID</div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Send email to</div>
                    <div class="field-title">johndavid@gmail.com</div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Metadata</div>
                    <div class="field-title">No metadata</div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Role</div>
                    <div class="field-title">Customer</div>
                  </div>
                </div>
                <div class="block-title-highlight">Payment Details</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Card Info</th>
                        <th width="160px">Date</th>
                        <th width="280px" class="align-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>Visa xxxx 4242 11/2018</td>
                        <td>12.12.18 08:32</td>
                        <td class="align-right">
                          <div class="block-btn small-btn table-option-btn">Delete</div>
                          <div class="block-btn small-btn table-option-btn">Edit</div>
                          <div class="block-btn small-btn table-option-btn">+ Add Card</div>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="table-select" checked></td>
                        <td>Visa xxxx 4242 11/2018 <span class="corporate-default-card">Default</span></td>
                        <td>12.12.18 08:32</td>
                        <td class="align-right">
                          <div class="block-btn small-btn table-option-btn">Delete</div>
                          <div class="block-btn small-btn table-option-btn">Edit</div>
                          <div class="block-btn small-btn table-option-btn">+ Add Card</div>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>Visa xxxx 4242 11/2018</td>
                        <td>12.12.18 08:32</td>
                        <td class="align-right">
                          <div class="block-btn small-btn table-option-btn">Delete</div>
                          <div class="block-btn small-btn table-option-btn">Edit</div>
                          <div class="block-btn small-btn table-option-btn">+ Add Card</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-title-outside">Bank Accounts</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Bank Account Info</th>
                        <th width="160px">Date</th>
                        <th width="280px" class="align-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>1234 1234 1234 1234</td>
                        <td>12.12.18 08:32</td>
                        <td class="align-right">
                          <div class="block-btn small-btn table-option-btn">Delete</div>
                          <div class="block-btn small-btn table-option-btn">+ Add Bank Account</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-title-outside">Sources</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Source Info</th>
                        <th width="160px">Date</th>
                        <th width="280px" class="align-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="align-center" colspan=3>No Sources</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-title-outside">Payments</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Payment Info</th>
                        <th width="160px">Date</th>
                        <th width="280px" class="align-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="align-center" colspan=3>No Sources</td>
                        <td class="align-right">
                          <div class="block-btn small-btn table-option-btn">+ Add Payment</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-title-outside">Active Subscriptions</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Subscription Info</th>
                        <th width="160px">Date</th>
                        <th width="280px" class="align-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="align-center" colspan=3>No Active Subscriptions</td>
                        <td class="align-right">
                          <div class="block-btn small-btn table-option-btn">+ Add Subscription</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-title-outside">Invoices</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Invoice Info</th>
                        <th width="160px">Date</th>
                        <th width="280px" class="align-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="align-center" colspan=3>No Invoices</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-title-outside">Pending Invoice Items</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Invoice Item Info</th>
                        <th width="160px">Date</th>
                        <th width="280px" class="align-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="align-center" colspan=3>No Pending Invoice Items</td>
                        <td class="align-right">
                          <div class="block-btn small-btn table-option-btn">+ Add Invoice Item</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-title-outside">Upcoming Invoice</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Subscription Info</th>
                        <th width="160px">Date</th>
                        <th width="280px" class="align-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="align-center" colspan=3>No Upcoming Invoice</td>
                        <td class="align-right">
                          <div class="block-btn small-btn table-option-btn">+ Add Subscription</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-title-outside">Others</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Others Info</th>
                        <th width="160px">Date</th>
                        <th width="280px" class="align-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="align-center" colspan=3>No Others</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-title-outside">Discoint</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Discoint Info</th>
                        <th width="160px">Date</th>
                        <th width="280px" class="align-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="align-center" colspan=3>No Active Coupon</td>
                        <td class="align-right">
                          <div class="block-btn small-btn table-option-btn">+ Add Coupon</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-title-outside">Logs</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Log Info</th>
                        <th width="160px">Date</th>
                        <th width="280px" class="align-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>200 OK ... log</td>
                        <td>12.12.18 08:32</td>
                        <td class="align-right">
                          <div class="block-btn small-btn table-option-btn">Delete</div>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>200 OK ... log</td>
                        <td>12.12.18 08:32</td>
                        <td class="align-right">
                          <div class="block-btn small-btn table-option-btn">Delete</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-title-outside">Events</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Event Info</th>
                        <th width="160px">Date</th>
                        <th width="280px" class="align-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>A successful ... event</td>
                        <td>12.12.18 08:32</td>
                        <td class="align-right">
                          <div class="block-btn small-btn table-option-btn">Delete</div>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>A successful ... event</td>
                        <td>12.12.18 08:32</td>
                        <td class="align-right">
                          <div class="block-btn small-btn table-option-btn">Delete</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-customer-view-button-back">Back</div>
                  <div class="block-btn small-btn corporate-customer-view-button-addnote">+ Add Note</div>
                </div>
              </div>
            </div>
            <div class="action-block action-corporate-" id="corporate-action-block-substriptions">
              <div class="corporate-subscription-content corporate-subscription-table">
                <div class="block-row-title-outside">Subscriptions</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Customer</th>
                        <th>Status</th>
                        <th>Billing</th>
                        <th>Product</th>
                        <th>Created</th>
                        <th width="400px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>johndavis@gmail.com</td>
                        <td>Training</td>
                        <td>Auto</td>
                        <td>Test product</td>
                        <td>2018/03/25 19:00</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn corporate-subscription-button-cancel">Cancel</div>
                          <div class="block-btn small-btn table-option-btn corporate-subscription-button-edit">Edit</div>
                          <div class="block-btn small-btn table-option-btn corporate-subscription-button-view-customer">View Customer</div>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>danjones@gmail.com</td>
                        <td>Active</td>
                        <td>Auto</td>
                        <td>Doggy cideo</td>
                        <td>2018/04/02 11:45</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn corporate-subscription-button-cancel">Cancel</div>
                          <div class="block-btn small-btn table-option-btn corporate-subscription-button-edit">Edit</div>
                          <div class="block-btn small-btn table-option-btn corporate-subscription-button-view-customer">View Customer</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-subscription-button-prev">Prev</div>
                  <div class="block-btn small-btn corporate-subscription-button-next">Next</div>
                  <div class="block-btn small-btn corporate-subscription-button-new-subscription">+ Add New Subscription</div>
                </div>
              </div>
              <div class="corporate-subscription-content corporate-subscription-create-new">
                <div class="block-row-title-outside">Create a new subscription</div>
                <div class="block-row-subtitle">Add Customer</div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">
                      Select Customers <i class="fa fa-info-circle"><div class="setting-info">You must add one or more customers</div></i>
                    </div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Customer Name" class="input4select input4select-multiple">
                    </div>
                  </div>
                  <div class="input4selected-items">
                    <div class="input4selected-item">
                      john_dornberg@outlook.com
                    </div>
                    <div class="input4selected-item">
                      john_dornberg@outlook.com
                    </div>
                    <div class="input4selected-item">
                      john_dornberg@outlook.com
                    </div>
                  </div>
                </div>
                <div class="block-row-subtitle margin-top-15">Add Product</div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">
                      Select Products <i class="fa fa-info-circle"><div class="setting-info">You must add one or more products</div></i>
                    </div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Product Name" class="input4select input4select-multiple">
                    </div>
                  </div>
                  <div class="input4selected-items">
                    <div class="input4selected-item">
                      Test product
                    </div>
                    <div class="input4selected-item">
                      Test product
                    </div>
                    <div class="input4selected-item">
                      Test product
                    </div>
                  </div>
                </div>
                <div class="block-row-subtitle margin-top-15">Add Pricing</div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">
                      Payment price
                    </div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Price">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">
                      Payment Period
                    </div>
                    <div class="field-input">
                      <select>
                        <option>Month</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">
                      Quantity
                    </div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Quantity">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">
                      Add coupon
                    </div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Coupon Name" class="input4select input4select-multiple">
                      <div class="input4selected-item">
                        10% Off Once
                      </div>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">
                      Add Tax
                    </div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Tax Amount">
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">
                      Trial
                    </div>
                    <div class="field-input field-number">
                      <input type="number" value=""> days free trial
                    </div>
                  </div>
                  <div class="field-group field-note">
                    <div class="field-name">&nbsp;</div>
                    <div class="field-value">
                      <label><input id="as-subscription-auto-charge" type="checkbox"> Automatically charge default payment method on file</label>
                    </div>
                  </div>
                  <div class="field-group field-note">
                    <div class="field-name">&nbsp;</div>
                    <div class="field-value">
                      <label><input id="as-subscription-email-invoice" type="checkbox"> Email invoices for customer to pay manual</label>
                    </div>
                  </div>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-subscription-button-new-cancel">Cancel</div>
                  <div class="block-btn small-btn corporate-subscription-button-new-create">Create Subscription</div>
                </div>
              </div>
              <div class="corporate-subscription-content corporate-subscription-details">
                <div class="block-row-title-outside">Subscription: <span class="subscription-title">johndavis@gmail.com on test product - test price</span></div>
                <div class="block-row-subtitle">Subscription details</div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">ID</div>
                    <div class="field-value">
                      in_asdfasdfasdf
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Customer</div>
                    <div class="field-value">
                      johndavis@gmail.com
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Created</div>
                    <div class="field-value">
                      12.12.2018 12:34
                    </div>
                  </div>
                  <div class="field-group field-note">
                    <div class="field-name">Current Period</div>
                    <div class="field-value">
                      12.12.2018 12:34 to 23.12.2018 12:34
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Subscription Status</div>
                    <div class="field-value">
                      Training
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Training Until</div>
                    <div class="field-value">
                      12.12.2018 12:34
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Tax Percent</div>
                    <div class="field-value field-value-none">
                      No tax applied
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Billing Method</div>
                    <div class="field-value field-value-none">
                      Charge Automatically
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Metadata</div>
                    <div class="field-value field-value-none">
                      No metadata
                    </div>
                  </div>
                </div>
                <div class="block-row-subtitle margin-top-15">Products</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Product &amp; Plan</th>
                        <th>Pricing details</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>Test product</td>
                        <td>$218.33 USD / month</td>
                        <td>1</td>
                        <td>$218.33 USD / month</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-subscription-details-products-prev">Prev</div>
                  <div class="block-btn small-btn corporate-subscription-details-products-next">Next</div>
                </div>
                <div class="block-row-subtitle margin-top-15">Invoices</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Sum</th>
                        <th>Status</th>
                        <th>Status</th>
                        <th>Subscription</th>
                        <th>Number</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>$0.00 USD</td>
                        <td>Paid</td>
                        <td>Auto</td>
                        <td>sub_asdfasfd</td>
                        <td>230495-3455s</td>
                        <td>$218.33 USD / month</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row-subtitle">Upcoming invoices</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th>Upcoming invoices info</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>View next invoice for $100.00 on 2018/12/12 12:34</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row-subtitle margin-top-15">Logs</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Log info</th>
                        <th>Date</th>
                        <th width="200px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>200 OK Post / v1 / customers / cus_abcdef</td>
                        <td>12.12.18 12:34</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn corporate-subscription-details-events-delete">Delete</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row-subtitle margin-top-15">Events</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Event info</th>
                        <th>Date</th>
                        <th width="200px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>A successful payment was made for $99.99</td>
                        <td>12.12.18 12:34</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn corporate-subscription-details-events-delete">Delete</div>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>johndavis@gmail.com added a new VISA endin in 4242</td>
                        <td>12.12.18 12:34</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn corporate-subscription-details-events-delete">Delete</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-subscription-details-cancel">Cancel Subscription</div>
                  <div class="block-btn small-btn corporate-subscription-details-update">Update Subscription</div>
                </div>
              </div>
            </div>
            <div class="action-block action-corporate-" id="corporate-action-block-products">
              <div class="corporate-product-content corporate-product-table">
                <div class="block-row-title-outside">Products</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Product Name</th>
                        <th>Pricing</th>
                        <th>Created</th>
                        <th width="200px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>Test product</td>
                        <td>$199.99 USD / month</td>
                        <td>12.11.2018 17:45</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn corporate-product-button-view-product-details">View Product Details</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-product-button-prev">Prev</div>
                  <div class="block-btn small-btn corporate-product-button-next">Next</div>
                  <div class="block-btn small-btn corporate-product-button-new-product">+ Add New Product</div>
                </div>
              </div>
              <div class="corporate-product-content corporate-product-details">
                <div class="block-row-title-outside">Test product</div>
                <div class="block-row-subtitle">Details</div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">ID</div>
                    <div class="field-value">
                      prod_asdfasdfasdf
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Created</div>
                    <div class="field-value">
                      12.12.2018 12:34
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Name</div>
                    <div class="field-value">
                      Once
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Statement Descriptor</div>
                    <div class="field-value">
                      1 time
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Metadata</div>
                    <div class="field-value field-value-none">
                      No Metadata
                    </div>
                  </div>
                </div>
                <div class="block-row-subtitle">Pricing plans</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Plan name</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th width="200px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>Test price</td>
                        <td>$100.00 / month</td>
                        <td>12.12.18 12:34</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn corporate-product-details-plan-delete">Delete</div>
                          <div class="block-btn small-btn table-option-btn corporate-product-details-plan-edit">Edit</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row-subtitle">Logs</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Log info</th>
                        <th>Date</th>
                        <th width="200px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>200 OK Post / v1 / customers / cus_abcdef</td>
                        <td>12.12.18 12:34</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn corporate-product-details-events-delete">Delete</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- <div class="block-row margin-top-15"> -->
                  <!-- <div class="block-btn small-btn corporate-product-details-logs-viewmore">View more</div> -->
                <!-- </div> -->
                <div class="block-row-subtitle margin-top-15">Events</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Event info</th>
                        <th>Date</th>
                        <th width="200px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>A product with ID prod_asdfasdfasdf was created</td>
                        <td>12.12.18 12:34</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn corporate-product-details-events-delete">Delete</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-product-details-back">Back</div>
                  <div class="block-btn small-btn corporate-product-details-delete">Delete product</div>
                </div>
              </div>
              <div class="corporate-product-content corporate-product-create-new">
                <div class="block-row-title-outside">Create a product</div>
                <div class="block-row">
                  <div class="message-box message-notice">
                    <div class="message-description">
                      A product is something to which your customers subscribe.<br>After creating a product, you can add pricing plans.
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">
                      Name <i class="fa fa-info-circle"><div class="setting-info">This is used in your dashboard and on customer's receipts.</div></i>
                    </div>
                    <div class="field-input">
                      <input type="text" value=10>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">
                      Statement descriptor <i class="fa fa-info-circle"><div class="setting-info">This is what appears on customer's bank statements.</div></i>
                    </div>
                    <div class="field-input">
                      <input type="text" value="1 time">
                    </div>
                  </div>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-product-button-new-cancel">Cancel</div>
                  <div class="block-btn small-btn corporate-product-button-new-create">Create Product</div>
                </div>
              </div>
              <div class="corporate-product-content corporate-product-create-plan">
                <div class="block-row-title-outside">Add pricing plan</div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">
                      Currency
                    </div>
                    <div class="field-input">
                      <select>
                        <option>US Dollar</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">
                      Pricing
                    </div>
                    <div class="field-input">
                      <input type="text" value="$299.99">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">
                      Billing interval
                    </div>
                    <div class="field-input">
                      <select>
                        <option>2d / 4w / 5months</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">
                      Free trial period (optional) <i class="fa fa-info-circle"><div class="setting-info">If a free trial is provided, subscriptions to this plan will automatically start with a free trial.</div></i>
                    </div>
                    <div class="field-input field-number">
                      <input type="number" value=""> days free trial
                    </div>
                  </div>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-product-button-newplan-cancel">Cancel</div>
                  <div class="block-btn small-btn corporate-product-button-newplan-create">Add price plan</div>
                </div>
              </div>
            </div>
            <div class="action-block action-corporate-" id="corporate-action-block-coupons">
              <div class="corporate-coupon-content corporate-coupon-table">
                <div class="block-row-title-outside">Coupons</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Coupon ID</th>
                        <th>Terms</th>
                        <th>Redemptions</th>
                        <th>Expires</th>
                        <th width="200px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>1</td>
                        <td>10% Off</td>
                        <td>10/100</td>
                        <td>12.11.2018 17:45</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn corporate-coupon-button-view-coupon-details">View Coupon Details</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-coupon-button-prev">Prev</div>
                  <div class="block-btn small-btn corporate-coupon-button-next">Next</div>
                  <div class="block-btn small-btn corporate-coupon-button-new-coupon">+ Add New Coupon</div>
                </div>
              </div>
              <div class="corporate-coupon-content corporate-coupon-details">
                <div class="block-row-title-outside">Coupon details</div>
                <div class="block-row-subtitle">Details</div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">ID</div>
                    <div class="field-value">
                      1
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Percent Off</div>
                    <div class="field-value">
                      10% Off
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Duration</div>
                    <div class="field-value">
                      Once
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Max Redemptions</div>
                    <div class="field-value">
                      1 time
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Valid</div>
                    <div class="field-value">
                      Yes
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Metadata</div>
                    <div class="field-value field-value-none">
                      No Metadata
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Active Redemptions</div>
                    <div class="field-value field-value-none">
                      No Active Redemptions
                    </div>
                  </div>
                </div>
                <div class="block-row-subtitle">Logs</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Log info</th>
                        <th>Date</th>
                        <th width="200px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>200 OK Post / v1 / customers / cus_abcdef</td>
                        <td>12.12.18 12:34</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn corporate-coupon-details-events-delete">Delete</div>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>200 OK Post / v1 / charges</td>
                        <td>12.12.18 12:34</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn corporate-coupon-details-events-delete">Delete</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-coupon-details-logs-viewmore">View more</div>
                </div>
                <div class="block-row-subtitle margin-top-15">Events</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Event info</th>
                        <th>Date</th>
                        <th width="200px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>A successful payment was made for $99.99</td>
                        <td>12.12.18 12:34</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn corporate-coupon-details-events-delete">Delete</div>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>johndavis@gmail.com added a new VISA endin in 4242</td>
                        <td>12.12.18 12:34</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn corporate-coupon-details-events-delete">Delete</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-coupon-details-back">Back</div>
                  <div class="block-btn small-btn corporate-coupon-details-events-viewmore">View more events</div>
                  <div class="block-btn small-btn corporate-coupon-details-delete">Delete coupon</div>
                </div>
              </div>
              <div class="corporate-coupon-content corporate-coupon-create-new">
                <div class="block-row-title-outside">Create New Coupon</div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">
                      Percent Off
                    </div>
                    <div class="field-input">
                      <input type="text" value=10>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">
                      Currency
                    </div>
                    <div class="field-input">
                      <select>
                        <option>US Dollar</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">
                      Duration <i class="fa fa-info-circle"><div class="setting-info">How long will coupon last once applied for customer</div></i>
                    </div>
                    <div class="field-input">
                      <select>
                        <option>Once</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group field-note">
                    <div class="field-name">
                      Time period
                    </div>
                    <div class="field-input">
                      <input type="datetime-local">
                      ~
                      <input type="datetime-local">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">
                      Coupon ID code <i class="fa fa-info-circle"><div class="setting-info">Give your coupon a unique identifier</div></i>
                    </div>
                    <div class="field-input">
                      <input type="text" value="edodmf1234asdf">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">
                      Max Redemptions <i class="fa fa-info-circle"><div class="setting-info">Coupon can only be used this many times total</div></i>
                    </div>
                    <div class="field-input">
                      <input type="text" value="4">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">
                      Redeem By <i class="fa fa-info-circle"><div class="setting-info">Coupon can only be redeemed by this date</div></i>
                    </div>
                    <div class="field-input">
                      <input type="datetime-local" value="">
                    </div>
                  </div>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-coupon-button-new-cancel">Cancel</div>
                  <div class="block-btn small-btn corporate-coupon-button-new-create">Create Coupon</div>
                </div>
              </div>
            </div>
            <div class="action-block action-corporate-" id="corporate-action-block-invoices">
              <div class="corporate-invoice-content corporate-invoice-table">
                <div class="block-row-title-outside">Invoice</div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Amount</div>
                    <div class="field-input">
                      <input type="text" value="$99.99 USD" placeholder="Enter Amount">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Create Status</div>
                    <div class="field-input">
                      <select>
                        <option>None</option>
                        <option>Created</option>
                        <option>Uncreated</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Payment Status</div>
                    <div class="field-input">
                      <select>
                        <option>None</option>
                        <option>Paid</option>
                        <option>Unpaid</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Invoice Status 1</div>
                    <div class="field-input">
                      <select>
                        <option>None</option>
                        <option>Opened</option>
                        <option>Attempted</option>
                        <option>Not forgiven</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Invoice Status 2</div>
                    <div class="field-input">
                      <select>
                        <option>None</option>
                        <option>Opened</option>
                        <option>Attempted</option>
                        <option>Not forgiven</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Invoice Status 3</div>
                    <div class="field-input">
                      <select>
                        <option>None</option>
                        <option>Opened</option>
                        <option>Attempted</option>
                        <option>Not forgiven</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Due Date</div>
                    <div class="field-input">
                      <input type="date">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Amount</th>
                        <th>Invoice Number</th>
                        <th>Customer</th>
                        <th>Payment Due</th>
                        <th>Created</th>
                        <th width="200px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>$5,483.49 USD</td>
                        <td>Aa423459-5863</td>
                        <td>johndavis@gmail.com</td>
                        <td>12.11.2018 19:00</td>
                        <td>12.12.18 17:45</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn table-invoice-option corporate-invoice-button-view-invoice">View Invoice</div>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>$5,483.49 USD</td>
                        <td>Aa423459-5863</td>
                        <td>John Davis</td>
                        <td>12.11.2018 19:00</td>
                        <td>12.12.18 17:45</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn table-invoice-option corporate-invoice-button-view-customer">View Customer</div>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>$5,483.49 USD</td>
                        <td>Aa423459-5863</td>
                        <td>John Davis</td>
                        <td>12.11.2018 19:00</td>
                        <td>12.12.18 17:45</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn table-invoice-option corporate-invoice-button-view-subscription">View Subscription</div>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>$5,483.49 USD</td>
                        <td>Aa423459-5863</td>
                        <td>John Davis</td>
                        <td>12.11.2018 19:00</td>
                        <td>12.12.18 17:45</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn table-invoice-option corporate-invoice-button-view-customer">View Customer</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-invoice-button-prev">Prev</div>
                  <div class="block-btn small-btn corporate-invoice-button-next">Next</div>
                  <div class="block-btn small-btn corporate-invoice-button-export">Export</div>
                  <div class="block-btn small-btn corporate-invoice-button-create-custom-invoice">Create Custom Invoice</div>
                </div>
              </div>
              <div class="corporate-invoice-content corporate-invoice-create-custom-invoice">
                <div class="block-row-title-outside">Invoice</div>
                <div class="block-row-subtitle">My business information</div>
                <div class="row">
                  <div class="col col-sm-2">
                    <div class="field-group field-full">
                      <div class="field-name">
                        Add company logo
                      </div>
                      <div class="field-value">
                        <div class="uploader uploader-fileCompanyLogo">
                          <div class="uploader-panel"></div>
                          <div class="preview-image"></div>
                          <input type="file" name="companyLogo" id="fileCompanyLogo" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col col-sm-10">
                    <div class="field-group">
                      <div class="field-name">
                        My Template
                      </div>
                      <div class="field-input">
                        <select>
                          <option>Quantity(default)</option>
                        </select>
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">
                        Invoice Number <i class="fa fa-info-circle"><div class="setting-info"></div></i>
                      </div>
                      <div class="field-input">
                        <input type="text" value="0001">
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">
                        Due Date
                      </div>
                      <div class="field-input">
                        <input type="date">
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">
                        Invoice Date <i class="fa fa-info-circle"><div class="setting-info"></div></i>
                      </div>
                      <div class="field-input">
                        <input type="datetime-local">
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">
                        Reference
                      </div>
                      <div class="field-input">
                        <select>
                          <option>Such as PO#</option>
                        </select>
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">
                        Bill To
                      </div>
                      <div class="field-input">
                        <input type="text" value="" placeholder="Email address or name">
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">
                        Cc
                      </div>
                      <div class="field-input">
                        <input type="text" value="" placeholder="Email addresses">
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">
                        Add bill to multiple customers <i class="fa fa-info-circle"><div class="setting-info"></div></i>
                      </div>
                      <div class="field-input">
                        <input type="text" value="" placeholder="Email addresses">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-row-subtitle">Customize</div>
                <div class="field-group">
                  <div class="field-name">
                    Quantity
                  </div>
                  <div class="field-input">
                    <select>
                      <option>Quantity(default)</option>
                    </select>
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name">
                    Add/remove detail
                  </div>
                  <div class="field-input">
                    <select>
                      <option>None</option>
                    </select>
                  </div>
                </div>
                <div class="field-group">
                  <div class="field-name">
                    Currency
                  </div>
                  <div class="field-input">
                    <select>
                      <option>USD - US Dollars</option>
                    </select>
                  </div>
                </div>
                
                <table class="list-table">
                  <thead>
                    <tr>
                      <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                      <th>Item name</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Tax</th>
                      <th>Amount</th>
                      <th>Subtotal</th>
                      <th>Discount, %</th>
                      <th>Shipping</th>
                      <th>Total</th>
                      <th width="220px">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="checkbox" class="table-select"></td>
                      <td>Enter Item Name</td>
                      <td>1</td>
                      <td>$21.33</td>
                      <td>No Tax</td>
                      <td>$21.33</td>
                      <td>$21.33</td>
                      <td>Value, %</td>
                      <td>$21.33</td>
                      <td>$21.33</td>
                      <td>
                        <div class="block-btn small-btn table-option-btn  corporate-invoice-button-remove-item">Remove Item</div>
                        <div class="block-btn small-btn table-option-btn corporate-invoice-button-add-item">Add Item</div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="row">
                  <div class="col col-sm-2">
                    <div class="field-group field-full">
                      <div class="field-name">
                        Attach files <i class="fa fa-info-circle"><div class="setting-info"></div></i>
                      </div>
                      <div class="field-value">
                        <div class="uploader uploader-fileInvoiceAttach">
                          <div class="uploader-panel"></div>
                          <div class="preview-image"></div>
                          <input type="file" name="invoiceAttach" id="fileInvoiceAttach" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col col-sm-10">
                    <div class="block-row">
                      <div class="field-group">
                        <div class="field-name">
                          Note to Recipident
                        </div>
                        <div class="field-input field-note">
                          <select>
                            <option>Quantity(default)</option>
                          </select>
                        </div>
                      </div>
                      <div class="field-group">
                        <div class="field-name">
                          Terms and Conditions
                        </div>
                        <div class="field-input field-note">
                          <input type="text" value="0001">
                        </div>
                      </div>
                    </div>
                    <div class="block-row">
                      <div class="field-group">
                        <div class="field-value">
                          <input type="checkbox"> Add memo to yourself
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-invoice-button-preview">Preview</div>
                  <div class="block-btn small-btn has-viewmore corporate-invoice-button-send">Send</div>
                  <div class="block-btn small-btn has-viewmore corporate-invoice-button-senddraft">Send as Draft</div>
                </div>
              </div>
              <div class="corporate-invoice-content corporate-invoice-preview">
                <div class="block-row-title-outside">Invoice</div>
                <div class="block-row-subtitle">Invoice Details</div>
                <div class="block-row">
                  <div class="field-group field-note">
                    <div class="field-name">ID</div>
                    <div class="field-value">
                      in_abcdefghijklmnopqrstuvwxyz
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Number</div>
                    <div class="field-value">
                      FXKS2304FSK-031
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Date</div>
                    <div class="field-value">
                      12.12.2018 12:34
                    </div>
                  </div>
                  <div class="field-group field-note">
                    <div class="field-name">Period</div>
                    <div class="field-value">
                      12.12.2018 12:34 to 12.12.2018 12:34
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Customer</div>
                    <div class="field-value">
                      cus_dclDFCj4d4mFF45
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Subscription</div>
                    <div class="field-value">
                      sub_dclDFCj4d4mFF45
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Description</div>
                    <div class="field-value field-value-none">
                      No Description
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Billing</div>
                    <div class="field-value">
                      Change automatically
                    </div>
                  </div>
                </div>
                <div class="block-row-subtitle">Status and Metadata</div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Status</div>
                    <div class="field-value">
                      Paid
                    </div>
                  </div>
                  <div class="field-group field-note">
                    <div class="field-name">Payment</div>
                    <div class="field-value">
                      ch_asdfasdfasdfasdf
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">All payment attempts</div>
                    <div class="field-value">
                      2
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Metadata</div>
                    <div class="field-value field-value-none">
                      No Metadata
                    </div>
                  </div>
                </div>
                <div class="block-row-subtitle">Summary</div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Subtotal</div>
                    <div class="field-value">
                      $299.99
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Tax (21%)</div>
                    <div class="field-value">
                      $62.79
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Total</div>
                    <div class="field-value">
                      $361.79
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Amount paid</div>
                    <div class="field-value">
                      $361.79
                    </div>
                  </div>
                </div>
                <div class="block-row-subtitle">Invoice line items</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Amount</th>
                        <th>Description</th>
                        <th>Period</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>$218.33</td>
                        <td>Subscription to Doggy videos ($299.34 / month)</td>
                        <td>12.12.2018 12:34 to 12.12.2018 12:34</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-invoice-preview-item-prev">Prev</div>
                  <div class="block-btn small-btn corporate-invoice-preview-item-next">Next</div>
                </div>
                <div class="block-row-subtitle margin-top-15">Events</div>
                <div class="row">
                  <table class="list-table">
                    <thead>
                      <tr>
                        <th width="40px"><input type="checkbox" class="table-select table-select-all"></th>
                        <th>Event info</th>
                        <th>Date</th>
                        <th width="200px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>A successful payment was made for $99.99</td>
                        <td>12.12.18 12:34</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn corporate-invoice-preview-events-delete">Delete</div>
                        </td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="table-select"></td>
                        <td>johndavis@gmail.com added a new VISA endin in 4242</td>
                        <td>12.12.18 12:34</td>
                        <td>
                          <div class="block-btn small-btn table-option-btn corporate-invoice-preview-events-delete">Delete</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-invoice-preview-events-viewmore">View more</div>
                </div>
              </div>
            </div>
            <div class="action-block action-corporate-" id="corporate-action-block-settings">
              <div class="block-row-title-outside">Settings</div>
              <div class="block-row">
                <span class="radio-grp">
                  <span class="radio-item corporate-setting-selection" fid="corporate-setting-account-info">Account info</span>
                  <span class="radio-item corporate-setting-selection" fid="corporate-setting-pubic-info">Public info</span>
                  <span class="radio-item corporate-setting-selection" fid="corporate-setting-accepted-payments">Accepted Payments</span>
                  <span class="radio-item corporate-setting-selection" fid="corporate-setting-ach-credit-transfer">ACH Credit Transfer</span>
                  <span class="radio-item corporate-setting-selection" fid="corporate-setting-cryptocurrencies">Cryptocurrencies</span>
                </span>
              </div>
              <div class="corporate-setting-content" id="corporate-setting-account-info">
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Amount Name</div>
                    <div class="field-input">
                      <input type="text" value="Magellan Capital" placeholder="Enter Account Name">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Country</div>
                    <div class="field-input">
                      <select class="select-country" id="corporate-settings-country"></select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Time Zone</div>
                    <div class="field-input">
                      <select class="select-timezone" id="corporate-settings-timezone"></select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Phone Verification<span class="corporate-setting-phone-verification-status-view">(Unverified)</span></div>
                    <div class="field-input">
                      <div class="block-btn small-btn corporate-setting-button-phone-verify">Verify</div>
                      <input type="text" class="phone-number" id="corporate-setting-input-phone-number">
                    </div>
                  </div>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-settings-button-cancel">Cancel</div>
                  <div class="block-btn small-btn corporate-settings-button-save">Save</div>
                </div>
              </div>
              <div class="corporate-setting-content" id="corporate-setting-pubic-info">
                <div class="message-box message-notice">
                  <div class="message-description line-1">
                    Information below is provided to your customers.
                  </div>
                </div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Business Name <i class="fa fa-info-circle"><div class="setting-info">The name for your business that your customers will recognize. It can be the legal name or DBA.</div></i></div>
                    <div class="field-input">
                      <input type="text" value="MargellanCapital" placeholder="Enter Business Name">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Website</div>
                    <div class="field-input">
                      <input type="text" value="margellancapital.com" placeholder="Enter Business Website">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Statement Descriptor</div>
                    <div class="field-input">
                      <input type="text" value="MargellanCapital" placeholder="Enter Statement Descriptor">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Support Site</div>
                    <div class="field-input">
                      <input type="text" value="margellancapital.com" placeholder="Enter Support Site">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Email</div>
                    <div class="field-input">
                      <input type="text" value="margellancapital@gmail.com" placeholder="Enter Support Site">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Phone Number</div>
                    <div class="field-input">
                      <input type="text" class="phone-number" id="corporate-setting-public-input-phone-number">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Country</div>
                    <div class="field-input">
                      <select class="select-country" id="corporate-settings-public-country"></select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">State/Province</div>
                    <div class="field-input">
                      <select class="select-state"></select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">City</div>
                    <div class="field-input">
                      <select class="select-city"></select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Address</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Address">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Zip Code</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Zip Code">
                    </div>
                  </div>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-settings-public-button-cancel">Cancel</div>
                  <div class="block-btn small-btn corporate-settings-public-button-save">Save</div>
                </div>
              </div>
              <div class="corporate-setting-content" id="corporate-setting-accepted-payments">
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Cards (Activate/Deactivate)</div>
                    <div class="field-value">
                      <label><input type="checkbox"> Visa</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">&nbsp;</div>
                    <div class="field-value">
                      <label><input type="checkbox"> MastarCard</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">&nbsp;</div>
                    <div class="field-value">
                      <label><input type="checkbox"> American Express</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">&nbsp;</div>
                    <div class="field-value">
                      <label><input type="checkbox"> Discover</label>
                    </div>
                  </div>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-settings-accepted-payments-button-cancel">Link a business bank account</div>
                  <div class="block-btn small-btn corporate-settings-accepted-payments-button-save">Link a business credit card</div>
                </div>
              </div>
              <div class="corporate-setting-content" id="corporate-setting-ach-credit-transfer">
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">ACH Credit Transfer</div>
                    <div class="field-value">
                      <input type="checkbox"> Enables customers to pay by sending funds directly to your bank account
                    </div>
                  </div>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-settings-ach-credit-transfer-button-cancel">Link a business bank account</div>
                  <div class="block-btn small-btn corporate-settings-ach-credit-transfer-button-save">Link a business credit card</div>
                </div>
              </div>
              <div class="corporate-setting-content" id="corporate-setting-cryptocurrencies">
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Cards (Activate/Deactivate)</div>
                    <div class="field-value">
                      <label><input type="checkbox"> Bitcoin</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">&nbsp;</div>
                    <div class="field-value">
                      <label><input type="checkbox"> Ethereum</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">&nbsp;</div>
                    <div class="field-value">
                      <label><input type="checkbox"> Litecoin</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">&nbsp;</div>
                    <div class="field-value">
                      <label><input type="checkbox"> Bitcoin Cash</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">&nbsp;</div>
                    <div class="field-value">
                      <label><input type="checkbox"> Monero</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">&nbsp;</div>
                    <div class="field-value">
                      <label><input type="checkbox"> Dash</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">&nbsp;</div>
                    <div class="field-value">
                      <label><input type="checkbox"> Ripple</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">&nbsp;</div>
                    <div class="field-value">
                      <label><input type="checkbox"> Neo</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">&nbsp;</div>
                    <div class="field-value">
                      <label><input type="checkbox"> Nem</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">&nbsp;</div>
                    <div class="field-value">
                      <label><input type="checkbox"> Qtum</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">&nbsp;</div>
                    <div class="field-value">
                      <label><input type="checkbox"> EOS</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">&nbsp;</div>
                    <div class="field-value">
                      <label><input type="checkbox"> Tether</label>
                    </div>
                  </div>
                </div>
                <div class="block-row margin-top-15">
                  <div class="block-btn small-btn corporate-settings-cryptocurrencies-button-cancel">Link a business bank account</div>
                  <div class="block-btn small-btn corporate-settings-cryptocurrencies-button-save">Link a business credit card</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="transaction-history">
      <div class="main-container">
        <div class="container-fluid">
          Transaction History
        </div>
      </div>
    </section>
    <section id="verification">
      <div class="main-container">
        <div class="container-fluid">
          Verification
        </div>
      </div>
    </section>
    <section id="security">
      <div class="page-title"><span class="highlight">Security</span></div>
      <div class="main-container">
        <div class="container-fluid">
          <div class="row" id="security-main">
            <div class="col col-sm-12 col-xs-12">
              <div class="block-row">
                <span class="radio-grp">
                  <span class="radio-item security-selection radio-selected" sid="security-1">Passowrd Settings</span>
                  <span class="radio-item security-selection" sid="security-2">Two Factor Authentification</span>
                </span>
              </div>
              <div class="dashboard-block security-container" id="security-1">
                <div class="block-row">
                  <div class="message-box message-notice">
                    <div class="message-description">
                      Please choose a password that includes a minimum of 8 charactors, <br>one and at least one capital letter
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Old Password</div>
                    <div class="field-input">
                      <input type="password" id="oldpwd" placeholder="Enter Old Password">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">New Password</div>
                    <div class="field-input">
                      <input type="password" id="newpwd" placeholder="Enter New Password">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Repeat New Password</div>
                    <div class="field-input">
                      <input type="password" id="cnfpwd" placeholder="Repeat New Password">
                    </div>
                  </div>
                </div>
                <div class="form-message"></div>
                <div class="block-row">
                  <div class="block-btn small-btn">Cancel</div>
                  <div class="block-btn small-btn btn-change-password">Save</div>
                </div>
              </div>
              <div class="dashboard-block security-container" id="security-2">
                <div class="row">
                  <div class="col col-xs-12 col-sm-6 col-md-4">
                    <div class="field-group">
                      <div class="field-title">Account Login</div>
                      <div class="field-name">Add a 2FA method for account login</div>
                      <div class="block-btn small-btn">No Method</div>
                      <div class="block-btn small-btn sec-setup-btn">Setup</div>
                    </div>
                  </div>
                  <div class="col col-xs-12 col-sm-6 col-md-4">
                    <div class="field-group">
                      <div class="field-title">Trading</div>
                      <div class="field-name">Add a 2FA method for buying and selling orders</div>
                      <div class="block-btn small-btn">No Method</div>
                      <div class="block-btn small-btn sec-setup-btn">Setup</div>
                    </div>
                  </div>
                  <div class="col col-xs-12 col-sm-6 col-md-4">
                    <div class="field-group">
                      <div class="field-title">Funding</div>
                      <div class="field-name">Add a 2FA method for Deposit and Withdrawals</div>
                      <div class="block-btn small-btn">No Method</div>
                      <div class="block-btn small-btn sec-setup-btn">Setup</div>
                    </div>
                  </div>
                  <div class="col col-xs-12 col-sm-6 col-md-4">
                    <div class="field-group">
                      <div class="field-title">Transfers</div>
                      <div class="field-name">Add a 2FA method for Deposit and Withdrawals</div>
                      <div class="block-btn small-btn">No Method</div>
                      <div class="block-btn small-btn sec-setup-btn">Setup</div>
                    </div>
                  </div>
                  <div class="col col-xs-12 col-sm-6 col-md-4">
                    <div class="field-group">
                      <div class="field-title">Master Key</div>
                      <div class="field-name">Setup a Master Key to enable recovery and 2FA by pass</div>
                      <div class="block-btn small-btn sec-no-method-btn">No Method</div>
                      <div class="block-btn small-btn sec-setup-btn">Setup</div>
                    </div>
                  </div>
                  <div class="col col-xs-12 col-sm-6 col-md-4">
                    <div class="field-group">
                      <div class="field-title">API Keys</div>
                      <div class="field-name">Add a 2FA method for actions that can be performed using API Keys</div>
                      <div class="block-btn small-btn sec-has-method-btn">Method</div>
                      <div class="block-btn small-btn sec-key-description-btn">Key Description</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row" id="security-setup">
            <div class="col col-sm-12 col-xs-12">
              <div class="block-row">
                <span class="radio-grp">
                  <span class="radio-item security-selection radio-selected" sid="security-account-login">Account Login</span>
                  <span class="radio-item security-selection" sid="security-add-2fa">Add a 2FA method for account login</span>
                </span>
              </div>
              <div class="dashboard-block security-container" id="security-account-login">
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Password</div>
                    <div class="field-input">
                      <input type="text" placeholder="Enter Your Password">
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="block-btn small-btn sec-setup-back2tfa-btn">Back</div>
                  <div class="block-btn small-btn sec-setup-continue2confirm-btn">Continue</div>
                </div>
              </div>
              <div class="dashboard-block security-container" id="security-add-2fa">
                <div class="block-row">
                  <div class="message-box message-notice">
                    <div class="message-description line-1">
                      Choose a Two-factor Authentification (2FA) method to apply
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Account Login</div>
                    <div class="field-input">
                      <select>
                        <option>Googoe Authentificator TOTP mode</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="block-btn small-btn sec-setup-back-btn">Back</div>
                  <div class="block-btn small-btn sec-setup-continue-btn">Continue</div>
                </div>
              </div>
            </div>
          </div>
          <div class="row" id="security-confirm">
            <div class="col col-sm-12 col-xs-12">
              <div class="block-row-title-outside">Confirm 2FA Settings</div>
              <div class="dashboard-block">
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">Functionality</div>
                    <div class="field-title">Account Login</div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Method</div>
                    <div class="field-title">Password</div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">When to require</div>
                    <div class="field-title">Account Login</div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="field-name">Confirm Password</div>
                </div>
                <div class="block-row">
                  <div class="message-box message-notice">
                    <div class="message-description line-1">
                      Re-enter your custom password to user for 2FA
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-input">
                      <input type="text" placeholder="Enter Your Password">
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="block-btn small-btn sec-setup-back2setup-btn">Back</div>
                  <div class="block-btn small-btn sec-setup-continue2rconfirm-btn">Confirm</div>
                </div>
              </div>
            </div>
          </div>
          <div class="row" id="security-totp">
            <div class="col col-sm-12 col-xs-12">
              <div class="block-row-title-outside">Google Authentificator TOTP mode</div>
              <div class="dashboard-block">
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">When to require</div>
                    <div class="field-title">Account Login</div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">OPT Algorithm</div>
                    <div class="field-input">
                      <select>
                        <option>SHA512</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">OPT Length <i class="fa fa-info-circle"><div class="setting-info">Character length of the one-time password.</div></i></div>
                    <div class="field-input">
                      <input type="number" value=6 />
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="block-btn small-btn sec-setup-back2confirm-btn">Back</div>
                  <div class="block-btn small-btn sec-setup-continue2confirm2fa-btn">Confirm</div>
                </div>
              </div>
            </div>
          </div>
          <div class="row" id="security-confirm2fa">
            <div class="col col-sm-12 col-xs-12">
              <div class="block-row-title-outside">Confirm 2FA Settings</div>
              <div class="dashboard-block">
                <div class="row">
                  <div class="col col-sm-9">
                    <div class="row">
                      <div class="col col-sm-4">
                        <div class="field-group">
                          <div class="field-name">Functionality</div>
                          <div class="field-title">Account Login</div>
                        </div>
                      </div>
                      <div class="col col-sm-4">
                        <div class="field-group">
                          <div class="field-name">Method</div>
                          <div class="field-title">Google Authentificator TOTP mode</div>
                        </div>
                      </div>
                      <div class="col col-sm-4">
                        <div class="field-group">
                          <div class="field-name">OPT Algorithm</div>
                          <div class="field-title">SHA1</div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-sm-4">
                        <div class="field-group">
                          <div class="field-name">When to require</div>
                          <div class="field-title">Account Login</div>
                        </div>
                      </div>
                      <div class="col col-sm-4">
                        <div class="field-group">
                          <div class="field-name">OPT manual setup key <i class="fa fa-info-circle"><div class="setting-info">OPT manual setup key.</div></i></div>
                          <div class="field-title">U1TRA32JFA3</div>
                        </div>
                      </div>
                      <div class="col col-sm-4">
                        <div class="field-group">
                          <div class="field-name">OPT Length</div>
                          <div class="field-title">6</div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col col-sm-12">
                        <div class="block-row">
                          <div class="field-name">One Time Password</div>
                        </div>
                        <div class="block-row">
                          <div class="message-box message-notice">
                            <div class="message-description">
                              Enthe the OPT provided by Google Authentification. <br>
                              Leave Blank to keep your current setup.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col col-sm-3">
                    <div class="block-row">
                      <div class="field-group">
                        <div class="field-name">When to require</div>
                        <div class="field-title">
                          <img src="https://chart.googleapis.com/chart?chs=120x120&cht=qr&chl=U1TRA32JFA3&choe=UTF-8"/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="block-btn small-btn sec-setup-back2totp-btn">Back</div>
                  <div class="block-btn small-btn sec-setup-continue2end-btn">Confirm</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="settings">
      <div class="page-title"><span class="highlight">Settings</span></div>
      <div class="main-container">
        <div class="container-fluid">
          <div class="row">
            <div class="col col-sm-12 col-xs-12">
              <div class="block-row">
                <span class="radio-grp">
                  <span class="radio-item setting-selection radio-selected" sid="setting-1">Account</span>
                  <span class="radio-item setting-selection" sid="setting-2">Notifications</span>
                  <span class="radio-item setting-selection" sid="setting-3">API Settings</span>
                </span>
              </div>
              <div class="dashboard-block setting-container" id="setting-1">
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-name">User Name <i class="fa fa-info-circle"><div class="setting-info">Private identifier for your account. Never share this with 3rd parties.</div></i></div>
                    <div class="field-input">
                      <input type="text" id="setting-username" placeholder="Enter User Name">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Public Account <i class="fa fa-info-circle"><div class="setting-info">Private identifier for your account. Never share this with 3rd parties.</div></i></div>
                    <div class="field-input">
                      <input type="text" id="setting-publicaccount" placeholder="Enter Public Account">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Email <i class="fa fa-info-circle"><div class="setting-info">Private identifier for your account. Never share this with 3rd parties.</div></i></div>
                    <div class="field-input">
                      <input type="text" id="setting-email" placeholder="Enter Email">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Password</div>
                    <div class="field-input">
                      <input type="password" id="setting-password" placeholder="Enter Password">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Language</div>
                    <div class="field-input">
                      <select id="setting-language" class="global-languages"></select>
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="field-group field-note">
                    <div class="field-name">PGP Public Key <i class="fa fa-info-circle"><div class="setting-info">Private identifier for your account. Never share this with 3rd parties.</div></i></div>
                    <div class="field-input field-note">
                      <input type="text" id="setting-publickey" placeholder="Enter Public Key">
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Timezone</div>
                    <div class="field-input">
                      <select id="setting-timezone" class="global-timezones"></select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Auto Logout</div>
                    <div class="field-input">
                      <select id="setting-autologout">
                        <option value=15>15 minutes</option>
                        <option value=30>30 minutes</option>
                        <option value=60>1 hour</option>
                        <option value=1440>1 day</option>
                      </select>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-name">Global Settings Lock <i class="fa fa-info-circle"><div class="setting-info">Private identifier for your account. Never share this with 3rd parties.</div></i></div>
                    <div class="field-input">
                      <input type="checkbox" id="setting-lock" class="setting-checkbox">
                    </div>
                  </div>
                </div>
                <div class="form-message"></div>
                <div class="block-row">
                  <div class="block-btn update-setting-account small-btn">Update Settings</div>
                </div>
              </div>
              <div class="dashboard-block setting-container" id="setting-2">
                <div class="block-row">
                  <div class="message-box message-notice">
                    <div class="message-description line-1">
                      Receive email under these condition.
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-value">
                      <label><input id="sn-notifOnLogin" type="checkbox"> On login with IP tracking</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-value">
                      <label><input id="sn-notifOnWithdrawal" type="checkbox"> When a withdrawal is made</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-value">
                      <label><input id="sn-notifOnNonCriticalUpdate" type="checkbox"> Non-critical updates that can effect your account</label>
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-value">
                      <label><input id="sn-notifOnTrade" type="checkbox"> When a trade is made</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-value">
                      <label><input id="sn-notifOnDeposit" type="checkbox"> When a deposit is made</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-value">
                      <label><input id="sn-notifOnCryptocurrency" type="checkbox"> When cryptocurrency is made</label>
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="field-group">
                    <div class="field-value">
                      <label><input id="sn-notifOnTransfer" type="checkbox"> When a transfer is made</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-value">
                      <label><input id="sn-notifOnFiatReceive" type="checkbox"> When a flat is received</label>
                    </div>
                  </div>
                  <div class="field-group">
                    <div class="field-value">
                      <label><input id="sn-notifOnFundCard" type="checkbox"> When you fund your card</label>
                    </div>
                  </div>
                </div>
                <div class="block-row">
                  <div class="block-btn small-btn update-setting-notification">Update Notifications</div>
                </div>
              </div>
              <div class="dashboard-block setting-container" id="setting-3">
                <div class="setting-3-table">
                  <table>
                    <thead>
                      <tr>
                        <th>Key Descriptions</th>
                        <th>Key Expiration</th>
                        <th>Created</th>
                        <th>Last Modified</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>None</td>
                        <td>None</td>
                        <td>None</td>
                        <td>None</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="block-row">
                    <div class="block-btn small-btn setting-3-toform">Generate New Key</div>
                  </div>
                </div>
                <div class="setting-3-form">
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Key Description <i class="fa fa-info-circle"></i></div>
                      <div class="field-input">
                        <input type="text" placeholder="Enter Key Description">
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Nonce Window <i class="fa fa-info-circle"><div class="setting-info">Increase nonce window to compensate for HTTP network inconsistancies</div></i></div>
                      <div class="field-input">
                        <input type="text" placeholder="Enter Public Account">
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-name">Key Expiration <i class="fa fa-info-circle"><div class="setting-info">Enable to select when this key should no longer be usable</div></i></div>
                      <div class="field-input">
                        <input type="checkbox" class="setting-checkbox">
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Query Start Date/Time <i class="fa fa-info-circle"><div class="setting-info">Enable to select the earlest date/time of data allowed to be required</div></i></div>
                      <div class="field-input">
                        <input type="checkbox" class="setting-checkbox">
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-name">Query End Date/Time <i class="fa fa-info-circle"><div class="setting-info">Enable to select the latest date/time of data allowed to be required</div></i></div>
                      <div class="field-input">
                        <input type="checkbox" class="setting-checkbox">
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="message-box message-notice">
                      <div class="message-description line-1">
                        Key Permissions. Select the available actions that can be performed with this key.
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="field-group">
                      <div class="field-title">Orders &amp; Traders</div>
                      <div class="field-value">
                        <input type="checkbox"> Query Open Orders &amp; Traders
                      </div>
                      <div class="field-value">
                        <input type="checkbox"> Query Close Orders &amp; Traders
                      </div>
                      <div class="field-value">
                        <input type="checkbox"> Modify Orders
                      </div>
                      <div class="field-value">
                        <input type="checkbox"> Cancel/Close Orders
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-title">Funds</div>
                      <div class="field-value">
                        <input type="checkbox"> Query Funds
                      </div>
                      <div class="field-value">
                        <input type="checkbox"> Deposit Funds
                      </div>
                      <div class="field-value">
                        <input type="checkbox"> Withdraw Funds
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-title">Ledger</div>
                      <div class="field-value">
                        <input type="checkbox"> Query Ledger Entries
                      </div>
                    </div>
                    <div class="field-group">
                      <div class="field-title">Other</div>
                      <div class="field-value">
                        <input type="checkbox"> Export Data
                      </div>
                    </div>
                  </div>
                  <div class="block-row">
                    <div class="block-btn small-btn setting-3-cancel">Cancel</div>
                    <div class="block-btn small-btn setting-3-save">Generate New Key</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="tell-friend">
      <div class="main-container">
        <div class="container-fluid">
          Tell Friend
        </div>
      </div>
    </section>
    <section id="account-logs">
      <div class="main-container">
        <div class="container-fluid">
          Account Logs
        </div>
      </div>
    </section>
    <section id="signin">
      <div class="main-container">
        <div class="container">
          <div class="row">
            <div class="col col-xs-12 col-sm-12 col-md-5 offset-md-1 align-left color-white signin-description">
              <img src="<?php echo $d; ?>assets/images/header-logo.png" />
              <h1>The Future of Money</h1>
              <ul>
                <li>
                  Hold, Buy, Sell &amp; and Trade Cryptocurrencies with Ease
                </li>
                <li>
                  Manage Your Fiat currencies from one place. Make payments, send, receive &amp; exchange currencies.
                </li>
                <li>
                  Send &amp; Receive Wire Transfer
                </li>
                <li>
                  Connect Bank Accounts &amp; Credit Cards
                </li>
                <li>
                  Corporate solutions including merchant processing, crypto &amp; fiat wallets
                </li>
              </ul>
              <h3>All this from one platform</h3>
            </div>
            <div class="col col-xs-12 col-sm-12 col-md-5">
              <form id="frmSignin">
                <h3>Login</h3>
                <input type="text" id="signin-email" value="" placeholder="Enter Your Email" />
                <input type="password" id="signin-password" value="" placeholder="Enter Your Password" />
                <div id="forgot-btn" class="goto-section goto-link" sid="forgot">Forgot?</div>
                <div class="form-message"></div>
                <div class="login-btn" id="signin-btn">Login</div>
                <div class="login-or-with">
                  <p class="color-grey">or Login with</p>
                  <div class="login-or-with-btn login-with-facebook" sname="facebook"></div>
                  <div class="login-or-with-btn login-with-linkedin" sname="linkedin"></div>
                  <div class="login-or-with-btn login-with-google" sname="google"></div>
                  <div class="login-or-with-btn login-with-amazon" sname="amazon"></div>
                  <div class="login-or-with-btn login-with-paypal" sname="paypal"></div>
                  <div class="login-or-with-btn login-with-skrill" sname="skrill"></div>
                  <p>Don't have account? <span class="goto-section goto-link" sid="signup">Signup here</span></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="signup">
      <div class="main-container">
        <div class="container">
          <div class="row">
            <div class="col col-xs-12 col-sm-12 col-md-5 offset-md-1 align-left color-white signin-description">
              <img src="<?php echo $d; ?>assets/images/header-logo.png" />
              <h1>The Future of Money</h1>
              <ul>
                <li>
                  Hold, Buy, Sell &amp; and Trade Cryptocurrencies with Ease
                </li>
                <li>
                  Manage Your Fiat currencies from one place. Make payments, send, receive &amp; exchange currencies.
                </li>
                <li>
                  Send &amp; Receive Wire Transfer
                </li>
                <li>
                  Connect Bank Accounts &amp; Credit Cards
                </li>
                <li>
                  Corporate solutions including merchant processing, crypto &amp; fiat wallets
                </li>
              </ul>
              <h3>All this from one platform</h3>
            </div>
            <div class="col col-xs-12 col-sm-12 col-md-5">
              <form id="frmSignup">
                <h3>Create an Account</h3>
                <input type="text" id="signup-email" value="" placeholder="Enter Your Email" />
                <input type="password" id="signup-password" value="" placeholder="Enter Your Password" />
                <div class="form-message"></div>
                <div class="login-btn" id="signup-btn">Signup</div>
                <div class="login-or-with">
                  <p class="color-grey">or Login with</p>
                  <div class="login-or-with-btn login-with-facebook" sname="facebook"></div>
                  <div class="login-or-with-btn login-with-linkedin" sname="linkedin"></div>
                  <div class="login-or-with-btn login-with-google" sname="google"></div>
                  <div class="login-or-with-btn login-with-amazon" sname="amazon"></div>
                  <div class="login-or-with-btn login-with-paypal" sname="paypal"></div>
                  <div class="login-or-with-btn login-with-skrill" sname="skrill"></div>
                  <p>Already have an account? <span class="goto-section goto-link" sid="signin">Login here</span></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="forgot">
      <div class="center-middle-div">
        <img src="<?php echo $d; ?>assets/images/header-logo.png" />
        <form id="frmForgot">
          <h3>Reset Password</h3>
          <input type="text" id="reset-email" placeholder="Enter Your Email" />
          <div class="form-message"></div>
          <div class="form-notice">Enter your email address and we'll send you an email with instructions to reset your password.</div>
          <div class="login-btn" id="btn-request-reset">Reset Password</div>
          <div class="block-row">
            <div class="message-box message-notice">
              <div class="message-description">
                If you don't received an email from us within a few minutes, check your spam filter as sometimes they end up in there.
              </div>
            </div>
          </div>
          <span class="goto-section goto-link" sid="signin" style="float:right;">Sign in</span>
          <span class="goto-section goto-link" sid="signup">Sign up</span>
        </form>
      </div>
    </section>
    <section id="reset">
      <div class="center-middle-div">
        <img src="<?php echo $d; ?>assets/images/header-logo.png" />
        <div id="frmReset">
          <h3>Reset Password</h3>
          <input type="password" id="reset-new-password" placeholder="New Password" />
          <input type="password" id="reset-cnf-password" placeholder="Password Confirm" />
          <div class="form-message"></div>
          <div class="login-btn" id="btn-reset-password">Reset Password</div>
          <span class="goto-section goto-link" sid="signin" style="float:right;">Sign in</span>
          <span class="goto-section goto-link" sid="signup">Sign up</span>
        </div>
      </div>
    </section>
    <div class="g-recaptcha" data-sitekey="6LeoTUMUAAAAAAJo4sq1bHqWCb8wJ9noTMTS7yHq" style="margin: 0 auto;display: none;"></div>
  </div>

  <!-- Vendor scripts -->
  <script src="<?php echo $d; ?>assets/jquery.min.js"></script>
  <script src="<?php echo $d; ?>assets/jquery.form.min.js"></script>
  <script src="<?php echo $d; ?>assets/jquery.mcgraph.min.js"></script>
  <script src="<?php echo $d; ?>assets/index.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>