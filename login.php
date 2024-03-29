<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <link rel="stylesheet" href="css/login.css">
        <link rel="icon" href="ece logo.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <style>
        body{
            background-image:url('clgMain.jpg');
            background-size: cover;
            background-position: top;
            background-repeat: no-repeat;
        }
        </style>
    </head>
    <body><b>
        <div class="form">
            <h2>Welcome back</h2>
            <p>You've been missed!</p>
            <form action="">
                <div class="error-text">Error</div>                
                <div class="input">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter Your Email" required>
                </div>
                <div class="input">
                    <label>University Roll-Number:</label>
                    <input type="number" name="University_Roll_No" id="University_Roll_No" placeholder="University Roll Number"required></p>
                </div>
                <div class="input">
                    <label>Password</label><span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    <input type="password" name="pass" id="password-field" placeholder="Password" required>        
                </div>
                              
                <div class="submit">
                    <input type="submit" value="Login" class="button">
                </div>
            </form>
            <div class="link"><a href="forgot.php">Forget Password?</a></div>
            <div class="link">Not signed up?<a href="register.php">Signup Now</a></div>
        </div>
        <script src ="js/logi.js"></script></b>
    </body>
</html>