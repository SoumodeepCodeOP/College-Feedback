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
    $fname=$row['fname'];
    $image=$row['image'];
    $lname=$row['lname'];
    $phone=$row['phone'];
    $role=$row['Role'];
    $Father=$row['Father'];
    $Mother=$row['Mother'];
    $Blood_Group=$row['BLOOD_GROUP'];
    $DOB=$row['DOB'];
    $Gender=$row['Gender'];
    $Address=$row['Address'];
    $Pincode=$row['Pincode'];
    $PO=$row['PO'];
    $PS=$row['PS'];
    $University=$row['University'];
    $University_Roll_No=$row['University_Roll_No'];
    $University_Reg_No=$row['University_Reg_No'];
    if($row){
        $_SESSION['verification_status']=$row['verification_status'];
        if($row['verification_status']!= 'Verified'){
            header("Location: verify.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Profile</title>
  <link rel="stylesheet" href="css/style1.css" />
  <link rel="stylesheet" href="css/p.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
  <header class="header">
    <div class="logo">
    <img src="ece logo.png" alt="Italian Trulli" class="img">
      <a href="#">Elitte College of Engineering</a>
      <span>
      </div>
    </div>

    <div class="header-icons">
      <div class="account">
      <a href="./Images/<?php echo $image?>"><img src="./Images/<?php echo $image?>" alt=""></a>
        <h4><span><?php echo $fname?> <?php echo $lname?></span></h4>
      </div>
    </div>
  </header>
  <div class="container">
    <nav>
      <div class="side_navbar">
        <span>Main Menu</span>
        <a href="Dashboard.php" >Dashboard</a>
        <a href="profile.php" class="active">Profile</a>
        <a href="Feedback.php">Feedback</a>

        <div class="links">
          <span>Quick Link</span>
          <a href="Help.pdf">Help</a>
          <a href="Report.php">Report</a>
          <a href="php/logout.php">Log Out</a>
        </div>
      </div>
    </nav>

<body>
<div class="main-body">
<form action="" enctype="multipart/form-data">
<div class="form">
<div class="grid-details">
<div class="image">
<img src="./Images/<?php echo $image?>">
</div>
                    
</div>
                

<div class="grid-details">
                    <div class="input">
                        <label>First Name</label>
                        <input disabled type="text" name="fname" placeholder="First Name" value=<?php echo $fname?> required pattern="[a-zA-Z'-'\s]*">
                    </div>
                    <div class="input">
                        <label>Last Name</label>
                        <input disabled type="text" name="lname" placeholder="Last Name" value=<?php echo $lname?> required pattern="[a-zA-Z'-'\s]*">
                    </div>
                </div>
                <div class="input">
                    <label>Email</label>
                    <input disabled type="email" name="email" placeholder="abcd@gmail.com" value=<?php echo $email?> required>
                </div>
                <div class="input">
                    <label>Phone</label>
                    <input disabled type="phone" name="phone" placeholder="0123456789" value=<?php echo $phone?> required pattern="[0-9]{10}" oninvalid="this.setCustomValidity('Enter 10 Digits Number')" oninput="this.setCustomValidity('')">
                </div>
                <div class="input"> 
                    
                <h2 >PERSONAL DETAILS</h2>
     FATHER NAME: <input disabled type="text" name="Father" placeholder="" value=<?php echo $Father?> required> 
     MOTHER NAME: <input disabled type="text" name="Mother" placeholder="" value=<?php echo $Mother?> required>
      
     </div>
                </div>
                <div class="grid-details">
     Date of Birth: <input disabled type="text" name="DOB" value=<?php echo $DOB?> required> 
     Blood Group: <input disabled type="text" name="Blood_Group" placeholder="" value=<?php echo $Blood_Group?> required> 
                </div>
     <div class="input">
     <h2>GENDER</h2>
    <input disabled type="text" name="Gender" id="MALE" value=<?php echo $Gender?>>
        
                        
     
   
      <h2>ADDRESS</h2>
        Address: <input disabled type="text" name="Address" id="Address"  placeholder="" value=<?php echo $Address?> required> 
        Pincode: <input disabled type="number" name="Pincode" id="Pincode" placeholder="" value=<?php echo $Pincode?> required>
        <div class="grid-details">
        Post-Office: <input disabled type="text" name="PO" placeholder="" value=<?php echo $PO?> >
        Police-Station: <input disabled type="text" name="PS" placeholder="" value=<?php echo $PS?> >
     </div>    
    </div>
<div class="input">
   <h2>COLLEGE DETAILS</h2>
       University : <input disabled type="text" name="University" id="University" placeholder="" value=<?php echo $University?> required>
       University Roll-Number: <input disabled type="number" name="University_Roll_No" id="University_Roll_No" placeholder="" value=<?php echo $University_Roll_No?> required>
       University Registration:   <input disabled type="number" name="University_Reg_No" id="University_Reg_No" placeholder="" value=<?php echo $University_Reg_No?> required>
</div>
                

                
                <div class="input">
                <h2>ROLE:</h2>
                    <input disabled name = "ROLE" id="ROLE" value=<?php echo $role?> title="Select it carefully can't be changed later">
                        
                    
                </div>
</div>
<div class="sidebar">
      <h4>Important Notice</h4>
      
      <div class="balance">
        <i class="fas fa-dollar icon"></i>
        <div class="info">
          <h5>Dollar</h5>
          <span><i class="fas fa-dollar"></i>25,000.00</span>
        </div>
      </div>
      
      <div class="balance">
        <i class="fa-solid fa-rupee-sign icon"></i>
        <div class="info">
          <h5>PKR</h5>
          <span><i class="fa-solid fa-rupee-sign"></i>300,000.00</span>
        </div>
      </div>

      <div class="balance">
        <i class="fas fa-euro icon"></i>
        <div class="info">
          <h5>Euro</h5>
          <span><i class="fas fa-euro"></i>25,000.00</span>
        </div>
      </div>

      <div class="balance">
        <i class="fa-solid fa-indian-rupee-sign icon"></i>
        <div class="info">
          <h5>INR</h5>
          <span><i class="fa-solid fa-indian-rupee-sign"></i>220,000.00</span>
        </div>
      </div>

      <div class="balance">
        <i class="fa-solid fa-sterling-sign icon"></i>
        <div class="info">
          <h5>Pound</h5>
          <span><i class="fa-solid fa-sterling-sign"></i>30,000.00</span>
        </div>
      </div>

    </div>
  </div>
</form>
</body>
</html>