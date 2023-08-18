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
    header("Location:form2.php");
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="container">
    <form action="#" method="POST" id="form1">
           
           <h1>😉😉 Survey😉😉 </h1>
           <input type="text" placeholder="Name" name="name" value="<?=isset($_SESSION['info']['name'])? $_SESSION['info']['name']:''?>" required>
           <input type="email" placeholder="Email" name="email" value="<?=isset($_SESSION['info']['email'])?$_SESSION['info']['email']:''?>" required>
           <input type="text" placeholder="Phone" name="phone" value="<?=isset($_SESSION['info']['phone'])?$_SESSION['info']['phone']:''?>" required>
           <input type="text" placeholder="Gender" name="gender" value="<?=isset($_SESSION['info']['gender'])?$_SESSION['info']['gender']:''?>" required>

           <div class="btn-box">
               
               
               <input type="submit" value="Next"  name="next">
           </div>
           

        </div>
       </form>
     

    </div>
    
</body>
</html>