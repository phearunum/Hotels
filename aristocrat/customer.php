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
        <a href="#"><?php echo $_SESSION['admin'] ;?> <span class="glyphicon glyphicon-record" style="color: greenyellow; font-size: 10px"></span></a>
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

<div class="w3-main w3-container w3-padding-0" style=" margin-left:200px; min-height:600px!important; margin-top: 62px">
    <div class="w3-container  w3-padding " style=" min-height: 600px;">
        <center>   <div style=" font-weight: bold; font-size: 25px; color:darkslateblue">RESERVATION MANAGEMNT </div></center>
        <div class="btn btn-primary btn-sm " style="margin-bottom: 10px;" id="open_form" > Update Customer </div>
        <div class="w3-container w3-padding  w3-theme form_insert " style="margin-bottom: 20px;" id="form_insert">

            <?php
            include('include/booking.php');
            $booking=new booking();
            $booking->customer_book($conn);
            $booking->booking_update($conn);
            $booking->update_book($conn);
            $booking->delete_booking($conn);
            ?>

        </div>
        <table class="table table-hover " >
            <thead class="w3-theme">
            <tr>

                <th> Name </th>
                <th> ID Number</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Adult</th>
                <th>Child</th>
                <th>Room</th>
                <th>Room Type</th>
                <th></th>
                <th></th>



            </tr>
            </thead>
            <tbody>
            <?php

            $get_room="SELECT * FROM customer";
            $check_room=$conn->query($get_room);
            if($check_room->num_rows >0){
                while ($get_customer = $check_room->fetch_assoc()){
                    $id=$get_customer['id'];
                    ?>
                    <tr>
                        <td><?php echo $get_customer['c_name'];?></td>
                        <td><?php echo $get_customer['pass_code']; ?></td>
                        <td><?php echo $get_customer['c_in'];?></td>
                        <td> <?php echo $get_customer['c_out'];?></td>
                        <td><?php echo $get_customer['adult'];?></td>
                        <td><?php echo $get_customer['child'] ;?></td>
                        <td><?php echo $get_customer['room'] ;?></td>
                        <td><?php echo $get_customer['room_type'] ;?></td>
                        <td><a href="customer.php?edit=<?php echo $get_customer['id'];?>" class="btn btn-info btn-sm" style="font-size: 11px;"><span class="glyphicon glyphicon-pencil"></span>Edit</a></td>
                        <td><a href="#"   class="btn btn-danger btn-sm"style="font-size: 11px;" onclick="return confirm('Are you sure you want to delete? <?php echo $id;?>')"><span class="glyphicon glyphicon-remove"></span>Delete</a></td>
                    </tr>
                    <?php

                }

            }
            ?>

            </tbody>
        </table>

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
