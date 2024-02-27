<?php
include_once 'db.php';
session_start();
$otp1= $_POST['otp1'];
$otp2= $_POST['otp2'];
$otp3= $_POST['otp3'];
$otp4= $_POST['otp4'];
$email = $_SESSION['email'];
$session_otp = $_SESSION['otp'];
$otp = $otp1.$otp2.$otp3.$otp4;
if(!empty($otp)){
    if($otp == $session_otp){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email ='{$email}' AND otp = '{$otp}'");
        if(mysqli_num_rows($sql)>0){
            $null_otp = 0;
            $sql2 = mysqli_query($conn,"UPDATE users SET `otp`='$null_otp' WHERE email ='{$email}'");
            if($sql2){
                $row = mysqli_fetch_assoc($sql);
                if($row){
                    $_SESSION['otp']=$row['otp'];
                    $_SESSION['unique_id']=$row['unique_id'];
            $_SESSION['email']=$row['email'];
            if($row['Role']== 'Student'){
            echo 'Student';}
            if($row['Role']== 'Alumni'){
                echo 'A';}
            if($row['Role']== 'Stake Holder'){
                echo 'SH';}
        
                    
                }
            }
        }
    }
    else{
        echo "Wrong  Otp!";
    }
}
else{
    echo "Enter Otp!";
}

?>