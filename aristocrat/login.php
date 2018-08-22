<?php
session_start();
session_destroy();

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
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/cssw3.css">
    <link rel="stylesheet" href="../style/boostrap.css">
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../css/cssslide.css"/>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <?php include('../function/connection.php') ;?>
    <?php include('../include/user.php');?>
    <!-- jQuery library -->

    <style>


        body{
            margin: 0px auto;background-color: #181e2c;
            padding:0px; margin: 0px auto;left:0px;right: 0px; bottom: 0px; left: 0px;font-family: OptimaRoman,Arial,Segoe,'Segoe UI',Candara,Calibri,sans-serif;
        }


    </style>

</head>
<body>

<!------ End --------------------Header------------------>
<center><h1 class="w3-text-shadow-white w3-text-yellow w3-padding" style="font-weight: bold; font-family:"Segoe UI", Arial, sans-serif"> ARISTOCRAT RESIDENCE AND HOTEL</h1></center>

<div class="w3-container" style="margin-top: 80px;">
    <div class="row">
        <div class="col-sm-12">
            <center><h3 class="w3-text-white"> Admin Login </h3></center>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-3">
           <center> <img src="logo.png" class="img-responsive"/></center>
        </div>
        <div class="col-sm-4" style="margin-top: 20px;">

            <div class=" w3-padding w3-border" style="border-radius: 5px;" >

                <form role="form" method="get" action="../include/controler.php">
                    <div class="form-group ">
                        <label for="email" style="color:white;">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="pwd"style="color:white;">Password:</label>
                        <input type="password" class="form-control" name="pass" placeholder="Enter password">
                    </div>

                    <button type="submit" class="btn btn-default btn-sm btn-info" name="btn-login">Access Login </button>
                </form>


            </div>
            <div class="w3-container w3-padding">
                <p class="w3-text-white"> Back To Home Page Of Website Click  Here </p>
                <a href="#" > Go to Website </a>
            </div>
        </div>
    </div>

</div>

</body>

</html>