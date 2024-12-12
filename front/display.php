
<?php
include 'config.php';

if(isset($_POST['displaysend'])){
    $results = mysqli_query($conn , "SELECT * FROM `list`")or die('cant select from list');
    if(mysqli_num_rows($results) > 0){
        while($row = mysqli_fetch_assoc($results)){
            $id = $row['id'];
            $image = $row['image'];
            $name = $row['name'];
            $location = $row['location'];
            $rent = $row['rent'];
            $type = $row['type'];
            $listings ='<div class="gallery">
                    <img src="../images/'.$image.'" alt="">
                    <div class="desc">
                     <a href="list.php?getid='.$id.'"><h3>'.$name.'</h3><a/>
                       <p>'.$location.'</p>
                       <p>'.$rent.' /=</p>
                       <p>'.$type.'</p>
                           </div></div>';
                           echo $listings ;               
                         
        } 
        
    }
    
}

if(isset($_POST['displayrooms'])){
    $results = mysqli_query($conn , "SELECT * FROM `rooms` WHERE homeid='$homeid'")or die('cant select from list');
    if(mysqli_num_rows($results) > 0){
        while($row = mysqli_fetch_assoc($results)){
            $image = $row['images'];
            $displays ='
                    <img src="../images/'.$image.'" alt="">
                    ';
                           echo $displays ;               
                         
        } 
        
    }
    
}

?>