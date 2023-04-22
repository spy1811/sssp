<?php
include('config.php');
include('header.php');
/* error_reporting(0); */
?>

<div class="col-8 grid-margin mx-auto ">
    <div class="card">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Customer Details</h3>
        </div>
        <div class="card-body">

            <input type="hidden" class="form-control" name="id">
            <form class="form-sample" method="post" onSubmit="return myFun()">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label  font-weight-bold" >Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter customer name...">
                                <span id="name_error" style="color:red"> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-weight-bold">Main Contact</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="mcontact" id="mcontact" maxlength="10" placeholder="Enter Main contact number...">
                                <span id="main_contact_error" style="color:red"> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-weight-bold">Main Address</label>
                            <div class="col-sm-9">
                            <textarea class="form-control" placeholder="Enter main address here..." name="maddress" id="maddress" style="height:60px"></textarea>
                                <!-- <input type="text" class="form-control" name="maddress" id="maddress"> -->
                                <span id="main_address_error" style="color:red"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-weight-bold">Delivery Address</label>
                            <div class="col-sm-9">
                            <textarea class="form-control" placeholder="Enter delivery address here..." name="daddress" id="daddress" style="height: 60px"></textarea>
                                
                                <span id="delivery_address_error" style="color:red"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-weight-bold">Delivery Contact</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="dcontact" id="dcontact" maxlength="10" placeholder="Enter delivery contact...">
                                <span id="delivery_contact_error" style="color:red"> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                

                <div class="text-center">
                    <button type="submit" class="btn btn-primary mr-2" name="btn">Next</button>
                    <button class="btn btn-dark">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>


<script>
    function myFun() {

        var name = document.getElementById('name').value;
        var mainContact = document.getElementById('mcontact').value;
        var mainAddress = document.getElementById('maddress').value;
        var deliveryContact = document.getElementById('dcontact').value;
        var deliveryAddress = document.getElementById('daddress').value;


        var regName = /\d+$/g;
        var regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;
        var regContact = /^\d{10}$/;

        if (name == "" || regName.test(name)) {
            document.getElementById('name_error').innerHTML = "*Please enter name properly.";
            return false;
        } else if (mainContact == "" || !regContact.test(mainContact)) {
            document.getElementById("name_error").innerHTML = "";
            document.getElementById('main_contact_error').innerHTML = "*Enter contact number properly";
            return false;
        } else if (mainAddress == "" ) {
            document.getElementById("main_contact_error").innerHTML = "";
            document.getElementById("main_address_error").innerHTML = "*Enter address properly";
            return false;
        }
        else if (deliveryContact == "" || !regContact.test(deliveryContact)) {
            document.getElementById("main_address_error").innerHTML = "";
            document.getElementById('delivery_contact_error').innerHTML = "*Enter contact number properly";
            return false;
        } else if (deliveryAddress == "" ) {
            document.getElementById("delivery_contact_error").innerHTML = "";
            document.getElementById("delivery_address_error").innerHTML = "*Enter address properly";
            return false;
        }
        return true;
    }
</script>

<?php

if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $mcontact = ($_POST["mcontact"]);
    $maddress = $_POST['maddress'];
    $dcontact = ($_POST["dcontact"]);
    $daddress = $_POST['daddress'];


    $sql = "insert into customer (name, mcontact, maddress, dcontact, daddress) values ('$name', '$mcontact', '$maddress','$dcontact', '$daddress')";
    $run = mysqli_query($conn, $sql);
    $sql1 = "select max(id) from customer";
    $run1 = mysqli_query($conn, $sql1);
    $res = mysqli_fetch_row($run1);
    $id = $res[0];


    $_SESSION['customer_id'] = $id;

    if ($run) {
        echo "<script>window.location='crm_firm.php';</script>";
    } else {
        echo "error" . $conn;
    }
}

?>


<?php
include('footer.php');
?>