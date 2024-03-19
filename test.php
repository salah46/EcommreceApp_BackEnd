<?php 
include './connect.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
getAllData("users","1=1");
// $table = "users";
// // $name = filterRequest("namerequest");
// $data = array( 
// "users_name" => "wael",
// "users_email" => "wael@gmail.com",
// "users_phone" => "324234",
// "users_verifycode" => "3243243",
       
// );
// $count = insertData($table , $data,true);
// $to = "garroudjimohamedse@gmail.com";
// $title = "hi";
// $message = "Hello salah";
// $header = "";
// mail($to,$title,$message);
// if (mail($to, $title, $message)) {
//     echo "Email sent successfully.";
// } else {
//     echo "Failed to send email.";
// }

?>

