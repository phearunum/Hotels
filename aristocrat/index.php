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
    <header class="w3-container hotel-nav_hover w3-card-2 w3-padding " style="padding-top:22px">
        <h4><b><i class="fa fa-dashboard"></i> ARISTOCRAT MANAGEMENT </b></h4>
    </header>
<hr/>
    <div class="w3-container w3-center" style=" min-height: 600px;">

        <div class="row">

            <div class="col-sm-3 ">
                <a href="reservation.php" style="text-decoration: none;">
                    <div class="w3-container w3-card-2 w3-padding w3-orange ">
                        <h4>Customer</h4>
                        <center><img src="img/global-experience-badge-lg.png" class="img-responsive"></center>
                    </div>
                </a>
            </div>
            <div class="col-sm-3  ">
                <div class="w3-container w3-card-2 w3-padding w3-blue ">
                    <h4>Reservation</h4>
                    <center><img src="img/icon_image.png" class="img-responsive"></center>
                </div>
            </div>
            <div class="col-sm-3">
               <a href="contact.php"style="text-decoration: none;">
                   <div class="w3-container w3-card-2 w3-padding w3-red ">
                       <h4>Contact </h4>
                       <center><img src="img/chat-2-icon.png" class="img-responsive"></center>
                   </div>
               </a>
            </div>
            <div class="col-sm-3">
                <div class="w3-container w3-card-2 w3-padding w3-theme">
                    <h4>Report</h4>
                    <center><img src="img/1430169805_Analytics-512.png" class="img-responsive"></center>
                </div>
            </div>
            <div class="col-sm-3 w3-margin-top">
                <a href="room.php" style="text-decoration: none">
                    <div class="w3-container w3-card-2 w3-padding w3-pink " >
                        <h4 style="text-decoration: none">Rooms</h4>
                        <center><img src="img/Hotel-bed-icon.png" class="img-responsive"></center>
                    </div>

                </a>
            </div>
            <div class="col-sm-3 w3-margin-top">
                <a href="upload.php" style="text-decoration: none">
                    <div class="w3-container w3-card-2 w3-padding w3-blue-grey " >
                        <h4 style="text-decoration: none">Upload Image</h4>
                        <center><img src="img/in_img.png" class="img-responsive"></center>
                    </div>

                </a>
            </div>
            <div class="col-sm-3 w3-margin-top">
                <a href="promotion.php" style="text-decoration: none">
                    <div class="w3-container w3-card-2 w3-padding w3-grey " >
                        <h4 style="text-decoration: none">Promotion </h4>
                        <center><img src="img/promotion.png" class="img-responsive"></center>
                    </div>

                </a>
            </div>
        </div>
    </div>



    <!-- Footer -->

    <!-- End page content -->
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

</body>
</html>
