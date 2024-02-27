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
        if($row['Clg']== 'OK'){
          echo ("Feedback already submitted.");
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
        <title>College</title>
        <link rel="stylesheet" href="css/CLG.css">
        <link rel="icon" href="ece logo.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <style>
        body{
            background-image:url('clgMain2.png');
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        </style>
    </head>
    <body><b>
        <div class="form">
            <form action="" enctype="multipart/form-data">
                
                <div class="container">
                    <center><b><h1>Feedback Questions</h1></b></center> 
                    <h2>**All field must be and priotically completed**(ONE STAR is LOWEST AND FIVE STAR IS HIGHEST)**</h2>
                    <div class="callrating">
                    
              <h3 class="name" required>1. The Prescribed books/reading materials are available in the library/Seminar :</h3> 
              <p>
              <div class="rating">
              &nbsp<input type="radio" name="Q1" id=Q1 value=5>&nbsp
                   &nbsp<input type="radio" name="Q1" id=Q1 value=4>&nbsp
                   &nbsp<input type="radio" name="Q1" id=Q1 value=3>&nbsp
                   &nbsp<input type="radio" name="Q1" id=Q1 value=2>&nbsp
                   &nbsp<input type="radio" name="Q1" id=Q1 value=1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   
              </div>
              </p>
        </div>
        <div class="callrating">
                    
            <h3 class="name">2. Reading room and common room are available in the Faculty/college&nbsp building : </h3> 
            <div class="rating">
            &nbsp<input type="radio" name="Q2" id=Q2 value=5>&nbsp
                 &nbsp<input type="radio" name="Q2" id=Q2 value=4>&nbsp
                 &nbsp<input type="radio" name="Q2" id=Q2 value=3>&nbsp
                 &nbsp<input type="radio" name="Q2" id=Q2 value=2>&nbsp
                 &nbsp<input type="radio" name="Q2" id=Q2 value=1>&nbsp&nbsp&nbsp&nbsp
                 
            </div>

      </div>
      <div class="callrating">
                    
        <h3 class="name">3. Available reading space library/seminar in satisfactory : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h3> 
        <div class="rating">
        &nbsp<input type="radio" name="Q3" id=Q3 value=5>&nbsp
        &nbsp<input type="radio" name="Q3" id=Q3 value=4>&nbsp
        &nbsp<input type="radio" name="Q3" id=Q3 value=3>&nbsp
        &nbsp<input type="radio" name="Q3" id=Q3 value=2>&nbsp
        &nbsp<input type="radio" name="Q3" id=Q3 value=1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
             
        </div>

  </div>
  <div class="callrating">
                    
     <h3 class="name">4. The library/seminar staffs are cooperative and helpful :</h3> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <p>
     <div class="rating">
     &nbsp<input type="radio" name="Q4" id=Q4 value=5>&nbsp
     &nbsp<input type="radio" name="Q4" id=Q4 value=4>&nbsp
     &nbsp<input type="radio" name="Q4" id=Q4 value=3>&nbsp
     &nbsp<input type="radio" name="Q4" id=Q4 value=2>&nbsp
     &nbsp<input type="radio" name="Q4" id=Q4 value=1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          
     </div>
     </p>
</div>
<div class="callrating">
                    
     <h3 class="name">5. Photocopying facility in the library is available and satisfactory :</h3> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <p>
     <div class="rating">
     &nbsp<input type="radio" name="Q5" id=Q5 value=5>&nbsp
     &nbsp<input type="radio" name="Q5" id=Q5 value=4>&nbsp
     &nbsp<input type="radio" name="Q5" id=Q5 value=3>&nbsp
     &nbsp<input type="radio" name="Q5" id=Q5 value=2>&nbsp
     &nbsp<input type="radio" name="Q5" id=Q5 value=1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          
     </div>
     </p>
</div>
<div class="callrating">
                    
     <h3 class="name">6. Internet facilities are available on the campus :</h3> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <p>
     <div class="rating">
     &nbsp<input type="radio" name="Q6" id=Q6 value=5>&nbsp
     &nbsp<input type="radio" name="Q6" id=Q6 value=4>&nbsp
     &nbsp<input type="radio" name="Q6" id=Q6 value=3>&nbsp
     &nbsp<input type="radio" name="Q6" id=Q6 value=2>&nbsp
     &nbsp<input type="radio" name="Q6" id=Q6 value=1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          
     </div>
     </p>
</div>
<div class="callrating">
                    
     <h3 class="name">7. Online educational resources are available and accessible :</h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <p>
     <div class="rating">
     &nbsp<input type="radio" name="Q7" id=Q7 value=5>&nbsp
          &nbsp<input type="radio" name="Q7" id=Q7 value=4>&nbsp
          &nbsp<input type="radio" name="Q7" id=Q7 value=3>&nbsp
          &nbsp<input type="radio" name="Q7" id=Q7 value=2>&nbsp
          &nbsp<input type="radio" name="Q7" id=Q7 value=1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          
     </div>
     </p>
</div>
<div class="callrating">
                    
     <h3 class="name">8. The office staff in the department is  helpful:</h3> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <p>
     <div class="rating">
     &nbsp<input type="radio" name="Q8" id=Q8 value=5>&nbsp
     &nbsp<input type="radio" name="Q8" id=Q8 value=4>&nbsp
     &nbsp<input type="radio" name="Q8" id=Q8 value=3>&nbsp
     &nbsp<input type="radio" name="Q8" id=Q8 value=2>&nbsp
     &nbsp<input type="radio" name="Q8" id=Q8 value=1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          
     </div>
     </p>
</div>
<div class="callrating">
                    
     <h3 class="name">9. Results and attendance records are displayed on time :</h3> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <p>
     <div class="rating">
     &nbsp<input type="radio" name="Q9" id=Q9 value=5>&nbsp
     &nbsp<input type="radio" name="Q9" id=Q9 value=4>&nbsp
     &nbsp<input type="radio" name="Q9" id=Q9 value=3>&nbsp
     &nbsp<input type="radio" name="Q9" id=Q9 value=2>&nbsp
     &nbsp<input type="radio" name="Q9" id=Q9 value=1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          
     </div>
     </p>
</div>
<div class="callrating">
                    
     <h3 class="name">10. Toilets/washrooms are hygienic and properly maintained :</h3> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <p>
     <div class="rating">
     &nbsp<input type="radio" name="Q10" id=Q10 value=5>&nbsp
          &nbsp<input type="radio" name="Q10" id=Q10 value=4>&nbsp
          &nbsp<input type="radio" name="Q10" id=Q10 value=3>&nbsp
          &nbsp<input type="radio" name="Q10" id=Q10 value=2>&nbsp
          &nbsp<input type="radio" name="Q10" id=Q10 value=1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          
     </div>
     </p>
</div>
<div class="callrating">
                    
     <h3 class="name">11. Clean drinking water is available in the department and on the campus :</h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <p>
     <div class="rating">
     &nbsp<input type="radio" name="Q11" id=Q11 value=5>&nbsp
          &nbsp<input type="radio" name="Q11" id=Q11 value=4>&nbsp
          &nbsp<input type="radio" name="Q11" id=Q11 value=3>&nbsp
          &nbsp<input type="radio" name="Q11" id=Q11 value=2>&nbsp
          &nbsp<input type="radio" name="Q11" id=Q11 value=1>&nbsp&nbsp&nbsp&nbsp
          
     </div>
     </p>
</div>
<div class="callrating">
                    
     <h3 class="name">12. Grievances/problems are redressed /solved well in time :</h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
     <p>
     <div class="rating">
     &nbsp<input type="radio" name="Q12" id=Q12 value=5>&nbsp
     &nbsp<input type="radio" name="Q12" id=Q12 value=4>&nbsp
     &nbsp<input type="radio" name="Q12" id=Q12 value=3>&nbsp
     &nbsp<input type="radio" name="Q12" id=Q12 value=2>&nbsp
     &nbsp<input type="radio" name="Q12" id=Q12 value=1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          
     </div>
     </p>
</div>
<div class="callrating">
                    
     <h3 class="name">&nbsp13. The functioning of the placement cell(s) in the university/department is &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspsatisfactory :</h3> 
     <p>
     <div class="rating">
     &nbsp&nbsp&nbsp&nbsp<input type="radio" name="Q13" id=Q13 value=5>&nbsp
     &nbsp<input type="radio" name="Q13" id=Q13 value=4>&nbsp
     &nbsp<input type="radio" name="Q13" id=Q13 value=3>&nbsp
     &nbsp<input type="radio" name="Q13" id=Q13 value=2>&nbsp
     &nbsp<input type="radio" name="Q13" id=Q13 value=1>&nbsp
          
     </div>
     </p>
</div>
<div class="callrating">
                    
     <h3 class="name">14. Equipment in the lab(s) are in working condition :</h3> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <p>
     <div class="rating">
     &nbsp<input type="radio" name="Q14" id=Q14 value=5>&nbsp
     &nbsp<input type="radio" name="Q14" id=Q14 value=4>&nbsp
     &nbsp<input type="radio" name="Q14" id=Q14 value=3>&nbsp
     &nbsp<input type="radio" name="Q14" id=Q14 value=2>&nbsp
     &nbsp<input type="radio" name="Q14" id=Q14 value=1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          
     </div>
     </p>
</div>
<div class="callrating">
                    
     <h3 class="name">15. The campus is green and eco friendly :</h3> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <p>
     <div class="rating">
     &nbsp<input type="radio" name="Q15" id=Q15 value=5>&nbsp
     &nbsp<input type="radio" name="Q15" id=Q15 value=4>&nbsp
     &nbsp<input type="radio" name="Q15" id=Q15 value=3>&nbsp
     &nbsp<input type="radio" name="Q15" id=Q15 value=2>&nbsp
     &nbsp<input type="radio" name="Q15" id=Q15 value=1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          
     </div>
     </p>
</div>
<div class="callrating">
                    
     <h3 class="name">16. The buildings/classrooms are accessible to differently abled persons :</h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
     <p>
     <div class="rating">
     &nbsp<input type="radio" name="Q16" id=Q16 value=5>&nbsp
     &nbsp<input type="radio" name="Q16" id=Q16 value=4>&nbsp
     &nbsp<input type="radio" name="Q16" id=Q16 value=3>&nbsp
     &nbsp<input type="radio" name="Q16" id=Q16 value=2>&nbsp
     &nbsp<input type="radio" name="Q16" id=Q16 value=1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          
     </div>
     </p>
</div>
                <div class="submit">
                
                    <input type="submit" value="Submit" class="button">
                </div>
            </form>
            
        </div>
        <script src="js/College.js"></script></b>
    </body>
</html>