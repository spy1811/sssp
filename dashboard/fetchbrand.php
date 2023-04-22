<?php
include('config.php');
$nameid = $_POST['datapost'];
$cust=$_POST['cust'];
$sql1 = "select * from branding where customer_name='$cust' && firm='$nameid'";
$rk = mysqli_query($conn, $sql1);
$output = "<option></option>";
while ($rw = mysqli_fetch_array($rk)) {

   $output.= "<option value=".$rw['id'].">".$rw['branding'].' ('. $rw['width'] . 'x'. $rw['height']. 'x'. $rw['gauge']. ')'. "</option>";

}
echo $output;
?>
