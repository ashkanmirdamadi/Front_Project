<?php
foreach($_GET as $k=> $v)
  $$k=$v;

echo $user1;
echo $pss1;
echo $phone1;
$dbc = new mysqli('localhost','root' ,'');
$dbc->select_db('userc');
$sql= "UPDATE `users` SET `usernames`='[$user1]',`passwords`='[$pss1]' WHERE `ph`= '[$phone1]'";
$result=$dbc-> query($sql);
$dbc->close();
?>
