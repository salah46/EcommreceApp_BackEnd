<?php
include "../connect.php";
$email = filterRequest("email");
$password=sha1(filterRequest("password"));
$stmt = $con->prepare("SELECT * FROM users WHERE users_email = '$email'");
$stmt->execute();

$count = $stmt->rowCount();

if ($count > 0) {
    $data = array(
        "users_password" => $password
    );
    updateData("users", $data, "users_email = '$email'");
} else {
    printFailure("Reset password not effected");
}