<?php



session_start();
include 'php/db.php';
$email = $_SESSION['email'];
if(empty($email)){
    header("Location: login.php");
}
$qry = mysqli_query($conn,"SELECT * FROM users WHERE email ='{$email}'");
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
                <div class="grid-details">
                    <div class="input">
                        <label>New Password</label><span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        <input type="password" name="pass" id="password-field" placeholder="Password" required>
                        
                    </div>
                    <div class="input">
                        <label>Confirm Password</label><span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        <input type="password" id="password-field" name="cpass" placeholder="ABcd1234" required>
                    </div>
                </div>
                <div class="submit">
                    <input type="submit" value="Verify Now" class="button"
                </div>
            </form>
        </div>
        <script src="js/ver.js">
            
        </script>
    </body>
</html>