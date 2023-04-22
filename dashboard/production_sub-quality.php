<?php
include('config.php');
include('header.php');
?>
<?php
error_reporting(0);

$nameErr = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $quality=$_POST['quality'];
    $upid = $_POST['upid'];
    if ($upid != "") {
        if (!empty($name)) {
            $sql = "update sub_quality set name='$name', qid='$quality' where id=$upid";
            if (mysqli_query($conn, $sql)) {
                header("location:demo.php");
            } else {
                echo "error" . $conn;
            }
        } else {
            $nameErr = " * Sub Quality Name is Required ";
        }
    } else {
        if (!empty($name)) {
            $sql = "insert into sub_quality (name, qid) values('$name', '$quality')";
            if (mysqli_query($conn, $sql)) {
                header("location:production_sub-quality.php");
            } else {
                echo "error" . $conn;
            }
        } else {
            $nameErr = " * Sub Quality Name is Required ";
        }
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['idval'];
    $sql2 = "delete from sub_quality where id=$id";
    if (mysqli_query($conn, $sql2)) {
        header("location:production_sub-quality.php");
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['idvalu'];
    $sql2 = "select * from sub_quality where id=$id";
    $rpo = mysqli_query($conn, $sql2);
    $rt = mysqli_fetch_row($rpo);
    $namep = $rt[1];
    $upid = $rt[0];
}
?>


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Production</h1>
</div>


<div class="row">
    <!-- DataTales Example -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Insert Sub Quality</h6>
            </div>
            <div class="card-body">
                <form class="forms-sample" method="post" action="">

                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Quality</label>
                        <div class="col-sm-8">
                        <select class="form-control" name="quality" id="quality">
                                <option value="">Select Quality</option>
                                <?php
                                    $sql1 = "select * from quality";
                                    $rk = mysqli_query($conn, $sql1);
                                    while($rw = mysqli_fetch_array($rk))
                                    {
                                    ?>
                                    <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <span style="color:red" id="quality_name_error"> </span>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Sub Quality</label>
                        <div class="col-sm-8">
                            <?php
                            if (!isset($namep)) {
                            ?>
                                <input type="hidden" name="upid" value="">
                                <input type="text" name="name" class="form-control">
                                <span style="color:red"> <?php echo $nameErr; ?> </span>
                            <?php
                            } else {
                            ?>
                                <input type="hidden" name="upid" value="<?php echo $upid ?>">
                                <input type="text" name="name" class="form-control" value="<?php echo $namep; ?>">
                                <span style="color:red"> <?php echo $nameErr; ?> </span>

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
                <h6 class="m-0 font-weight-bold text-primary">Production Sub Quality </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Quality</th>
                                <th>Sub Quality</th>
                                <th>Delete</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Quality</th>
                                <th>Sub Quality</th>
                                <th>Delete</th>
                                <th>Update</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $sql1 = "SELECT sub_quality.id, quality.name , sub_quality.name FROM quality INNER JOIN sub_quality ON quality.id = sub_quality.qid";
                            $rk = mysqli_query($conn, $sql1);
                            $cnt=1;
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
                                        <form method="post">
                                            <input type="hidden" value="<?php echo $rw[0]; ?>" name="idval">
                                            <input type="submit" name="delete" value="Delete" class="btn btn-danger mr-2">
                                        </form>
                                    </td>
                                    <td>
                                        <form method="post">
                                            <input type="hidden" value="<?php echo $rw[0]; ?>" name="idvalu">
                                            <input type="submit" name="update" value="Update" class="btn btn-warning mr-2">
                                        </form>
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
<?php
include('footer.php');
?>