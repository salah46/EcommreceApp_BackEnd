<?php
include "../connect.php";

$username = filterRequest("username");
$password = password_hash(filterRequest("password"), PASSWORD_BCRYPT);
$email = filterRequest("email");
$phone = filterRequest("phone");
$verfiycode = 11111;  //rand(10000,99999); sorry dont have phpmail service


$stmt = $con->prepare("SELECT  * from users where users_email = ? or users_phone = ?");
$stmt->execute(array($email, $phone));
$count = $stmt->rowCount();

if ($count > 0) {
    printFailure("Phone or email already exist");

} else {
 //  sendEmail($to, $subject, $message, $from);
    $data = array(
        "users_name" => $username,
        "users_password" => $password,
        "users_email" => $email,
        "users_phone" => $phone,
        "users_verifycode" => $verfiycode,

    );
    insertData("users",$data);

}
