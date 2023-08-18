<?php
session_start();
// echo "<pre>";
// print_r($_SESSION['info']);
// echo "</pre>";
if(isset($_SESSION['info'])){
    extract($_SESSION['info']);
    $conn=mysqli_connect('localhost','root','','surveydb');
    $sql=mysqli_query($conn,"INSERT INTO survey_form(name,email,phone,gender,country,pincode,address,religion,caste,feedback,rating,heared) VALUES('$name','$email','$phone','$gender','$country','$pincode','$address','$religion','$caste','$feedback','$rating','$heared')");
    
    if($sql){
        unset($_SESSION['info']);

        echo "Data saved successfully";
        echo '<a href="form1.php">Go Back</a>';
    }
    else{
        echo mysqli_error($conn);
    }

}


?>