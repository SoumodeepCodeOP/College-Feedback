<?php
session_start();
include_once 'db.php';
$Report = $_POST['RText'];
$unique_id = $_SESSION['unique_id'];
$email = $_SESSION['email'];
if(!empty($Report)){

            $sql2 = mysqli_query($conn,"UPDATE users SET `Report`= '$Report' WHERE $unique_id ='{$unique_id}' AND email='{$email}'");
                            echo "success";


}

?>