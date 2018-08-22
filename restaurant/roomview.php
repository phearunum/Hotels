<?php
$room_name="";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Luxury Hotel in Sihanouk Ville | Sihanouk Ville Hotels | Official Site |​ Aristocrat Residence& Hotel</title>
    <meta name="description" content=" ">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="http://www.aristocrat-rh.com/images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="https://www.sokhahotels.com/sihanoukville/css/index.css" />
    <link rel="stylesheet" type="text/css" href="https://www.sokhahotels.com/sihanoukville/css/menu.css" />
    <link rel="stylesheet" type="text/css" href="../css/arhcss.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!--[if IE 7 ]>
    <style>
        #promo-fields{padding: 7px 5px}
        #titelfont{
            font-size: 20px;color: deeppink; font-family: Calibri;
        }

    </style>
    <![endif]-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript" src="https://www.sokhahotels.com/sihanoukville/js/custom-index.js"></script>
    <script type="text/javascript" src="https://www.sokhahotels.com/sihanoukville/js/main.js"></script>


</head>
<body style="background-image: url('../img/bgalert.png'); background-size: cover"">

<div id="wrapper" style="width: 1300px;height: auto; ">
    <div class="" style="width: 100%; height: 530px; background-position: bottom; background-size:cover;
     background-color:#FFF; position: absolute; padding-bottom: 5px;box-shadow: 2px 2px 7px 2px #9C9C9C">
        <div style="width:100%" >

            <div class="testSlider"></div>

        </div>
        <div class="" style="border-bottom: 1px solid silver;background-image: url('../img/bgalert.png')!important;
        height:33px;width:100%; background-size: cover; background-position: center;">

        </div>

    </div>
    <div class="" style="float: left; width: 100px;height: 30px ;background-image: url('../img/bgalert.png')!important
    ; position: absolute;border-radius: 0 0 5px 5px;text-align: center; font-size: 15px "><p style="font-size: 14px; margin-top: 5px">Careers</p></div>
    <div class="" style="float: left; width: 100px;height: 30px ;background-image: url('../img/bgalert.png')!important
    ; position: absolute;border-radius: 0 0 5px 5px ; margin-left: 110px;text-align: center;"><p style="font-size: 14px; margin-top: 5px">Service</p></div>
    <div class="" style="float: left; width: 100px;height: 30px ;background-image: url('../img/bgalert.png')!important
    ; position: absolute;border-radius: 0 0 5px 5px;margin-left: 220px;text-align: center; " > <p style="font-size: 14px; margin-top: 5px">How to </p></div>

    <div class="" style="float: right!important;right: 0px; width: 100px;height: 30px ;background-image: url('../img/bgalert.png')!important
    ; position: absolute;border-radius: 0 0 5px 5px;text-align: center; font-size: 15px "><p style="font-size: 14px; margin-top: 5px">Lagauge</p></div>
    <div class="" style="float: right!important;right: 110px; width: 100px;height: 30px ;background-image: url('../img/bgalert.png')!important
    ; position: absolute;border-radius: 0 0 5px 5px;text-align: center; font-size: 15px "><p style="font-size: 14px; margin-top: 5px">Site Map</p></div>
    <div class="" style="float: right!important;right: 220px; width: 100px;height: 30px ;background-image: url('../img/bgalert.png')!important
    ; position: absolute;border-radius: 0 0 5px 5px;text-align: center; font-size: 15px "><p style="font-size: 14px; margin-top: 5px">Privacy</p></div>

    <center> <div class="logo" style="position: relative">
            <a href="../index"><img src="../img/logo1.png" alt="Logo" /></a>
        </div></center>

    <div id="header">


        <div class="main-menu" style="width:1000px; margin-right:130px" >
            <ul class="nav" style="background-image: url('../img/bgalert.png')!important; background-color: transparent!important;
            background-size:cover;padding:0px;height:40px;border-bottom: 2px solid white   ;">
                <li class=""><a class="menu_item" href="/">Home</a></li>
                <li class=""><a class="menu_item" href="room">  Accommodation</a></li>
                <li class=""><a class="menu_item" href="/">Special Offers</a></li>
                <li class=""><a class="menu_item" href="/">Reservation </a></li>
                <li class=""><a class="menu_item" href="/">Restaurant</a></li>
                <li class=""><a class="menu_item" href="/"> Facilities  </a></li>
                <li class=""><a class="menu_item" href="/">Service</a></li>
                <li class=""><a class="menu_item" href="/">Event </a></li>
                <li class=""><a class="menu_item" href="/">Gallery</a></li>
                <li class=""><a class="menu_item" href="/">Contact Us</a></li>




            </ul>

        </div>

    </div>
    <div class="" style="height:auto;width:1100px; background-color:#f6f6f6 ;margin-top: 330px;
     margin-left:100px;box-shadow: 2px 2px 20px 2px #9C9C9C">
        <?php
        if(isset($_GET['id'])){


            $string_to_encrypt=$_GET['id'];
            $password="{999999999}";
            $encrypted_string=openssl_encrypt($string_to_encrypt,"AES-128-ECB",$password);
            $decrypted_string=openssl_decrypt($string_to_encrypt,"AES-128-ECB",$password);
           // echo $decrypted_string;
            include('../arc.function/Database.php');
            $db = new Database();
            $db->connect();
            $db->sql("SELECT * from tbl_room WHERE roomID='$decrypted_string'");
            $res = $db->getResult();
            foreach($res as $output){
                $room_name=$output["roomName"];
               ?>
                <div class="" style="height:40px;width:100%; background-image: url('../img/bgalert.png');background-size:cover;
        box-shadow:0px 1px 5px #fff;opacity: 0.8">
                    <div id="titelfont" style="font-size: 17px; color:deeppink;
           font-family: Calibri;padding-top: 10px; padding-left: 10px;text-transform: uppercase;">HOME >> ROOMS & RATE >> <?php echo $room_name ?> </div>

                </div>
                <br/>
                <div class="effect2 w3-white" style=" width:800px; height: 500px; border-radius: 5px; padding:5px;box-shadow: 1px 1px 5px 1px #9C9C9C; margin-left: 50px; float:left;cursor: pointer">
                    <img id="London" class="city w3-animate-left" src="../image/imgroom/<?php echo $output["roomImg"] ?>" width="100%" height="100%" style="display:none; cursor: pointer" onclick="onClick(this)" class="w3-hover-opacity"/>
                    <img id="Paris" class="city w3-animate-left" src="../image/slide/room66.jpg" width="100%" height="100%" style="" style="display:none;cursor: pointer" onclick="onClick(this)" class="w3-hover-opacity"/>
                    <img id="Tokyo" class="city w3-animate-left" src="../image/imgroom/<?php echo $output["roomImg"] ?>" width="100%" height="100%" style="display:none;cursor: pointer" onclick="onClick(this)" class="w3-hover-opacity"/>
                   <br/>
                </div>
               <div class="" style="cursor: pointer; ">
                   <button class="w3-bar-item  tablink" onclick="openCity(event, 'London')"><img src="../image/slide/room66.jpg" width="200px"  style="cursor: pointer"/> </button>
                   <button class="w3-bar-item  tablink" onclick="openCity(event, 'Paris')"><img src="../image/slide/room66.jpg" width="200px"  style="cursor: pointer"/></button>
                   <button class="w3-bar-item  tablink" onclick="openCity(event, 'Tokyo')"><img src="../image/slide/room66.jpg" width="200px"  style="cursor: pointer"/></button>
               </div>
                <br/>   <br/>
                <div class=" w3-left" style="width:100%; float: left; margin-left: 50px">
                    <div class="w3-bar" >

                        <button class="w3-bar-item  w3-border-top w3-border-left w3-border-right" style=" border-radius:5px 5px 0px 0px;height: 35px;color: deeppink;
                         background-image: url('../img/bgalert.png') " onclick="openCity('London')">FEATURES</button>

                    </div>

                    <div id="London" class=" w3-white w3-padding w3-left" style="width:1000px; margin-right: 50px;height: 150px;border-radius:5px 5px 5px 5px; box-shadow: 1px 2px 1px #9C9C9C">

                        <p class="w3-animate-right w3-margin-top" style="color:#636363"><?php echo $output["roomDesc"] ?></p>
                    </div>

                </div>
                <div class="w3-white w3-padding " style="width:1000px;height: 250px; margin-top: 330px; border-radius:5px 5px 5px 5px; box-shadow: 1px 2px 1px #9C9C9C;margin-left: 50px;margin-right: 50px">

                    <div class="w3-bar" style=" margin-left:-15px;">
                        <button class="w3-bar-item  w3-border-top w3-border-left w3-border-right" style=" border-radius:5px 5px 0px 0px;height: 35px;text-transform: uppercase;
                        color: deeppink; background-image: url('../img/bgalert.png') " onclick="openCity('London')">Room Amenities</button>

                    </div>
                    <div class="" style="border-bottom: 1px solid silver;width: 500px ; margin-left: 251px"></div>

                    <br/>
                    <div class=" w3-left w3-border-0 w3-animate-bottom " style="width: 250px; margin-left: 50px;border:none;color:#636363">
                        <ul>
                            <li>。Air Conditioning</li>
                            <li>。 Executive Desk</li>
                            <li>。Flat Screen LCD TV</li>
                            <li>。 Cable TV Channels</li>
                            <li>。 WiFi Internet Service</li>
                            <li>。 Closet, Luggage Rack, & Slippers</li>


                        </ul>
                    </div>
                    <div class=" w3-right w3-animate-bottom" style="width: 250px; margin-right:200px;color:#636363">
                        <ul>
                            <li>。Air Conditioning</li>
                            <li>。 Executive Desk</li>
                            <li>。Flat Screen LCD TV</li>
                            <li>。 Cable TV Channels</li>
                            <li>。 WiFi Internet Service</li>
                            <li>。 Closet, Luggage Rack, & Slippers</li>


                        </ul>
                    </div>
                </div>

               <?php

            }
        }
        ?>
      <div class="w3-margin-top" style="width:100%;position: relative;background-color: ; min-height:600px;">

              <div class="w3-left" style="width: 400px">
                  <div class="w3-left" style="margin-left: 50px; width: 400px;padding: 10px;border-radius:5px 5px 5px 5px; box-shadow: 1px 2px 1px #9C9C9C">The room was very beutiful and bayviewA place to trust a right location for relaxing and bay view _ A place which made me feels like my second home. tasty foods, standards reservation and so much more I just can't describe in fews sentence. Friendly receptions</div>



              </div>

              <div class="effect7 w3-right w3-padding" style="width: 310px; margin-right:50px">
                  <form method="post" action="">
                      <div class="form-group" style="padding: 0px;margin: 0px">
                          <p for="email">Name:</p>
                          <input type="text" class="" style="height: 25px; font-size: 14px;width: 280px" name="name" placeholder="Enter you name ...">
                      </div>
                      <div class="form-group"  style="padding: 0px;margin: 0px">
                          <p for="email">Email:</p>
                          <input type="email" class="" style="height: 25px; font-size: 14px;width: 280px" name="email" placeholder="Enter email">
                      </div>
                      <div class="form-group"  style="padding: 0px;margin: 0px">
                          <p for="comment">Comment:</p>
                          <textarea class="form-control" rows="3" name="comment" style=" font-size: 14px;width: 280px"></textarea>
                      </div>
                      <br/>
                      <button type="submit" name="feedback" class="btn btn-default" style="height: 30px; border-radius: 5px">Post</button>
                      <button type="reset" class="btn btn-default" style=" border-radius: 5px">Reset</button>
                  </form>
              </div>
          </div>



    </div>
<br/>
    <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
            <img id="img01" style="width:100%">
        </div>
    </div>

</div>
<script>
    function openCity(evt, cityName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " w3-red";
    }
</script>
<script>
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
    }
</script>
<!-- footer -->
<div id="footer" >
    <!-- Promotion Page -->

    <!-- //Promotion Page -->

</div><!-- /footer -->
<div id="popup_overlay" style="width:100%;height:100%;left:-100%">
    <div class="pro-detail" style="width:90% !important;height:80% !important">
        <div class="close">Close</div>
        <div class="div-tmp" id="div-tmp" style="width:100%;height:100%"></div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        //if(online){


        popupCenter2('pro-detail2',2);
        setTimeout(function() {
            // Do something after 5 seconds
            $('#popup_overlay2').hide();
        }, 500);
        //}
        /* Show Larger Map */
        $(".view_large_map2").click(function() {
            document.getElementById('popup_overlay2').style.left = 0;
            $('#popup_overlay2').fadeIn('slow');
        });
        /* get current location */
    });

     });*/

    function popupCenter2(element_name,element_type){
        var windowWidth = document.documentElement.clientWidth;
        var windowHeight = document.documentElement.clientHeight;
        $("#popup_overlay2").css({"display":"block","height":windowHeight,"width":windowWidth});
        var variable='';
        if(element_type==1){variable="#"+element_name;}
        else if(element_type==2){variable="."+element_name;}
        /*$(variable).css("left",(($(window).width() - $(variable).outerWidth()) / 2) + $(window).scrollLeft() + "px");
         $(variable).animate({"top":(($(window).height() - $(variable).outerHeight()) / 2) + $(window).scrollTop() + "px"},50);*/
        $(variable).css("left",(($(window).width() - $(variable).width()) / 2));
        $(variable).css({"top":(($(window).height() - $(variable).height()) / 2)});
        $(variable).fadeIn('5000');
    }
    $('.close2').live('click',function(){
        $("#popup_overlay2").fadeOut('500');
    });
</script>


<script type="text/javascript">

    function fnc1()
    {

        var url="https://reservation.travelanium.net/propertyibe2/rates?propertyId=430";
        dateIn__='2017-11-08';
        dateOut__='2017-11-10';
        rooms__='1';
        adult__='2';
        child__='0';

        // var dateIn__=document.getElementById("checkin_date");
        window.open(url+'&onlineId='+4+'&checkin='+dateIn__+'&checkout='+dateOut__+'&numofroom='+rooms__+'&numofadult='+adult__+'&numofchild='+child__,"");
    }
</script>

<script src="js/jquery.slider.js"></script>

<link rel="stylesheet" href="css/jquery.slider.css">
<script>
    var currentIndex = 0;
    $('.testSlider').slider({
        width: 					1300, 					// 幻灯片的宽度
        height:     			500,
    });

</script>
<link rel="stylesheet" type="text/css" href="https://www.sokhahotels.com/sihanoukville/js/datepicker/jquery-ui.css"/>
<script type="text/javascript" src="https://www.sokhahotels.com/sihanoukville/js/datepicker/jquery.ui.datepicker.js"></script>
<div class="" style="width: 100%;height: 200px;background-image: url('../img/bgalert.png'); background-size: cover">

</div>
<link rel="stylesheet" type="text/css" href="https://www.sokhahotels.com/sihanoukville/css/menu.css" />
</body>
</html>