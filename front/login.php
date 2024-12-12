
<?php
include 'config.php';
session_start();

//extract ($_POST);
if(isset($_POST['submit'])){
$phone = $_POST['phone'];
$email = $_POST['email'];
//echo $phone ;
//if(isset($_POST['emailsend']) && isset($_POST['phonesend'])){

//$email = $_POST['emailsend'];
//$phone = $_POST['phonesend'];
    $checkdata = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND phone = '$phone'")or die('cant check if record exist ');
   if(mysqli_num_rows($checkdata) > 0){
    //echo'love you';
       $row= mysqli_fetch_assoc($checkdata);
       $_SESSION['user_id'] = $row['id'];
       header('location:list.php');
    }else{
        $message[]='account dosent exist !';
    } 
}
function filter($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return  $data;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="login.css">
</head>
<body>
    <h3>nairobihomes login here</h3>
    <fieldset>
        <legend><img src="../images/logo.png" alt=""></legend>
        <?php
  if(isset($message)){
    foreach($message as $message){
        echo'<div class="message" onclick="this.remove();">'.$message.'</div>';
    }
  }
        ?>
        <form action="" method="post">
            <input type="email" name="email" placeholder="email">
            <input type="number" name="phone" placeholder="phone number">
            <input style="background-color: rgb(248, 220, 148); color: black; " type="submit" value="submit" name="submit" class="ctn">
        </form>
        <p> Dont have an account ?<a href="register.php">register here</a></p>
    </fieldset>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" >

    </script>
    <script>
 function adduser(){
    var emailAdd = $('#email').val()
    var phoneAdd = $('#phone').val()

    $.ajax({
        url:'login.php',
        type:'POST',
        data:{
            emailsend:emailAdd,
            phonesend:phoneAdd,
        },
        success:function(data,status){
          //  alert(status);
          
        }
    } ) 
 }
    </script>
</body>
</html>