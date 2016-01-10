<!DOCTYPE HTML>
<html>
<body>
<?php 
$Name ="Name=".$_REQUEST['fname']."\n";

$LastName ="LastName=".$_REQUEST['lname']."\n";



$to = "rimats16@gmail.com";

$subject = "shenkar project ";

$from = .$_REQUEST['email']."\n";

$comment = .$_REQUEST['comment]."\n";

$message =$name.$LastName.$comment;
mail($to,$subject,$message)
if (mail($to,$subject,$message)){
header("Location:order1-1-1.html");
exit();
}else{
echo ("Message delivery failed.");
} ?>
</body>
</html>