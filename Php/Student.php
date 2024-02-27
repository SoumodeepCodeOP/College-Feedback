<?php
session_start();
include_once 'db.php';
$Father = $_POST['Father'];
$Mother = $_POST['Mother'];
$DOB = $_POST['DOB'];
$Blood_Group = $_POST['Blood_Group'];
$Gender = ($_POST['Gender']);
$Address = ($_POST['Address']);
$Pincode = $_POST['Pincode'];
$PO = $_POST['PO'];
$PS = $_POST['PS'];
$University = $_POST['University'];
$University_Roll_No = $_POST['University_Roll_No'];
$University_Reg_No = $_POST['University_Reg_No'];
$Completion = 'OK';
$unique_id = $_SESSION['unique_id'];
$email = $_SESSION['email'];
if(!empty($Father) && !empty($Mother) && !empty($DOB) && !empty($Blood_Group) && !empty($Gender) && !empty($Address) && !empty($Pincode)&& !empty($PO)&& !empty($PS)&& !empty($University)&& !empty($University_Reg_No)&& !empty($University_Roll_No)){

    

        

            
                
                      

            $sql2 = mysqli_query($conn,"UPDATE users SET `Father`= '$Father',`Mother`='$Mother',`DOB`='$DOB',`Blood_Group`='$Blood_Group',`Gender`='$Gender',`Address`='$Address',`Pincode`='$Pincode',`PO`='$PO',`PS`='$PS',`University`='$University',`University_Reg_No`='$University_Reg_No',`University_Roll_No`='$University_Roll_No',`Completion`='$Completion' WHERE $unique_id ='{$unique_id}' AND email='{$email}'");
                            echo "success";



                               
                    
                
            
       
    
}
else{
    echo "All Input Fields are Required";
}
?>