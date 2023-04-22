<?php
include('config.php');
include('header.php');
?>
<?php
error_reporting(0);

$nameErr = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    $username = $_POST['username'];

    $email = $_POST['email'];

    $password = $_POST['password'];


    $sql = "insert into login (name,email,username,user_type,password) values('$name','$email','$username','sales','$password')";
    if (mysqli_query($conn, $sql)) {
        header("location:add_sales.php");
    } else {
        echo "error" . $conn;
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['idval'];
    $sql2 = "delete from login where id=$id";
    if (mysqli_query($conn, $sql2)) {
        header("location:add_sales.php");
    }
}


?>


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"></h1>
</div>


<div class="row">
    <!-- DataTales Example -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Sales Manager</h6>
            </div>
            <div class="card-body">
                <form class="forms-sample" method="post" action="" onSubmit="return myFun()">

                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <?php
                            if (!isset($namep)) {
                            ?>
                                <input type="hidden" name="upid" value="">
                                <input type="text" name="name" id="name" class="form-control">
                                <span style="color:red" id="name_error"> </span>
                            <?php
                            } else {
                            ?>
                                <input type="hidden" name="upid" value="<?php echo $upid ?>">
                                <input type="text" name="name" class="form-control" id="name" value="<?php echo $namep; ?>">
                                <span style="color:red" id="name_error"> </span>

                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Username</label>
                        <div class="col-sm-8">
                            <?php
                            if (!isset($username)) {
                            ?>
                                <input type="hidden" name="userp" value="">
                                <input type="text" name="username" id="username" class="form-control">
                                <span style="color:red" id="username_error"> </span>
                            <?php
                            } else {
                            ?>
                                <input type="hidden" name="userp" value="<?php echo $upid ?>">
                                <input type="text" name="username" id="username" class="form-control" value="<?php echo $userp; ?>">
                                <span style="color:red" id="username_error"> </span>

                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <?php
                            if (!isset($email)) {
                            ?>
                                <input type="hidden" name="emailp" value="">
                                <input type="text" name="email" id="email" class="form-control">
                                <span style="color:red" id="email_error"> </span>
                            <?php
                            } else {
                            ?>
                                <input type="hidden" name="emailp" value="<?php echo $upid ?>">
                                <input type="text" name="email" class="form-control" id="email" value="<?php echo $emailp; ?>">
                                <span style="color:red" id="email_error"></span>

                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <?php
                            if (!isset($password)) {
                            ?>
                                <input type="hidden" name="passp" value="">
                                <input type="text" name="password"  id="password" class="form-control">
                                <span style="color:red" id="password_error"></span>
                            <?php
                            } else {
                            ?>
                                <input type="hidden" name="passp" value="<?php echo $upid ?>">
                                <input type="text" name="password"  id="password" class="form-control" value="<?php echo $passwordp; ?>">
                                <span style="color:red" id="password_error"></span>

                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sales Manager </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center">
                        <thead>
                            <tr>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Delete</th>
                                <th>Update</th>
                            </tr>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Delete</th>
                                <th>Update</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $sql1 = "select * from login where user_type='sales'";
                            $rk = mysqli_query($conn, $sql1);
                            $cnt = 1;
                            while ($rw = mysqli_fetch_row($rk)) {
                            ?>
                                <tr>
                                    <td>
                                        <?php echo $cnt; ?>
                                    </td>
                                    <td>
                                        <?php echo $rw[1]; ?>
                                    </td>
                                    <td>
                                        <?php echo $rw[2]; ?>
                                    </td>
                                    <td>
                                        <?php echo $rw[3]; ?>
                                    </td>
                                    <td>
                                        <?php echo $rw[5]; ?>
                                    </td>

                                    <td>
                                        <form method="post">
                                            <input type="hidden" value="<?php echo $rw[0]; ?>" name="idval">
                                            <input type="submit" name="delete" value="Delete" class="btn btn-danger mr-2">
                                        </form>
                                    </td>
                                    <td>
                                        <a href="sale_update.php?id=<?php echo $rw[0] ?>" class="btn btn-warning mr-2">Update</a>

                                    </td>
                                </tr>
                            <?php
                                $cnt++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

<script>
    function myFun() {

        var name = document.getElementById('name').value;
        var username = document.getElementById('username').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        
        var regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;

        /* var regContact = /^\d{10}$/; */

        if (name == "") {
            document.getElementById('name_error').innerHTML = "*Please enter name properly.";
            return false;
        } else if (username == "") {
            document.getElementById("name_error").innerHTML = "";
            document.getElementById('username_error').innerHTML = "*Please enter Username properly.";
            return false;
        } else if (email == "" || !regEmail.test(email) ) {
            document.getElementById("username_error").innerHTML = "";
            document.getElementById("email_error").innerHTML = "*Enter Email properly";
            return false;
        }else if (password == "") {
            document.getElementById("email_error").innerHTML = "";
            document.getElementById("password_error").innerHTML = "*Enter address properly";
            return false;
        }

        return true;
    }
</script>



<?php
include('footer.php');
?>