<?php
$db = mysql_connect("localhost", "root", "");
  mysql_select_db("chat" ,$db);
  $sql = mysql_query("SELECT *  FROM users" ,$db);

print_r($sql);

mysql_close($db);
?>