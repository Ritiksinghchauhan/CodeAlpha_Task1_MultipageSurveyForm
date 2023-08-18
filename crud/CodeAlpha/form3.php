<?php
 session_start();
 if(isset($_POST['submit'])){
foreach($_POST as $key=>$value)
{
    $_SESSION['info'][$key]=$value;

}
   $keys=array_keys($_SESSION['info']);
   if(in_array('submit',$keys)){
    unset($_SESSION['info']['next']);
   }
//    echo "<pre>";
//    print_r($_SESSION['info']);
//    echo "</pre>";
    header("Location:submit.php");
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="container">
    <form action="#"  method="POST" id="form3">
            <h1>Feedbacks</h1>
            <input type="text" placeholder="Feedback" name="feedback" value="<?=isset($_SESSION['info']['feedback'])? $_SESSION['info']['feedback']:''?>" required >
            <input type="text" placeholder="Give the ratings 1 to 10" name="rating" value="<?=isset($_SESSION['info']['rating'])? $_SESSION['info']['rating']:''?>" required>
            <input type="text" placeholder="From where you heared about us" name="heared" value="<?=isset($_SESSION['info']['heared'])? $_SESSION['info']['heared']:''?>">
            
            <div class="btn-box">
            <a href="form2.php">Back</a>
            <input type="submit" value="Submit"  name="submit">
            </div>
        </form>
       
    </div>
    
</body>
</html>