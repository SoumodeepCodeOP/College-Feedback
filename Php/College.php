<?php
session_start();
include_once 'db.php';
$Q1 = $_POST['Q1'];
$Q2 = $_POST['Q2'];
$Q3 = $_POST['Q3'];
$Q4 = $_POST['Q4'];
$Q5 = $_POST['Q5'];
$Q6 = $_POST['Q6'];
$Q7 = $_POST['Q7'];
$Q8 = $_POST['Q8'];
$Q9 = $_POST['Q9'];
$Q10 = $_POST['Q10'];
$Q11 = $_POST['Q11'];
$Q12 = $_POST['Q12'];
$Q13 = $_POST['Q13'];
$Q14 = $_POST['Q14'];
$Q15 = $_POST['Q15'];
$Q16 = $_POST['Q16'];
$Clg = "OK";

$unique_id = $_SESSION['unique_id'];
$email = $_SESSION['email'];
if(!empty($Q1)||!empty($Q2)||!empty($Q3)||!empty($Q4)||!empty($Q5)||!empty($Q6)||!empty($Q7)||!empty($Q8)||!empty($Q9)||!empty($Q10)||!empty($Q11)||!empty($Q12)||!empty($Q13)||!empty($Q14)||!empty($Q15)||!empty($Q16) ){
    $sql = "SELECT AVG(Q1) FROM `users` WHERE 1;";

            $sql2 = mysqli_query($conn,"UPDATE users SET `Q1`= '$Q1' , `Q2`= '$Q2', `Q3`= '$Q3', `Q4`= '$Q4', `Q5`= '$Q5', `Q6`= '$Q6', `Q7`= '$Q7', `Q8`= '$Q8', `Q9`= '$Q9', `Q10`= '$Q10', `Q11`= '$Q11', `Q12`= '$Q12', `Q13`= '$Q13', `Q14`= '$Q14', `Q15`= '$Q15', `Q16`= '$Q16', `Clg`='$Clg' WHERE $unique_id ='{$unique_id}' AND email='{$email}'");
                            echo "success";


}

?>