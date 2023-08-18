<?php
 session_start();
 if(isset($_POST['next'])){
foreach($_POST as $key=>$value)
{
    $_SESSION['info'][$key]=$value;

}
   $keys=array_keys($_SESSION['info']);
   if(in_array('next',$keys)){
    unset($_SESSION['info']['next']);
   }
//    echo "<pre>";
//    print_r($_SESSION['info']);
//    echo "</pre>";
    header("Location:form3.php");
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="container">
    <form action="#" method="POST" id="form2">
            <h1>About us</h1>
            <input type="text" placeholder="Country" name="country" value="<?=isset($_SESSION['info']['country'])? $_SESSION['info']['country']:''?>" required>
            <input type="text" placeholder="Pincode" name="pincode" value="<?=isset($_SESSION['info']['pincode'])? $_SESSION['info']['pincode']:''?>" required>
            <input type="text" placeholder="Address" name="address" value="<?=isset($_SESSION['info']['address'])? $_SESSION['info']['address']:''?>" required>
            <input type="text" placeholder="Religion" name="religion" value="<?=isset($_SESSION['info']['religion'])? $_SESSION['info']['religion']:''?>" required>
            <input type="text" placeholder="Caste" name="caste" value="<?=isset($_SESSION['info']['caste'])? $_SESSION['info']['caste']:''?>" required>
         

            <div class="btn-box">
                <a href="form1.php" id="an">Back</a>
                <input type="submit" value="Next"  name="next">
                
            </div>
           

        </div>
            

        </div>
        </form>
        

    </div>
    
</body>
</html>