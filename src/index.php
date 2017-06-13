<?php
header("content-type:text/html;charset=utf8");
echo "<pre/>";
var_dump("haowefpaewjf");

$mysql_conn = new mysqli('172.20.0.2:3306','root','');
$res = $mysql_conn->query("show databases");
while($ress = $res->fetch_array()){
  var_dump($ress);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>Document</title>
  </head>
  <body>
    It works!!!
  </body>
</html>
