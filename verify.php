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

sql("update `accounts` set `status`=1, `verifyHash`='' where `verifyHash`='$hash'");

$_SESSION["accountid"] = $account["id"];

header("Location: ../socialreward");