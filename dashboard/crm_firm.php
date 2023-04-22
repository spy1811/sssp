<?php
include('config.php');
include('header.php');
?>
<?php
error_reporting(0);

$cid = $_SESSION['customer_id'];

?>
<div class="col-6 grid-margin mx-auto">
    <div class="card">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Firm Details</h3>
        </div>
        <div class="card-body">

            <form class="form-sample" method="post" onSubmit="return myFun()">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-weight-bold">Customer Name</label>
                            <div class="col-sm-9">
                                <?php

                                if (!isset($_SESSION['customer_id'])) {

                                    $query = "select * from customer";
                                    $res = mysqli_query($conn, $query);

                                ?>
                                    <select name="customer_name" id="name" class="form-control">
                                        <option>Select Customer</option>
                                        <?php

                                        while ($rw = mysqli_fetch_row($res)) {

                                            echo "<option value='$rw[0]'>$rw[1]</option>";
                                        }

                                        ?>
                                    </select>
                                <?php
                                } else {
                                    $id = $_SESSION['customer_id'];
                                    $sql = "select id,name from customer where id=$id";
                                    $res = mysqli_query($conn, $sql);
                                    $rt = mysqli_fetch_row($res);
                                    $n = $rt[1];
                                    $idd = $rt[0];
                                ?>
                                    <input type="text" value="<?php echo  $n; ?>" class="form-control" id="name" readonly>
                                    <input type="hidden" value="<?php echo $idd; ?>" name="customer_name" >
                                <?php }
                                ?>
                                <span style="color:red" id="name_error"> </span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-weight-bold">Firm Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="firm_name" id="firm" placeholder="Enter Firm Name">
                                <span style="color:red" id="firm_error"> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-weight-bold">Address</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" placeholder="Enter Your address here..." name="address" id="address" style="height: 100px"></textarea>
                                <span style="color:red" id="address_error"> </span>
                            </div>
                        </div>
                    </div>
                </div>
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
        var firm = document.getElementById('firm').value;
        var address = document.getElementById('address').value;



        
        /* var regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;
        var regContact = /^\d{10}$/; */

        if (name == "") {
            document.getElementById('name_error').innerHTML = "*Please enter name properly.";
            return false;
        } else if (firm == "") {
            document.getElementById("name_error").innerHTML = "";
            document.getElementById('firm_error').innerHTML = "*Enter firm properly";
            return false;
        } else if (address == "") {
            document.getElementById("firm_error").innerHTML = "";
            document.getElementById("address_error").innerHTML = "*Enter address properly";
            return false;
        }

        return true;
    }
</script>

<?php

if (isset($_POST['btn'])) 
{
    $firm_name = $_POST['firm_name'];
    $address = $_POST['address'];
    $customer_name = $_POST['customer_name'];
    $_SESSION['customer_id'] = $customer_name;


    if ($customer_name == "") {
        $sql = "insert into firm (firm_name, address, cid) values ('$firm_name','$address', '$cid')";
        $run = mysqli_query($conn, $sql);
        if ($run) {

            $sql2 = "select max(id) from firm";
            $frm = mysqli_query($conn, $sql2);
            $frmid = mysqli_fetch_row($frm);
            $_SESSION['firm_id'] = $frmid[0];

            echo "<script>window.location='crm_brand_plain.php';</script>";
        } else {
            echo "error" . $conn;
        }
    } else {
        $sql1 = "insert into firm (firm_name, address, cid) values ('$firm_name','$address', '$customer_name')";
        $run = mysqli_query($conn, $sql1);
        if ($run) {

            $sql2 = "select max(id) from firm";
            $frm = mysqli_query($conn, $sql2);
            $frmid = mysqli_fetch_row($frm);
            $_SESSION['firm_id'] = $frmid[0];

            echo "<script>window.location='crm_brand_plain.php';</script>";
        } else {
            echo "error" . $conn;
        }
    }
}

?>


<?php
include('footer.php');
?>