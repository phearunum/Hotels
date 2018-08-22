<?php

class booking
{
    public function customer_book($conn)
    {
        if (isset($_POST['btn_book'])) {
            $c_name = $_POST['c_name'];
            $c_id = $_POST['c_id'];
            $c_in = $_POST['c_in'];
            $c_out = $_POST['c_out'];
            $c_adult = $_POST['c_adult'];
            $c_child = $_POST['c_child'];
            $r_name = $_POST['r_name'];
            $r_type = $_POST['r_type'];
            if ($c_name == '') {
                echo "<script> window.alert('Some Field Is Empy Try Agian');</script>";
            } else {
                $q = "INSERT INTO customer (c_name,pass_code,c_in,c_out,adult,child,room,room_type) VALUES
                                          ('$c_name','$c_id','$c_in','$c_out','$c_adult','$c_child','$r_name','$r_type')";
                if ($conn->query($q) === TRUE) {
                    echo('<center>
                        <div class="alert alert-info w3-animate-top w3-center"  id="save" style="width: 250px;padding: 12px; margin-top: -100px;">
                            <strong>' . $c_name . '!</strong> Save Successful.</div>
                    </center>');

                } else {
                    echo "Error: " . $q . "<br>" . $conn->error;
                }

            }
        }

    }

// Update Customer Booking ------------------------------------------>
    public function booking_update($conn)
    {
        if (isset($_GET['edit'])) {
            $update = $_GET['edit'];
            $query = "SELECT * FROM customer WHERE id='$update' LIMIT 1";
            $get_info = $conn->query($query);
            if ($get_info->num_rows > 0) {
                while ($get_customer = $get_info->fetch_assoc()) {
                    $c_id = $get_customer['id'];
                    $c_name = $get_customer['c_name'];
                    $c_id = $get_customer['pass_code'];
                    $c_in = $get_customer['c_in'];
                    $c_out = $get_customer['c_out'];
                    $c_adult = $get_customer['adult'];
                    $c_child = $get_customer['child'];
                    $r_name = $get_customer['room'];
                    $r_type = $get_customer['room_type'];
                }
            } else {

            }
            ?>
            <form class="form-inline" style="margin-top: -5px;" method="post">
                <div class="form-group">
                    <p for="email">Customer Name :</p>
                    <input type="text" class="form-control input-sm" name="c_name" value="<?php echo $c_name; ?>">
                </div>
                <div class="form-group">
                    <p for="email">ID Number :</p>
                    <input type="text" class="form-control input-sm" name="c_id" value="<?php echo $c_id; ?>">
                </div>
                <div class="form-group">
                    <p for="pwd">Check In:</p>
                    <input type="date" class="form-control input-sm" name="c_in" value="<?php echo $c_in; ?>">
                </div>
                <div class="form-group">
                    <p for="pwd">Check Out:</p>
                    <input type="date" class="form-control input-sm" name="c_out" value="<?php echo $c_out; ?>">
                </div>
                <div class="form-group">
                    <p for="comment">Adult:</p>
                    <select name="c_adult" class=" form-control input-sm" style="width: 80px;">

                        <option value="<?php echo $c_adult; ?>"><?php echo $c_adult; ?></option>
                        <option value="1"> 1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>

                    </select>
                </div>
                <div class="form-group">
                    <p for="comment">Child:</p>
                    <select name="c_child" class=" form-control input-sm" style="width: 80px;">
                        <option value="<?php echo $c_child; ?>"><?php echo $c_child; ?></option>
                        <option value="4">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>

                    </select>
                </div>
                <div class="form-group">
                    <p for="comment">Room Name:</p>
                    <input type="text" class="form-control input-sm" style="width: 100px;" name="r_name"
                           value="<?php echo $r_name; ?>">
                </div>
                <div class="form-group">
                    <p for="comment">Room Type:</p>
                    <select name="r_type" class=" form-control input-sm" value="<?php echo $r_type; ?>">
                        <option value="<?php echo $r_type; ?>"><?php echo $r_type; ?></option>
                        <?php

                        $get_room = "SELECT * FROM room";
                        $check_room = $conn->query($get_room);
                        if ($check_room->num_rows > 0) {
                            while ($name_room = $check_room->fetch_assoc()) {
                                $id = $name_room['room_id'];
                                ?>
                                <option
                                    value="<?php echo $name_room['room_name']; ?>"><?php echo $name_room['room_name']; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm w3-right w3-pink " style="margin-top: 30px;"
                        name="btn_book_update"><span class="glyphicon glyphicon-floppy-saved"></span>Update
                </button>
            </form>
            <?php
        }
    }

    public function update_book($conn)
    {
        if (isset($_POST['btn_book_update'])) {
            $id = $_GET['edit'];
            $c_id = $_POST['id'];
            $c_name = $_POST['c_name'];
            $c_id = $_POST['c_id'];
            $c_in = $_POST['c_in'];
            $c_out = $_POST['c_out'];
            $c_adult = $_POST['c_adult'];
            $c_child = $_POST['c_child'];
            $r_name = $_POST['r_name'];
            $r_type = $_POST['r_type'];
            if ($c_name == '' or $c_id == '') {

            } else {
                $q = "UPDATE customer SET c_name='$c_name',pass_code='$c_id',c_in='$c_in',c_out='$c_out',adult='$c_adult', child='$c_child',room='$r_name',room_type='$r_type' WHERE id='$id'";
                if ($conn->query($q) === TRUE) {
                    echo('<center>
                        <div class="alert alert-info w3-animate-top w3-center"  id="save" style="width: 250px;padding: 12px; margin-top: -100px;">
                            <strong>' . $c_name . '!</strong> Update Successful.</div>
                    </center>');
                    echo("<script> window.open('reservation.php','_self')</script>   ");
                } else {
                    echo "Error: " . $q . "<br>" . $conn->error;
                }


            }

        }
    }
    function delete_booking($conn){
        if(isset($_GET['delete'])){
            $delete=$_GET['delete'];
            $sql="DELETE FROM customer WHERE customer.id = '$delete'";
            if ($conn->query($sql) === TRUE) {
                echo ('<center>
                        <div class="alert alert-info w3-animate-top w3-center"  id="save" style="width: 250px;padding: 12px; margin-top: -100px;">
                            <strong>'.$delete.'!</strong> Delete Successful.</div>
                    </center>');
               echo("<script> window.open('reservation.php','_self')</script>   ");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

}
?>
<script>
setTimeout(function() { $("#save").fadeOut(); }, 2500);


</script>
