<?php
session_start();
if(!isset($_SESSION['admin']) && !isset($_SESSION['name'])){
    header("location:login.php");

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Aristocrat Residence and hotel , aristocrat in sihanouk ville , hotel in sihanouk ville, sihanouk ville,
     sihanouk ville hotel 5 star, hotel of sihanouk ville , top hotel in sihanouk ville,
    hotel in sihanoukville,list hotels sihanoukville,new hotels sihanoukville,top hotels in sihanoukville,best resort in sihanoukville,
sihanoukville luxury hotels, aristocrat hotel, aristocrat office page,hotel sihanoukville booking, five star hotel sihanoukville,
hotel near beach, beach road hotel sihanoukville tripadvisor, sihanoukville cambodia luxury hotel, sihanoukville hotel near beach "/>

    <meta name="description" content=" welcome sihanouk ville, hotel sihanouk ville , sihanouk ville of sihanouk ville, sihanouk ville , sihanouk ville restaurent, Welcome to Aristocrat , Aristocrat Residence and hotel "/>
    <link rel="stylesheet" href="../style/cssw3.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php include('../function/connection.php') ;?>


    <style>

        .w3-sidenav a{
            font-size: 14px;
        }
        .w3-sidenav a:hover{
            color: #e91e63!important; background: transparent!important; margin-left: 10px; transition: 1s;
        }
        .w3-theme {color:#fff!important;background-color: #2b3770!important}
        .w3-theme a{color:white; text-decoration: none;}
    </style>


</head>
<body >

<!-- Top container -->
<div class="w3-container w3-top  w3-large w3-padding w3-theme" style="z-index:4;color:white">
    <button class=" w3-hide-large w3-padding-0  w3-theme  " onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
    <span class="w3-right " style="font-size: 13px;"><?php echo $_SESSION['admin'] ;?></span>
</div>

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left w3-theme" style="z-index:3;width:280px;" id="mySidenav"><br>
    <div class="w3-container w3-row ">
        <div class="w3-col s4 ">
            <img src="../user/<?php echo $_SESSION['profile'] ;?>" class="w3-circle w3-margin-right" style="width:46px">
        </div>
        <div class="w3-col s8 ">
            <div style="padding-top: 30px;"><span><strong> Admin : <?php echo $_SESSION['name'] ;?></strong></span><br></div>
            <a href="#" class="w3-hover-none w3-hover-text-red w3-show-inline-block"><i class="fa fa-envelope"></i></a>
            <a href="#" class="w3-hover-none w3-hover-text-green w3-show-inline-block"><i class="fa fa-user"></i></a>
            <a href="#" class="w3-hover-none w3-hover-text-blue w3-show-inline-block"><i class="fa fa-cog"></i></a>
        </div>
    </div>
    <hr>

    <ul class="w3-ul" style="border: 0px;  margin-left: -10px ;">
        <li><a href="#"> ROOM MANAGER </a> </li>
        <li><a href="#"> Gategory  </a> </li>
        <li><a href="#"> User Manager  </a> </li>
        <li><a href="#"> Feedback  </a> </li>
        <li><a href="#"> Report </a> </li>
    </ul>
</nav>


<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity hotel-nav" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:280px;margin-top:37px;">

    <!-- Header -->
    <header class="w3-container hotel-nav_hover w3-card-2 w3-padding w3-center " style="padding-top:22px">
        <h4><b><i class="fa fa-dashboard"></i>PROMOTION MANAGEMENT </b></h4>
    </header>
    <hr/>

    <div class="w3-container w3-padding w3-center">
        <script type="application/javascript">
            function img_up(){var fup = document.getElementById('upload');
                var fileName = fup.value;
                var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
                if(ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext== "PNG" ||  ext=="png"){return true;}else{alert("Image format not supported!");
                    fup.focus();
                    return false;}}
        </script>
        <?php

        $rd=rand();
        if(isset($_FILES['files'])){
            $room_id=$_POST['r_type'];
            $errors= array();
            foreach($_FILES['files']['tmp_name'] as $key => $tmp_name){
                $file_name = $key.$rd.$_FILES['files']['name'][$key];
                $file_size =$_FILES['files']['size'][$key];
                $file_tmp =$_FILES['files']['tmp_name'][$key];
                $file_type=$_FILES['files']['type'][$key];
                if($file_size > 2097152){
                    $errors[]='File size must be less than 2 MB';
                }
                $sql="INSERT into image(img_name,room_id) VALUES('$file_name','$room_id'); ";
                $desired_dir="photo";
                if(empty($errors)==true){
                    if(is_dir($desired_dir)==false){
                        mkdir("$desired_dir", 0700);		// Create directory if it does not exist
                    }
                    if(is_dir("$desired_dir/".$file_name)==false){
                        $src = imagecreatefromjpeg($tmp_name);
                        list($width,$height)=getimagesize($tmp_name);
                        $newwidth=($width/$height)*150;
                        $newheight=150;
                        $tmp=imagecreatetruecolor($newwidth,$newheight);
                        imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
                        $rd=rand();
                        $filename = "photo/".$file_name;
                        imagejpeg($tmp,$filename,100);
                        imagedestroy($src);
                        move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
                    }else{									// rename the file if another one exist
                        $new_dir="$desired_dir/".$file_name.time();
                        rename($file_tmp,$new_dir) ;
                    }
                    if ($conn->query($sql) === TRUE) {
                        echo ('<center>
                        <div class="alert alert-info w3-animate-top w3-center"  id="save" style="width: 250px;padding: 12px; margin-top: -100px;">
                            <strong> Photo Uploaded!</strong> Save Successful.</div>
                    </center>');
                        echo("<script> window.open('upload.php','_self')</script>   ");
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }else{
                    print_r($errors);
                }
            }
            if(empty($error)){


            }
        }


        ?>
        <div class="row">
            <div class="col-sm-6  hotel-nav_hover w3-padding w3-margin w3-card-2" style="margin-top: 0px;">
                <form class="form-inline" style="margin-top: -5px;" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <p for="email">Add Image :</p>
                        <input type="file"  id="upload" class="file"  name="files[]" multiple accept="image/*"  />
                    </div>
                    <div class="form-group">
                        <p for="comment">Room Type:</p>
                        <select name="r_type" class=" form-control input-sm"  >
                            <?php

                            $get_room="SELECT * FROM room";
                            $check_room=$conn->query($get_room);
                            if($check_room->num_rows >0){
                                while ($name_room = $check_room->fetch_assoc()){

                                    ?>
                                    <option value="<?php echo $name_room['room_id'];?>"><?php echo $name_room['room_name'] ;?> </option>
                                    <?php
                                }
                            }
                            ?>



                        </select>
                    </div>
                    <input type="submit" value="upload" class="btn btn-info btn-sm" style="margin-top: 30px;"/>
                </form>

            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-12 w3-margin hotel-nav_hover w3-padding">
            <?php
            $get_room="SELECT * FROM image";
            $check_room=$conn->query($get_room);
            if($check_room->num_rows >0){
                while ($img = $check_room->fetch_assoc()){
                    ?>
                    <div class=" col-sm-2 " style="margin:5px!important; padding:0px">
                        <img src="photo/<?php echo $img ['img_name'];?>" class="img-responsive img-thumbnail" style="min-height: 150px;"/>
                    </div>

                    <?php
                }

            }
            ?>
        </div>
    </div>

</div>

<script>
    // Get the Sidenav
    var mySidenav = document.getElementById("mySidenav");

    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");

    // Toggle between showing and hiding the sidenav, and add overlay effect
    function w3_open() {
        if (mySidenav.style.display === 'block') {
            mySidenav.style.display = 'none';
            overlayBg.style.display = "none";
        } else {
            mySidenav.style.display = 'block';
            overlayBg.style.display = "block";
        }
    }

    // Close the sidenav with the close button
    function w3_close() {
        mySidenav.style.display = "none";
        overlayBg.style.display = "none";
    }
</script>
<script>
    setTimeout(function() { $("#save").fadeOut(); }, 2000);


</script>

</body>
</html>
