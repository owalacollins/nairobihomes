<?php
include 'config.php';

extract($_POST);

if (isset($_POST['namesend']) && isset($_POST['emailsend']) && isset($_POST['locationsend']) && isset($_POST['phonesend'])){
    mysqli_query($conn ,"INSERT INTO `users`(name,email,location,phone) VALUES('$namesend','$emailsend','$locationsend','$phonesend')")or die('cant connect to table users');

}

function filter($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripcslashes($data);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nairobihomes</title>
     <link rel="stylesheet" href="login.css">
</head>
<body>
    <h3>nairobihomes register here</h3>
    <fieldset>
        <legend><img src="../images/logo.png" alt=""></legend>
        <form action="">
        <input type="text" id="name" placeholder="user name">
            <input type="email" id="email" placeholder="email">
            <input type="text" id="location" placeholder="location">
            <input type="number" id="phone" placeholder="phone number">
            <input style="background-color: rgb(248, 220, 148); color: black;" type="submit" value="submit"  onclick="adduser()" class="ctn">
        </form>
        <p> have an account ?<a href="login.php">log in</a></p>
    </fieldset>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" >

    </script>
    <script>
        function adduser(){
           
           var nameAdd = $('#name').val()
            var emailAdd = $('#email').val()
            var locationAdd = $('#location').val()
            var phoneAdd = $('#phone').val()
      
           $.ajax({
                url:"register.php",
                type:'POST',
                data:{
                    namesend: nameAdd,
                    emailsend:emailAdd,
                    locationsend: locationAdd,
                    phonesend: phoneAdd
                },
                success:function(data,status){
                    // funtion to display 
                    console.log(status);
                  //  alert(status);
                }
            }) 
        }
    </script>
</body>

</html>