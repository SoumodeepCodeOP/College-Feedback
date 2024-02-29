<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="css/register.css">
        <link rel="icon" href="ece logo.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <style>
        body{
            background-image:url('clgMain1.jpg');
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        </style>
    </head>
    <body><b>
        <div class="form">
            <h2>Sign Up</h2>
            <p>It's free and always will be.</p>
            <form action="" enctype="multipart/form-data">
                <div class="error-text">Error</div>
                <div class="grid-details">
                    <div class="input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required pattern="[a-zA-Z'-'\s]*">
                    </div>
                    <div class="input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required pattern="[a-zA-Z'-'\s]*">
                    </div>
                </div>
                <div class="input">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="abcd@gmail.com" required>
                </div>
                <div class="input">
                    <label>Phone</label>
                    <input type="phone" name="phone" placeholder="0123456789"required pattern="[0-9]{10}" oninvalid="this.setCustomValidity('Enter 10 Digits Number')" oninput="this.setCustomValidity('')">
                </div>
                <div class="grid-details">
                    <div class="input">
                    <label>Password</label><span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        <input type="password" id="password-field" name="pass" placeholder="ABcd1234" required>
                    </div>
                    <div class="input">
                    <label>Confirm Password</label>
                        <input type="password" id="cpassword-field" name="cpass" placeholder="ABcd1234" required>
                    </div>
                </div>
                
                <div class="profile-img">
                    <div class="file-upload">
                        <input type="file" id="image-preview" name="image" class="file-input" required oninvalid="this.setCustomValidity('Select an Profile Image')" oninput="this.setCustomValidity('')">
                        <i class="fas fa-user-edit"></i>
                    </div>
                </div>
                <div class="submit">
                <label>ROLE:</label>
                    <select name = "ROLE" id="ROLE" title="Select it carefully can't be changed later">
                        <option value="Student">Student</option>
                        <option value="Alumni">Alumni</option>
                        <option value="Stake Holder">Stake Holder</option>
                        <option value="XYZ">XYZ</option></div>
                    <input type="submit" value="Sign Up" class="button">
                </div>
            </form>
            <div class="link">Already signed up?<a href="login.php">Login Now</a></div>
        </div>
        <script src="js/logi.js"></script></b>
    </b>
    </body>
</html>