<?php 

include "../connect.php";
$password = password_hash(filterRequest("password"), PASSWORD_BCRYPT);
$email = filterRequest("email");
$stmt = $con->prepare("SELECT * from users where users_email = ? AND users_password=? AND users_approve = 1");
$stmt->execute(array($email,$password));
$count = $stmt->rowCount();

if ($count > 0) {
    $where = "users_email = ? AND users_password=? AND users_approve = 1";
    $values = array($email,$password);
    getData("users",$where,$values);

} else {
	printFailure("Incorrect email or password");
}

 ?>
