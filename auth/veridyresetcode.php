<?php
include "../connect.php";
$email = filterRequest("email");
$verify = filterRequest("verify");

$stmt = $con->prepare("SELECT * FROM users WHERE users_email = '$email' AND users_verifycode = '$verify'");
$stmt->execute();

$count = $stmt->rowCount();

if ($count > 0) {
    echo json_encode(array("status" => "success", "message" => "ResetVerifyCode correct"));  
} else {
    printFailure("Wrong Verify Code");
}