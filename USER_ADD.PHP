<?php
foreach($_GET as $k=> $v)
  $$k=$v;

echo $user1;
echo $pss1;
echo $phone1;
$dbc = new mysqli('localhost','root' ,'');
$dbc->select_db('userc');
$sql= "INSERT INTO `users`(`ph`, `usernames`, `passwords`) VALUES ('[$phone1]','[$user1]','[$pss1]')";
$result=$dbc-> query($sql);
$dbc->close();
?>
