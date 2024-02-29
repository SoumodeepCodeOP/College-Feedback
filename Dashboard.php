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
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/style2.css" />
  <link rel="icon" href="ece logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  
</head>
<body>
  <header class="header">
    <div class="logo">
    <img src="ece logo.png" alt="Italian Trulli" class="img">
      <a href="#">Elitte College of Engineering</a>
      <span>
    </div>

    <div class="header-icons">
      <div class="account">
        <a href="./Images/<?php echo $image?>"><img src="./Images/<?php echo $image?>" alt=""></a>
        <h4> <span><?php echo $fname?> <?php echo $lname?></span></h4>
      </div>
    </div>
  </header>
  <div class="container">
    <nav>
      <div class="side_navbar">
        <span>Main Menu</span>
        <a href="Dashboard.php" class="active">Dashboard</a>
        <a href="profile.php">Profile</a>
        <a href="Feedback.php">Feedback</a>

        <div class="links">
          <span>Quick Link</span>
          <a href="Help.pdf">Help</a>
          <a href="Report.php">Report</a>
          <a href="php/logout.php">Log Out</a>
        </div>
      </div>
    </nav>

    <div class="main-body">
      <h2>Dashboard</h2>
      <div class="promo_card">
        <h1>Welcome to Feedback Form</h1>
        <span>Where your views is important than knowledge!!</span>
      </div>

      <div class="history_lists">
        <div class="list1">
          <div class="row">
            <h4>Elitte College of Engineering</h4>
            <a href="https://petindia.org/ece/" target=blank>Official Website</a>
          </div>
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Dates</th>
                <th>Name</th>
                <th>Type</th>
                <th>Subject</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>2, Aug, 2022</td>
                <td>Dr. Vikash Upadhyay</td>
                <td>Phd.</td>
                <td>Math</td>
              </tr>
              
            </tbody>
          </table>
        </div>

        <div class="list2">
          <div class="row">
            <h4>MAKAUT</h4>
            <a href="http://makautexam.net/" target=blank>Official Website</a>
          </div>
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Type</th>
                <th>Uplaoded on</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>RESULT of Even Sem</td>
                <td>PDF</td>
                <td>20/04/2023</td>
              </tr>
              
            </tbody>
          </table>
        </div>
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
</body>
</html>
