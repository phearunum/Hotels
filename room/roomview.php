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
    <link rel="stylesheet" type="text/css" href="css/arhcss1.css" />
    <link rel="stylesheet" type="text/css" href="css/arhcss2.css" />
    <link rel="stylesheet" type="text/css" href="/css/arhcss.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!--[if IE 7 ]>
    <style>
        #promo-fields{padding: 7px 5px}
        #titelfont{
            font-size: 20px;color: deeppink; font-family: Calibri;
        }

    </style>
    <![endif]-->
    <link rel="stylesheet" href="/css/w3.css">
    <script type="text/javascript" src="js/custom-css.js"></script>
    <script type="text/javascript" src="js/main-css.js"></script>
    <script src="/booking/resource/jquery/jquery-1.11.3.min.js"></script>
    <script src="/booking/resource/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script src="/booking/resource/jquery/jquery-ui-1.11.4/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/jquery-ui.css"/>
</head>
<body style="background:#f1f1f1">

<div id="wrapper" style="width: 1300px;height: auto; ">
    <div class="" style="width: 100%; height: 545px; background-position: bottom; background-size:cover;
     background-color:#FFF; position: absolute; padding-bottom: 5px;box-shadow: 2px 2px 7px 2px #9C9C9C">
        <div style="width:100%" >

            <div class="testSlider"></div>

        </div>
        <div class=" w3-center" style="border-bottom: 1px solid silver;background-image: url('../img/bgalert.png')!important;
        height:50px;width:100%; background-size: cover; background-position: center; padding: 10px; color: #4e5b6c; font-size: 15px ">
            <form id="booking_form" action=""  >
                <label>* CheckIn: </label>
                <input   id="date_of_arrival" class="date-picker "  placeholder="Check-in" type="text"
                        style="width: 125px;border:none; border-radius: 4px; background-image: url('/img/bgalert.png'); background-size: cover;height: 25px"/>
                <label>* CheckOut:</label>
                <input  id="date_of_departure" class="date-picker "  placeholder="Check-out" type="text"
                       style="width: 125px;border:none; border-radius: 4px; background-image: url('/img/bgalert.png'); background-size: cover;height: 25px" />
                <label>* Adults :</label>
                <select id="adult" class=""style="width:80px;border:none; border-radius: 4px; background-image: url('/img/bgalert.png'); background-size: cover;height: 25px">
                    <option value="1">1 adult</option>
                    <option value="2" selected>2 adults</option>
                    <option value="3">3 adults</option>
                    <option value="4">4 adults</option>
                    <option value="5">5 adults</option>
                    <option value="6">6 adults</option>
                    <option value="7">7 adults</option>
                    <option value="8">8 adults</option>
                    <option value="9">9 adults</option>
                </select>
                <label >* Child :</label>
                <select id="child" style="width:80px;border:none; border-radius: 4px; background-image: url('/img/bgalert.png'); background-size: cover;height: 25px" >
                    <option value="0" selected>0 children</option>
                    <option value="1">1 child</option>
                    <option value="2">2 children</option>
                    <option value="3">3 children</option>
                    <option value="4">4 children</option>
                    <option value="5">5 children</option>
                    <option value="6">6 children</option>
                    <option value="7">7 children</option>
                    <option value="8">8 children</option>
                    <option value="9">9 children</option>
                </select>
                <label >* Rooms :</label>
                <select id="room"  style="width:80px;border:none; border-radius: 4px; background-image: url('/img/bgalert.png'); background-size: cover;height: 25px">
                    <option value="1" selected>1 room</option>
                    <option value="2">2 rooms</option>
                    <option value="3">3 rooms</option>
                    <option value="4">4 rooms</option>
                    <option value="5">5 rooms</option>
                    <option value="6">6 rooms</option>
                    <option value="7">7 rooms</option>
                    <option value="8">8 rooms</option>
                    <option value="9">9 rooms</option>
                </select>
                <label >* Promo Code:</label>
                <input id="accesscode" class="" placeholder="Promo Code" type="text"  style="width: 125px;border:none; border-radius: 4px; background-image: url('/img/bgalert.png'); background-size: cover;height: 25px"/>
                <input type="text" class="w3-center" value="Check Avialability" id="submit" onclick="fnbooking()" style="background-color:#c55a83; border: 1px solid white; height: 25px;
             border-radius: 5px; color: #ffffff; cursor: pointer;
             "   >
            </form>

        </div>

    </div>
    <div class="" style="float: left; width: 100px;height: 30px ;background-image: url('/img/bgalert.png')!important
    ; position: absolute;border-radius: 0 0 5px 5px;text-align: center; font-size: 15px; border-bottom: 2px solid white   ;"><p style="font-size: 14px; margin-top: 5px">Careers</p></div>
    <div class="" style="float: left; width: 100px;height: 30px ;background-image: url('/img/bgalert.png')!important
    ; position: absolute;border-radius: 0 0 5px 5px ; margin-left: 110px;text-align: center;border-bottom: 2px solid white   ;"><p style="font-size: 14px; margin-top: 5px">Service</p></div>
    <div class="" style="float: left; width: 100px;height: 30px ;background-image: url('/img/bgalert.png')!important
    ; position: absolute;border-radius: 0 0 5px 5px;margin-left: 220px;text-align: center;border-bottom: 2px solid white   ; " > <p style="font-size: 14px; margin-top: 5px">How to </p></div>

    <div class="" style="float: right!important;right: 0px; width: 100px;height: 30px ;background-image: url('/img/bgalert.png')!important
    ; position: absolute;border-radius: 0 0 5px 5px;text-align: center; font-size: 15px;border-bottom: 2px solid white   ; "><p style="font-size: 14px; margin-top: 5px">Lagauge</p></div>
    <div class="" style="float: right!important;right: 110px; width: 100px;height: 30px ;background-image: url('/img/bgalert.png')!important
    ; position: absolute;border-radius: 0 0 5px 5px;text-align: center; font-size: 15px;border-bottom: 2px solid white   ; "><p style="font-size: 14px; margin-top: 5px">Site Map</p></div>
    <div class="" style="float: right!important;right: 220px; width: 100px;height: 30px ;background-image: url('/img/bgalert.png')!important
    ; position: absolute;border-radius: 0 0 5px 5px;text-align: center; font-size: 15px;border-bottom: 2px solid white   ; "><p style="font-size: 14px; margin-top: 5px">Privacy</p></div>


    <center> <div class="logo" style="position: relative">
            <a href="../index"><img src="../img/logo1.png" alt="Logo" /></a>
        </div></center>

    <div id="header" class="w3-center">


        <div class="main-menu w3-center" style="width:900px;text-align: center; margin-right:200px " >
            <ul class="nav" style="background-image: url('../img/bgalert.png')!important; background-color: transparent!important;
            background-size:cover;padding:0px;height:40px;border-bottom: 2px solid white   ;">
                <li class=""><a class="menu_item" href="/">Home</a></li>
                <li class=""><a class="menu_item" href="room">  Accommodation</a></li>
                <li class=""><a class="menu_item" href="/offers/special-offer">Special Offers</a></li>
                <li class=""><a class="menu_item" href="https://reservation.travelanium.net/propertyibe2/?propertyId=430&onlineId=4">Reservation </a></li>
                <li class=""><a class="menu_item" href="/restaurant/dinning">Restaurant</a></li>

                <li class=""><a class="menu_item" href="/services/services">Service</a></li>
                <li class=""><a class="menu_item" href="/event/events">Event </a></li>
                <li class=""><a class="menu_item" href="/gallery/gallerys">Gallery</a></li>
                <li class=""><a class="menu_item" href="/">Contact Us</a></li>




            </ul>

        </div>

    </div>
    <div class="w3-white" style="height:auto;width:1200px; margin-top: 350px; margin-left: 45px">
        <?php
        if(isset($_GET['id'])){
         include('../arc.function/secure.php');
            $secure=new secure();
            $encrypted = $_GET['id'];
            $url=$secure->decryptIt($encrypted);
            include('../arc.function/Database.php');
            $db = new Database();
            $db->connect();
            $db->sql("SELECT * from tbl_room WHERE roomID='$url'");
            $res = $db->getResult();

            foreach($res as $output){
                $room_name=$output["roomName"];
                $roomID=$output["roomID"];

               ?>
                <div class="" style="height:40px;width:100%; background-image: url('../img/bgalert.png');background-size:cover;
        box-shadow:0px 1px 5px #fff;opacity: 0.8">
                    <div class="titel-them-css" style="font-size: 17px; color:deeppink;
           font-family: Calibri;padding-top: 10px; padding-left: 10px;text-transform: uppercase;text-shadow: 2px 2px #ffffff ;">HOME >> ROOMS & RATE >> <?php echo $room_name ?> </div>

                </div>
                <br/>
                <div class="w3-right effect7 w3-right w3-padding " style="width: 250px; height: auto; background-color: white; margin-right:40px">
                    <?php

                    $Dbs =new Database();
                    $Dbs->connect();
                    $Dbs->sql("SELECT * FROM tbl_room WHERE roomID!='$roomID' limit 4");
                    $ress = $Dbs->getResult();
                    foreach($ress as $outputs) {
                        $string_to_encrypt=$outputs["roomID"];
                        $srting_roomName=$outputs["roomName"];
                       // $string_to_encrypt=$_GET['id'];
                        $keys=$output["roomID"];
                        $key_pin=$output["roomName"];

                        $urls=  $secure->encryptIt( $string_to_encrypt);
                        $pins= $secure->encryptIt($key_pin);


                        ?>
                      <a href="?id=<?php echo $urls ?> & secure_key=<?php echo $pins ?>">
                          <div class="box effect7" style="width:100%;margin-top: -2px;padding: 5px; cursor: pointer;height: 180px">
                              <img src="../image/imgroom/<?php echo $outputs["roomImg"];  ?>" width="100%" height="100%" class="w3-hover-opacity" />
                              <div style="width: 100%;height: 30px; background-image:url('../img/bgalert.png');
                            color: deeppink ;margin-top:-30px;position: relative;font-size: 17px;text-align: center;text-shadow: 1px 1px #FFF;"><?php echo $outputs["roomName"];  ?></div>
                          </div>
                      </a>
                        <?php
                    }
                    ?>


                </div>
<div class="w3-container w3-left  " style="width:900px;position: relative; border-radius: 5px; padding-top: 20px;padding-bottom: 20px">

    <div class="effect2 w3-white w3-left" style=" width:600px; height: 400px; border-radius: 5px; padding:5px;box-shadow: 1px 1px 5px 1px #9C9C9C; margin-left: 15px; float:left;cursor: pointer">
        <?php
        $dbImg =new Database();
        $dbImg->connect();
        $dbImg->sql("SELECT * FROM tbl_img WHERE roomID='$roomID' Limit 3");
        $reImg= $dbImg->getResult();
        foreach($reImg as $outImg) {
            $imgShow=$outImg["imgUrl"];
            $imgID=$outImg["imgName"];
            ?>
            <img id="<?php echo $outImg["imgID"]?>" class="city w3-animate-left" src="/image/imgroom/<?php echo $outImg["imgUrl"] ?>"
                 width="590" height="390" style="cursor: pointer; position: absolute" onclick="onClick(this)" class="w3-hover-opacity"/>
            <?php
        }

        ?>

        <br/>
    </div>
    <div class="w3-right" style="cursor: pointer;height: 400px;padding-left: 30px;width: 200px; margin-right: 50px">
        <?php
        $dbImgs =new Database();
        $dbImgs->connect();
        $dbImgs->sql("SELECT * FROM tbl_img WHERE roomID='$roomID' Limit 3");
        $reImgs= $dbImgs->getResult();
        foreach($reImgs as $outImgs) {
            ?>
            <button class="w3-bar-item  tablink" onclick="openCity(event, '<?php echo $outImgs["imgID"]?>')">
                <img src="/image/imgroom/<?php echo $outImgs["imgUrl"] ?>" width="170" height="110"  style="cursor: pointer"/> </button>
            <?php

        }

        ?>


    </div>
</div>
<div class="w3-container w3-left" style="width:900px; margin-top: 0px;padding-top: 20px;padding-bottom: 20px;border-radius: 5px">
    <div class=" w3-bar w3-left " style="width:100%; float: left; margin-left: 20px;height: 200px;">
            <button class="w3-bar-item  w3-border-top w3-border-left w3-border-right botton" style=" border-radius:5px 5px 0px 0px;height: 35px;color: deeppink; margin-top: 0px;
               background-image: url('../img/tab.png')         ">FEATURES</button>

        <div  class=" w3-padding w3-left box effect3 effect1 w3-hover-them " style="width:800px;height: 150px; margin-top: 0px;">

            <div class="w3-animate-right w3-margin-top w3-padding" style="color:#636363"><?php echo $output["roomDesc"] ?></div>
        </div>
    </div>
    <div class="w3-bar"style="width:100%; float: left; margin-left: 20px;" >
        <button class="w3-bar-item w3-border-left w3-border-right  botton " style=" border-radius:5px 5px 0px 0px;height: 35px;text-transform: uppercase;
                        color: deeppink;  background-image: url('../img/tab.png')     " >Room Amenities</button>

    </div>
    <div class="box effect3 effect1 w3-hover-them" style="width:800px; float: left; padding-bottom: 20px;height: 300px; margin: 0px; margin-left: 20px">

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

</div>

               <?php

            }
        }
        ?>
      <div class="w3-container" style="width: 900px">
          <div class="w3-margin-top" style="width:100%;position: relative;background-color: ; min-height:600px;">

              <div class="w3-left" style="width: 400px;height: auto">
                  <div class="w3-left  box effect6" style="margin-left: 50px; width: 400px;padding: 10px;border-radius:8px; height: auto ">
                      The room was very beutiful and bayviewA place to trust a right location for relaxing and bay view _
                      A place which made me feels like my second home. tasty foods, standards reservation and so much more
                      I just can't describe in fews sentence. Friendly receptions
                  </div>

              </div>

              <div class="box effect7 w3-right w3-padding" style="width: 310px; margin-right:70px; height: 300px">
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
          </div>
<br/>
    <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <center>
            <div class="w3-modal-content w3-animate-zoom w3-center " >
                <img id="img01" style="width:1100px; ">
            </div>
        </center>
    </div>
    <hr/>
<div class="box effect6" style="width: 100%;height: 200px; position: relative">

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

    function fnbooking()
    {
        var url="https://reservation.travelanium.net/propertyibe2/rates?propertyId=430";
        //dateIn__='2017-11-08';
        var dateIn__=document.getElementById("date_of_arrival").value;
        var dateOut__=document.getElementById("date_of_departure").value;
        var adults=document.getElementById("adult").value;
        var childs=document.getElementById("child").value;
        var rooms=document.getElementById("room").value;
        window.open(url+'&onlineId='+4+'&checkin='+dateIn__+'&checkout='+dateOut__+'&numofroom='+rooms+'&numofadult='+adults+'&numofchild='+childs,"");
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

<link rel="stylesheet" type="text/css" href="https://www.sokhahotels.com/sihanoukville/css/menu.css" />
</body>
</html>