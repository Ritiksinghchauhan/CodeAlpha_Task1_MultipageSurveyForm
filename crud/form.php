<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="#" method="POST" id="form1">
           
            <h1>CodeAplha Survey </h1>
            <input type="text" placeholder="Name" name="name" required>
            <input type="email" placeholder="Email" name="email" required>
            <input type="text" placeholder="Phone" name="phone" required>
            <input type="text" placeholder="Gender" name="gender" required>

            <div class="btn-box">
                <button type="button" id="Next1">Next</button>
                
                <!-- <input type="submit" value="Next" class="btn-3" name="submit"> -->
            </div>
        </form>


        <form action="#" method="POST" id="form2">
            <h1>About us</h1>
            <input type="text" placeholder="Country" name="country" required>
            <input type="text" placeholder="Pincode" name="pincode" required>
            <input type="text" placeholder="Address" name="address" required>
            <input type="text" placeholder="Religion" name="religion" required>
            <input type="text" placeholder="Caste" name="caste" required>
         

            <div class="btn-box">
                <button type="button" id="Back1">Back</button>
                <button type="button"  name="submit" id="Next2">Next</button>
                
            </div>
        </form>


        <form action="#"  method="POST" id="form3">
            <h1>Feedbacks</h1>
            <input type="text" placeholder="Feedback" name="feedback" required >
            <input type="text" placeholder="Give the ratings 1 to 10" name="rating" required>
            <input type="text" placeholder="From where you heared about us" name="heared">
            
            <div class="btn-box">
                <button type="button" id="Back2">Back</button>
                <button type="submit" name="submit" >Submit</button>
                <!-- <input type="button" value="Back" class="btn-3" name="Back" id="Back2">
                <input type="submit" value="submit" class="btn-3" name="submit"> -->
            </div>
        </form>
        <div class="step-row">
            <div id="progress"> </div>
            <div class="step-col"><small>Step 1</small></div>
            <div class="step-col"><small>Step 2</small></div>
            <div class="step-col"><small>Step 3</small></div>

        </div>
    </div>


    <script>

        var Form1=document.getElementById("form1");
        var Form2=document.getElementById("form2");
        var Form3=document.getElementById("form3");

        var Next1= document.getElementById("Next1");
        var Next2= document.getElementById("Next2");
        var Back1= document.getElementById("Back1");
        var Back2= document.getElementById("Back2");
        var progress= document.getElementById("progress");

        Next1.onclick=function(){
            Form1.style.left="-450px";
            Form2.style.left="40px";
            progress.style.width="250px";

        }
        Back1.onclick=function(){
            Form1.style.left="40px";
            Form2.style.left="450px";
            progress.style.width="130px";

        }
        Next2.onclick=function(){
            Form2.style.left="-450px";
            Form3.style.left="40px";
            progress.style.width="380px";

        }
        Back2.onclick=function(){
           
            Form2.style.left="40px"; 
            Form3.style.left="450px";
            
            progress.style.width="250px";

        }
    </script>

    

    
</body>
</html>



<?php

if(isset($_POST['submit']))
{

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $country=$_POST['country'];
    $pincode=$_POST['pincode'];
    $address=$_POST['address'];
    $religion=$_POST['religion'];
    $caste=$_POST['caste'];
    $feedback=$_POST['feedback'];
    $rating=$_POST['rating'];
    $heared=$_POST['heared'];

     $query="INSERT INTO survey_form (name,email,phone,gender,country,pincode,address,religion,caste,feedback,rating,heared)values('$name','$email','$phone','$gender','$country','$pincode','$address','$religion','$caste','$feedback','$rating','$heared')";
     $data=mysqli_query($conn,$query);

     if($data){
        echo "Data Inserted Into Database";
     }
     else{
        echo "Failed";
     }
}


?>
