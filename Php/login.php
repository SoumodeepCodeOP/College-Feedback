<?php

session_start();
include 'db.php';
$Email = $_POST['email'];
$Password = $_POST['pass'];
$University_Roll_No = $_POST['University_Roll_No'];
if(!empty($Email) || !empty($Password) || !empty($University_Roll_No)){
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$Email}' AND University_Roll_No = '{$University_Roll_No}' AND password ='{$Password}'");
    if(mysqli_num_rows($sql)>0){
        $random_id = rand(time(),10000000);
        $otp = mt_rand(1111,9999);
        $sql2 = mysqli_query($conn,"UPDATE users SET `otp`='$otp' WHERE email='{$Email}'");
        
            $sql3= mysqli_query($conn , "SELECT * FROM users WHERE email = '{$Email}'");
            if(mysqli_num_rows($sql3)>0){
                $row = mysqli_fetch_assoc($sql3);
                $_SESSION['email']=$row['email'];
                $_SESSION['otp']=$row['otp'];
       

                


                if($otp){
                    $to = $Email;
                    $subject = "Verify Your Email";
                    $body = "Your Verification code to reset password is"." $otp";
                    $headers = "From: soumodeephalder92@gmail.com";
                    $mail_sent =mail($to, $subject, $body, $headers);

                    if($mail_sent==true){
                        echo "success";
                    }
                    else{
                        echo "Email Problem!" . mysqli_error($conn);
                    }
                }




            
        
            }
            else{
                echo "$Email ~ Not Exists";
            }
        
    }
    else{
        echo "Email or Password or ID No. is Incorrect";
    }
}
else{
    echo "All Fields Are Required!";
}
?>