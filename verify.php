<?php



session_start();
include 'php/db.php';
$unique_id = $_SESSION['unique_id'];
if(empty($unique_id)){
    header("Location: login.php");
}
$qry = mysqli_query($conn,"SELECT * FROM users WHERE unique_id ='{$unique_id}'");
if(mysqli_num_rows($qry)>0){
    $row = mysqli_fetch_assoc($qry);
    if($row){
        $_SESSION['verification_status']=$row['verification_status'];
        if($row['verification_status']== 'Verified'){
            echo "You're Verified please login!!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verify</title>
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/verify.css">
        <link rel="icon" href="ece logo.png" type="image/x-icon">
        <style>
        body{
            background-image:url('clgMain3.jpg');
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        </style>
    </head>
    <body>
        <div class="form">
            <h2>Verify Your Account</h2>
            <p>We emailed you the four digit otp code. Enter the code below to confirm your email address.</p>
            <form action="" autocomplete="off">
                <div class="error-text">Error</div>
                <div class="feild-input">
                    <input type="number" name="otp1" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                    <input type="number" name="otp2" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                    <input type="number" name="otp3" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                    <input type="number" name="otp4" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                </div>
                <div class="submit">
                    <input type="submit" value="Verify Now" class="button">
                </div>
            </form>
        </div>
        <script src="js/verify.js">
            
        </script>
    </body>
</html>