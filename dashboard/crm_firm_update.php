<?php
include('config.php');
include('header.php');
?>

<?php  

    error_reporting(0);

    $id=$_GET['id'];
    $sql="select * from firm where id='$id'";
    $rs=mysqli_query($conn,$sql);
    $rw=mysqli_fetch_array($rs);

if (isset($_POST['btn']))
{
    $firm_name=$_POST['firm_name'];
    $address=$_POST['address'];
 
    if (empty($firm_name) || empty($address))
    {
        die('Please fill all required fields!');
        echo "<script>window.location='crm_firm_update.php';</script>";
    }
    else
    {
        $sql="update firm set firm_name='$firm_name', address='$address' where id=$id";
        $run=mysqli_query($conn, $sql);
        if($run)
        {
            echo "<script>window.location='crm_firm_table.php';</script>";
        } else {
            echo "error" . $conn;
        }
    }
}

?>
<div class="col-6 grid-margin mx-auto ">
    <div class="card">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Firm Details</h3>
        </div>
        <div class="card-body">

            <form class="form-sample" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Firm Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="firm_name" value="<?php echo $rw['firm_name'];?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="address" id="form-floating-4" style="height: 100px"><?php echo $rw['address'];?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mr-2" name="btn">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>


<?php
include('footer.php');
?>