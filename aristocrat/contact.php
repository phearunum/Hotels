<?php
session_start();
if(!isset($_SESSION['admin']) && !isset($_SESSION['name'])){
    header("location:login.php");

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="aristocrat in sihanouk ville , aristocrat hotel ,best hotel in sihanoukville , beach road hotel sihanoukville , Aristocrat Residence and hotel , aristocrat in sihanouk ville , hotel in sihanouk ville, sihanouk ville,hotel in sihanoukville,list hotels sihanoukville,new hotels sihanoukville,  aristocrat office page,hotel sihanoukville booking, five star hotel sihanoukville, hotel near beach, beach road hotel sihanoukville tripadvisor, sihanoukville cambodia luxury hotel, sihanoukville hotel near beach "/>

    <meta name="description" content=" welcome sihanouk ville, hotel sihanouk ville , sihanouk ville of sihanouk ville, sihanouk ville , sihanouk ville restaurent, Welcome to Aristocrat , Aristocrat Residence and hotel, aristocrat in sihanouk ville "/>
    <meta name="author" content="Aristocrat Residence And Hotel">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../style/cssw3.css"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php include('../function/connection.php')?>


    <style>
        .w3-sidenav{
            background: transparent!important;
        }
        .w3-sidenav a{
            font-size: 15px; color:#808080; background: transparent;
        }
        .w3-sidenav a:hover{
            color: #e91e63!important; background: transparent!important; margin-left: 10px; transition: 1s;
        }
        .w3-sidenav a{
            font-size: 15px; color:mediumblue;
        }
        .w3-theme {color:#fff!important;background-color:#3871ac!important}
        .w3-theme a{color:white; text-decoration: none;}
    </style>

</head>
<body>
<nav class="w3-sidenav w3-white w3-card-2 " style="display:none" id="mySidenav">
    <a href="javascript:void(0)"
       onclick="w3_close()"
       class="w3-closenav w3-large">Close &times;</a>
    <ul class="w3-ul">
        <li class="w3-blue">Jill</li>
        <li><a href="#">Members </a> </li>
        <li>Adam</li>
    </ul>
</nav>

<header class="w3-container w3-theme w3-top">
    <span class="w3-opennav w3-hide-large w3-left w3-large" style="left: 0" onclick="w3_open()" id="openNav">&#9776;</span>
    <div class="w3-left w3-container w3-hide-small" style="left: 0; max-width: 300px;">
        <a href="/aristocrat/"> <img src="logo.png" height="60px"/></a>

    </div>
    <div class="w3-container w3-right w3-padding w3-dropdown-click" style="right: 10px; margin-top: 10px;  text-decoration: none; color:white;">
        <img src="../user/<?php echo $_SESSION['profile'] ;?>"width="25px" class="img-rounded " onclick="drop_user()" style="margin-top: -5px;" />
        <a href="#"><?php echo $_SESSION['admin'] ;?></a>
        <div id="drop_user" class="w3-dropdown-content w3-card-2" style="margin-top: 20px;">
            <a href="?logout" style="color:white;" class="w3-theme"><span class="glyphicon glyphicon-log-out"></span> Profile </a>
            <a href="../aristocrat/index.php?logout" style="color:white;" class="w3-theme"><span class="glyphicon glyphicon-log-out"></span> Logout </a>

        </div>


    </div>
</header>

<div class="w3-sidenav w3-padding-0 w3-collapse w3-animate-left w3-theme  " style="width: 200px; margin-top:-5px; "id="mySidenav">
    <ul class="w3-ul" style="border: 0px;  margin-left: -10px ;">

        <li ><a href="../aristocrat"> Home </a> </li>
        <li ><a href="#"><span class="glyphicon glyphicon-play" style="font-size: 12px"></span> : Product Manager </a> </li>
        <li ><a href="#"><span class="glyphicon glyphicon-play" style="font-size: 12px"></span>  : Gategory  </a> </li>
        <li ><a href="#"><span class="glyphicon glyphicon-play" style="font-size: 12px"></span>  : User Manager  </a> </li>
        <li ><a href="#"><span class="glyphicon glyphicon-play" style="font-size: 12px"></span>  : Feedback  </a> </li>
        <li ><a href="#"><span class="glyphicon glyphicon-play" style="font-size: 12px"></span>: Report </a> </li>
    </ul>
</div>

<div class="w3-main w3-container w3-padding" style=" margin-left:200px; min-height:600px!important; margin-top: 62px">

        <center>   <div style=" font-weight: bold; font-size: 25px; color:darkslateblue"> CONTACT MANAGEMENT </div></center>
    <br/>
  <div class="w3-padding">
      <table class="table table-hover  w3-card-2" >
          <thead class="w3-theme">
          <tr>

              <th>Customer </th>
              <th>Country</th>
              <th>Email </th>
              <th>Subject</th>
              <th> Message </th>
              <th></th>
              <th></th>
          </tr>
          </thead>
          <tbody>

          <?php
         if(isset($_GET['read'])){
          $contact=$_GET['read'];
             $sql="SELECT * FROM contact WHERE con_id='$contact' ";
             $contact=$conn->query($sql);
               if($contact->num_rows >0 ){
                   while($con_name=$contact->fetch_assoc()){
                      ?>

                       <div class=" w3-container w3-padding w3-margin-0 w3-border w3-text-blue-grey" style="border-radius: 4px;">
                           <div class="row">
                               <div class="col-sm-12">
                                   <div class="col-sm-1"></div>
                                   <div class="col-sm-4 w3-light-grey w3-padding-4" style="border-radius: 5px;">
                                       <p> Name   : <?php echo $con_name['con_name'];  ?></p>
                                       <p> Emial : <?php echo  $con_name['con_mail'];?> </p>
                                       <p>Country :<?php echo  $con_name['con_contry'];?> </p>
                                       <p><?php echo  $con_name['con_date'];?> </p>
                                   </div>
                               </div>
                               <div class="col-sm-12">
                                   <div class="col-sm-1"></div>
                                   <div class="col-sm-9">
                                       <br/>
                                       <p> Subject : <?php echo  $con_name['con_subject'];?></p>
                                       <p><?php echo $con_name['con_mesange'];  ?></p>
                                   </div>
                               </div>

                           </div>

                       </div>
                       <hr/>
                       <?php
                   }

               }
         }else{

         }
          $get_room="SELECT * FROM contact";
          $check_room=$conn->query($get_room);
          if($check_room->num_rows >0){
              while ($name_room = $check_room->fetch_assoc()){
                  $id=$name_room['con_id'];
                  ?>
                  <tr>
                      <td><?php echo $name_room['con_name'];?></td>
                      <td><?php echo $name_room['con_contry'];?></td>
                      <td> <?php echo $name_room['con_mail'];?></td>
                      <td><?php echo $name_room['con_subject'] ?></td>
                      <td><?php echo substr($name_room['con_mesange'],0,50);?>...</td>
                      <td><a href="?read=<?php echo $id;?>" class="btn btn-info btn-sm" style="font-size: 11px;"><span class="glyphicon glyphicon-pencil"></span>Read</a></td>
                      <td><a href="#" data-toggle="modal" data-target="#myModal"  class="btn btn-danger btn-sm"style="font-size: 11px;"><span class="glyphicon glyphicon-remove"></span>Delete</a></td>
                  </tr>
                  <?php

                 }



         }
          ?>


          </tbody>
      </table>
      </div>


    </div>
    <footer class="w3-container w3-theme w3-padding w3-margin-0" style="margin:0px; border-left: 1px solid white">
        <h5>Footer</h5>
        <p>Footer information goes here</p>
    </footer>
</div>

<script>
    function w3_open() {
        document.getElementById("main").style.marginLeft = "25%";
        document.getElementById("mySidenav").style.width = "25%";
        document.getElementById("mySidenav").style.display = "block";
        document.getElementById("openNav").style.display = 'none';
    }
    function w3_close() {
        document.getElementById("main").style.marginLeft = "0%";
        document.getElementById("mySidenav").style.display = "none";
        document.getElementById("openNav").style.display = "inline-block";
    }
</script>
<?php
if(isset($_GET['logout'])){
    unset($_SESSION['admin']);
    unset($_SESSION['admin_photo']);
    session_destroy();
    //header("Location: abc.php");
    echo'<meta content="0;../aristocrat/login.php" http-equiv="refresh" />';
}
?>
<script>
    function drop_user() {
        var x = document.getElementById("drop_user");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>

</body>
</html>
