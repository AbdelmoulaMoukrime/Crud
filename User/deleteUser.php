<?php
$user_id = $_GET['id'];
include_once "../connect_ddb.php";
$sql = "DELETE FROM users where user_id = $user_id ";
if (mysqli_query($conn, $sql)){
    header("localition:showUser.php?message=DeleteSuccess");

}else {
    header("localition:showUser.php?message=DeleteFail");
  
}
?>