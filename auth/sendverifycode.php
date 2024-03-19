<?php
include "../connect.php";


$email = filterRequest("email");
$verfiycode = 22222;  //rand(10000,99999); sorry dont have phpmail service


$stmt = $con->prepare("SELECT  * from users where users_email = ? AND users_approve = 1 ");
$stmt->execute(array($email));
$count = $stmt->rowCount();

if ($count > 0) {
	//  sendEmail($to, $subject, $message, $from);
	$data = array(
        "users_verifycode" => $verfiycode);
    $condtion = "users_email='$email'";
		
	updateData("users",$data,$condtion);    

} else {
    printFailure("The email you provide is not valid");

}
