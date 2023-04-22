<?php
include('config.php');
include('header.php');
?>

<?php  
    error_reporting(0);
    $id=$_GET['id'];
    $sql="select * from customer where id='$id'";
    $rs=mysqli_query($conn,$sql);
    $rw=mysqli_fetch_array($rs);
?>

<?php

/* error_reporting(0); */
include('config.php');
    
$nameErr = $contactErr = $emailErr = " ";

if (isset($_POST['btn']))
{
    $name=$_POST['name'];
    $contact = ($_POST["contact"]);
    $email=$_POST['email'];
    

    if (empty($name) || empty($contact) || empty($email) )
    {
        die('Please fill all required fields!');
    }
    else
    {
        if(!preg_match("/^[a-zA-Z-' ]*$/",$name))
        {
            $nameErr=" ** Only letters and White space allowed";
        }
        else if(!preg_match("/^[0-9]{10}+$/",$contact))
        {
            $contactErr=" ** Invalid Contact Number";
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $emailErr = " ** Invalid email format";
        }
        else
        {
            $sql="update customer set name = '$name' , contact = '$contact', email ='$email' where id=$id";
            $run=mysqli_query($conn, $sql);
            if($run)
            {
                echo "<script>window.location='crm_customer_table.php';</script>";
            } else {
                echo "error" . $conn;
            }
        }
    }
}
?>


<div class="col-10 grid-margin mx-auto ">
    <div class="card">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Customer Details</h3>
        </div>
        <div class="card-body">
         

            <form class="form-sample" method="post">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="<?php echo $rw['name'];?>"> 
                                <span style="color:red"> <?php echo $nameErr; ?> </span>
                            </div>
                        </div>
                    </div> 
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Contact No</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="contact" value="<?php echo $rw['contact'];?>">
                                <span style="color:red"> <?php echo $contactErr; ?> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email ID</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email" value="<?php echo $rw['email'];?>">
                                <span style="color:red"> <?php echo $emailErr; ?> </span>
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
