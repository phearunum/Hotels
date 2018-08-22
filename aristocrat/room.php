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
        <li ><a href="#">  Product Manager </a> </li>
        <li ><a href="#">  Gategory  </a> </li>
        <li ><a href="#">  User Manager  </a> </li>
        <li ><a href="#"> Feedback  </a> </li>
        <li ><a href="#"> Report </a> </li>
    </ul>
</div>

<div class="w3-main w3-container w3-padding-0" style=" margin-left:200px; min-height:600px!important; margin-top: 62px">
    <div class="w3-container  w3-padding " style=" min-height: 600px;">
     <center>   <div style=" font-weight: bold; font-size: 25px; color:darkslateblue">ROOMS MANAGEMENT </div></center>
        <div class="btn btn-primary btn-sm " style="margin-bottom: 10px;" id="open_form" > Add New</div>
        <div class="w3-container w3-padding  w3-theme form_insert " style="margin-bottom: 20px;" id="form_insert">
            <form class="form-inline" style="margin-top: -5px;" method="post">
                <div class="form-group">
                    <p for="email">Name :</p>
                    <input type="text" class="form-control input-sm"  name="room_name">
                </div>
                <div class="form-group">
                    <p for="pwd">Price:</p>
                    <input type="text" class="form-control input-sm"  name="room_price">
                </div>
                <div class="form-group">
                    <p for="pwd">Rooms:</p>
                    <input type="text" class="form-control input-sm" name="room_unit">
                </div>
                <div class="form-group">
                    <p for="comment">Comment:</p>
                    <textarea class="form-control" rows="1" style="width: 100%; min-width: 300px; color: black" name="room_info"></textarea>
                </div>
                <div class="form-group">
                    <p for="comment">Photo:</p>
                    <input type="file" name="room_img" class="form-control input-sm" style="width: 100px;">
                </div>
                <button type="submit" class="btn btn-sm w3-right w3-pink " style="margin-top: 30px;" name="btn_save"><span class="glyphicon glyphicon-floppy-saved"></span>Save</button>
            </form>
            <?php
            include('../function/get_update.php');
            $update_room= new get_update();
            $update_room->delete_data($conn);
            $update_room->save_data($conn);
            ?>


        </div>
        <table class="table table-hover " >
            <thead class="w3-theme">
            <tr>

                <th>Name </th>
                <th>Price</th>
                <th>Rooms</th>
                <th>Description</th>
                <th></th>
                <th></th>



            </tr>
            </thead>
            <tbody>

                <?php

                $get_room="SELECT * FROM room";
                $check_room=$conn->query($get_room);
                if($check_room->num_rows >0){
                    while ($name_room = $check_room->fetch_assoc()){
                        $id=$name_room['room_id'];
                        ?>
                        <tr>
                            <td><?php echo $name_room['room_name'];?></td>
                            <td><?php echo $name_room['room_price'];?></td>
                            <td> <?php echo $name_room['room_type'];?></td>
                            <td><?php echo substr($name_room['decription'],0,50);?>...</td>
                            <td><a href="edit.php?edit=<?php echo $name_room['room_id'];?>" class="btn btn-info btn-sm" style="font-size: 11px;"><span class="glyphicon glyphicon-pencil"></span>Edit</a></td>
                            <td><a href="#" data-toggle="modal" data-target="#myModal"  class="btn btn-danger btn-sm"style="font-size: 11px;"><span class="glyphicon glyphicon-remove"></span>Delete</a></td>
                       </tr>
                <?php

                    }

                }
                ?>


            </tbody>
        </table>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header w3-theme" style="padding: 8px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">System Request</h5>
                    </div>
                    <div class="modal-body">
                        <p> Do you want to delete this data</p>
                    </div>
                    <div class="modal-footer">
                        <div class="w3-right"><button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button></div>
                        <div class="w3-left "><a href="?delete=<?php echo $id;?>"><button type="button" class="btn  btn-sm " style="background:lightcoral;">Delete</button></a></div>
                    </div>
                </div>
            </div>
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
