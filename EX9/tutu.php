<!DOCTYPE HTML>
<html>
<body>
<?php 
$Name ="Name=".$_REQUEST['fname']."\n";

$NumberOfRooms = "number of rooms:".$_REQUEST['rooms']."\n"; 

$floor ="floor:".$_REQUEST['floor']."\n"; 
 
$Breakfast="breakfast:".$_REQUEST['breakfast']."\n";

$to = "rimats16@gmail.com";

$subject = "shenkar html ex9 ";

$from = "rimat_s16@hotmail.com";

$headers = "from:".$from;

$message =$name.$NumberOfRooms.$floor.$Breakfast;
mail($to,$subject,$message,$headers)
if (mail($to,$subject,$message,$headers)){
header("Location:http://aux.shenkar.ac.il/656/group1/php1/thanks.html");
exit();
}else{
echo ("Message delivery failed.");
} ?>
</body>
</html>
