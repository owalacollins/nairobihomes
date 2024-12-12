<?php
include 'config.php';

session_start();
$user_id = $_SESSION['user_id'] ;
echo $user_id;

if(!$user_id){
    header('location:login.php');
}

if(isset($_GET['getid'])){
    $itemid = $_GET['getid'];
    $_SESSION['iditem'] = $itemid;
          header('location:about.php'); 
      }

/* INSERT INTO `list` (`id`, `image`, `name`, `location`, `rent`, `type`) VALUES
('1', 'images.jpg', 'royal vila', 'embakasi', '5000', 'bedsitter'),
('2', 'elcortijo-1.jpeg', 'hamisi homes', 'kasarani', '56200', 'single room'),
('3', 'download.jpg', 'neema homes', 'naivas', '89520', 'bedsitter'), 
('4', '0aebe36d-65cb-46f9-b35c-e02f25c13d45.jpg', 'rukia app', 'westlands', '56200', 'single room'),
('5', 'list.webp', 'mwalimu plaza', 'jkuat', '5000', 'bedsitter'),
('6', 'GC-Living-03.webp', 'dimples homes', 'mwihoko', '5000', '1 bedroom'),
('7', 'kitchen.jpg', 'wega wangai', 'kangemi', '5000', 'bedsitter'),
('8', 'siting.jpg', 'serena homes', 'thika', '5000', 'bedsitter'),
('9', 'elcortijo-1.jpeg', 'biafra apartments', 'githurai', '56200', 'single room');*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="list.css">

 <!--  fonts--> 
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gupter:wght@400;500;700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Gupter:wght@400;500;700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/4d903c9eb4.js" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <section id="hed">
           <div class="cartitems">
            <h3> <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i><sup>2</sup></a></h3> 
           </div>
            <div class="content">
               <h1> Discover Your New Home</h1> 
               <h3>from here posibilities are everywhere.</h3> 
               <button class="ctn"><a href="filter.html"> filter</a></button>
            </div>
            </section>
    </header>
    <main>
        <section id="areas">
            <?php
               $checkitem= mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'") or die('cant select from uers');
               while($row = mysqli_fetch_assoc($checkitem)){?>
               <h2 class="topic">Explore Listings <?php echo $row['name'] ?></h2>
               <h4 class="subt">thank you for choosing us </h4>
               <?php
               }
            ?>
            <div id="container"> </div>
        </section>
        <section class="footer">
            <div class="div1">
                 <a href="#">home</a>
                 <a href="#">contact</a>
                 <a href="#">listings</a>
                 <a href="#">sign up  </a>
                
            </div>
            <hr>
            <div class="div2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure deserunt eaque possimus nulla debitis, quo dolor, deleniti inventore laborum sapiente exercitationem pariatur aspernatur recusandae accusamus magnam tempore doloribus excepturi nemo.</p>
            </div>
            
            <div class="div3">
                
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                     
                    
            </div>
            <hr>
                    </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" >

</script>
<script>
    $(document).ready(function(){
        displaylist()
    })
function displaylist(){
var displayitem = 'true';

$.ajax({
    url:'display.php',
    type:'POST',
    data:{
        displaysend:displayitem,
    
    },
    success:function(data,status){
      //  alert(status);
      $('#container').html(data);
    }
} ) 
};


</script>
</body>
</html>