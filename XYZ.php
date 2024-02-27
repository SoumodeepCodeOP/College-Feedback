<?php



session_start();
include 'php/db.php';
$unique_id = $_SESSION['unique_id'];
$email = $_SESSION['email'];
$image = $_SESSION['image'];
if(empty($unique_id)){
    header("Location: login.php");
}
$qry = mysqli_query($conn,"SELECT * FROM users WHERE unique_id ='{unique_id}'");
if(mysqli_num_rows($qry)>0){
    $row = mysqli_fetch_assoc($qry);
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
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="ece logo.png" type="image/x-icon">
    </head>
    <body>
        <header id="header">
            <img src="$image" class="logo">
            <nav>
                <ul class="navigation">
                    <li><a href="php/logout.php?logout_id=<?php echo $unique_id?>"><button class="logout_btn">Log Out</button></a></li>
                </ul>
            </nav>
        </header>
        <section>
            <h2>Welcome : <span><?php echo "XYZ"?></span></h2>
        </section>
    </body>
</html>