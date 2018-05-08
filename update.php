<?php
include("lib/db.php");

sql("alter table accounts add `status` int(1) NOT NULL DEFAULT 0");
sql("alter table accounts add `verifyHash` varchar(256) NOT NULL DEFAULT ''");
sql("update accounts set `status`=1");
?>