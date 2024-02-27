<?php



session_start();
include 'php/db.php';
$unique_id = $_SESSION['unique_id'];
$email = $_SESSION['email'];
if(empty($unique_id)){
    header("Location: login.php");
}
$qry = mysqli_query($conn,"SELECT * FROM users WHERE unique_id ='{$unique_id}'");
if(mysqli_num_rows($qry)>0){
    $row = mysqli_fetch_assoc($qry);
    if($row){
        $_SESSION['verification_status']=$row['verification_status'];
        $_SESSION['Completion']=$row['Completion'];
        if($row['verification_status']!= 'Verified'){
            header("Location: verify.php");
        }
        else if($row['Completion']== 'OK'){
            header("Location: Dashboard.php");
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
        <title>Student Details</title>
        <link rel="icon" href="ece logo.png" type="image/x-icon">
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <style>
        body{
            background-image:url('clgMain3.jpg');
        }
        </style>
    </head>
    <body><b>
    <header id="header">
            <nav>
                <ul class="navigation">
                    <li><a href="php/logout.php"><button class="logout_btn">Log Out</button></a></li>
                </ul>
            </nav>
        </header>
        <div class="form">
            <form action="" enctype="multipart/form-data">
                <div class="error-text">Error</div>
                <div class="grid-details">
                    
                <div class="input"> 
                    
                <h2 >PERSONAL DETAILS</h2>
     <p>FATHER NAME: <input type="text" name="Father" placeholder="" required></p> 
     <p>MOTHER NAME: <input type="text" name="Mother" placeholder="" required></p> 
      
     </div>
                </div>
                <div class="grid-details">
     <p>Date of Birth: <input type="date" name="DOB" required></p> 
     <p>Blood Group: <input type="text" name="Blood_Group" placeholder="" required> </p>
                </div>
     <div class="input">
     <h2>GENDER</h2>
     <p>
        MALE<input type="radio" name="Gender" id="MALE" value="MALE">
        FEMALE<input type="radio" name="Gender" id="FEMALE" value="FEMALE">
        OTHERS<input type="radio" name="Gender" id="OTHERS" value="OTHERS">
     </p>
                        
     
   
      <h2>ADDRESS</h2>
        <p>Address: <input type="text" name="Address" id="Address" cols="50" rows="5" placeholder="" required></textarea> </p>
        <p>Pincode: <input type="number" name="Pincode" id="Pincode" placeholder="" required></p>
        <div class="grid-details">
        <p>Post-Office: <input type="text" name="PO" placeholder=""required></p>
        <p>Police-Station: <input type="text" name="PS" placeholder=""required></p>
     </div>    
    </div>
<div class="input">
   <h2>COLLEGE DETAILS</h2>
      <p> University : <input type="text" name="University" id="University" placeholder="" required></p>
      <p> University Roll-Number: <input type="number" name="University_Roll_No" id="University_Roll_No" placeholder=""required></p>
      <p> University Registration:   <input type="number" name="University_Reg_No" id="University_Reg_No" placeholder=""required></p>
</div>

                <div class="submit">
                
                    <input type="submit" value="Submit" class="button">
                </div>
            </form>
           
        </div>
        <script src="js/Student.js"></script>
    </body>
</html>