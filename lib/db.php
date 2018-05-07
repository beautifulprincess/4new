<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "root";
$dbName = "4new";

$dbConn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName) or die("Database Error!");
if (mysqli_connect_errno()) die("Failed to connect to MySQL: " . mysqli_connect_error());

function sql($sql, $type = "set") {
  global $dbConn;

  if ($type == "get") {
    $ret = array();
    $query = mysqli_query($dbConn, $sql);
    while($row = mysqli_fetch_assoc($query)) {
      $ret[] = $row;
    }
    return $ret;
  } else {
    mysqli_query($dbConn, $sql);
  }
}

function getAll($sql) {
  return sql($sql, "get");
}

function getOne($sql) {
  $ret = sql($sql, "get");
  return $ret && is_array($ret) && count($ret) > 0 ? $ret[0] : null;
}
?>