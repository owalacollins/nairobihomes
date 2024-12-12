<?php
include 'config.php';

session_start();
$user_id = $_SESSION['user_id'] ;
echo $user_id;

if(!$user_id){
    header('location:login.php');
}
$homeid =  $_SESSION['iditem'];
echo $homeid;
/*

INSERT INTO `rooms` (`id`, `homeid`, `images`) VALUES 
('1', '1', 'siting.jpg'),
('2', '1', 'balcon.jpg'),
('3', '1', 'kitchen.jpg'),
('4', '1', 'kitchen.jpg'),
('5', '1', 'balcon.jpg'),
('6', '1', 'siting.jpg'),
('7', '2', 'kitchen.jpg'),
('8', '2', 'balcon.jpg'),
('9', '2', 'siting.jpg'),
('10', '2', 'kitchen.jpg'),
('11', '2', 'siting.jpg'),
('12', '2', 'balcon.jpg');
*/
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
      <section id="home">
        <div class="homecontainer">
          <!--  <img src="../images/kitchen.jpg" alt="">
            <img src="../images/balcon.jpg" alt="">
            <img src="../images/siting.jpg" alt="">
            <img src="../images/kitchen.jpg" alt="">
            <img src="../images/balcon.jpg" alt="">
            <img src="../images/siting.jpg" alt="">-->
        </div>
        <div class="details">
            <h1>3 bedroom apartment </h1>
            <h2> <i class="fa-solid fa-location-dot"> </i> location : <span>kasarani mwiki</span></h2>
            <h2><i class="fa-solid fa-people-roof"></i> managed by: <span> stephen </span></h2>
            <h2><i class="fa-solid fa-house"></i> type: <span>3 bedroom</span></h2>
            <h2><i class="fa-solid fa-money-bill"></i> rent: <span>1500 /=</span></h2>
             <h2><i class="fa-solid fa-hand-holding-droplet"></i> water: <span>1200/unit</span></h2>
            <h2><i class="fa-solid fa-money-bill"></i> deposit: <span>30000 /=</span></h2>
         
        </div>
        <div class="amenities">
            <h2>amenities</h2>
          <table border="1">
            <tr>
                <th>amenities</th>
                <th>availability</th>
            </tr>
            <tr>
                <td>security</td>
                <td>yes</td>
            </tr>
            <tr>
                <td>school</td>
                <td>available</td>
            </tr>
            <tr>
                <td>hospital</td>
                <td>available</td>
            </tr><tr>
                <td>hygiene</td>
                <td>perfect</td>
            </tr>
          </table>
        </div>
        <div class="extra">
            <h2>about</h2>
            <p>Lorem ipsum, dolor sit Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam ratione voluptas doloremque vero! Rem asperiores sequi recusandae doloremque nam animi aspernatur possimus quaerat. Veniam sed dolorem dicta laudantium aperiam enim.lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur repudiandae sunt similique distinctio natus rem placeat accusamus, iure, quidem vel aperiam! Nostrum consectetur ratione praesentium ea maxime doloribus sequi et. amet consectetur adipisicing elit. Aspernatur obcaecati non laboriosam quidem esse, officiis ad voluptates praesentium animi, amet nisi dolorum eveniet eum et numquam! Iusto ex enim nesciunt!</p>
            <button class="ctn"><a href="#"> add home to cart </a></button>
        </div>
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
        displaymore()
    })
function displaymore(){
var displayitems = 'true';

$.ajax({
    url:'display.php',
    type:'POST',
    data:{
        displayrooms:displayitems,
    
    },
    success:function(data,status){
      //  alert(status);
      $('#homecontainer').html(data);
    }
} ) 
};
</body>
</html>