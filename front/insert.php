<?php

include 'config.php';
/*
extract($_POST);

if (isset($_POST['namesend']) && isset($_POST['emailsend']) && isset($_POST['locationsend']) && isset($_POST['phonesend'])){
    mysqli_query($conn ,"INSERT INTO `users`(name,email,location,phone) VALUES('$namesend','$emailsend','$locationsend','$phonesend')")or die('cant connect to table users');

}

function filter($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripcslashes($data);

}*//*
include 'config.php';
session_start();

extract ($_POST);

if(isset($_POST['emailsend']) && isset($_POST['phonesend'])){
    if(1==1){
        echo'love you';
    } else{
        echo'dont love you';
    }
   /*  $checkdata = mysqli_query($conn, "SELECT * FROM `users` WHERE email = $emailsend AND phone = $phonesend")or die('cant check if record exist ');
  
   if(mysqli_num_rows($checkdata) > 0){
        $row= mysqli_fetch_assoc($checkdata);
       
    }
}

if(isset($_POST['displaysend'])){
    $results = mysqli_query($conn , "SELECT * FROM `list`")or die('cant select from list');
    if(mysqli_num_rows($results) > 0){
        while($row = mysqli_fetch_assoc($results)){
            $image = $row['image'];
            $name = $row['name'];
            $location = $row['location'];
            $rent = $row['rent'];
            $type = $row['type'];
            $listings ='<div class="gallery">
                    <img src="../images/'.$image.'" alt="">
                    <div class="desc">
                       <a href="about.html"><h3>'.$name.'</h3></a> 
                       <p>'.$location.'</p>
                       <p>'.$rent.' /=</p>
                       <p>'.$type.'</p>
                           </div></div>';
                           echo $listings ;                 
                         
        } 
        
    }
    
}

if(isset($_POST['itemid'])){
    $itemid = $_POST['itemid'];
       /*    $_SESSION["iditem"] = $_POST['itemid'];
      
      echo 'set session fullname to ' . $_POST['itemid'];
          header('location:about.html'); 
         
         $_SESSION['iditem'] = $itemid;
          echo $itemid;
         
          mysqli_query($conn,"DELETE FROM `list` WHERE id ='$itemid'");
      }*/
?>