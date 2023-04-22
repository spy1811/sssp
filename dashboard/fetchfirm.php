<?php
include('config.php');
$nameid = $_POST['datapost'];
$sql1 = "select * from firm where cid='$nameid' ";
$rk = mysqli_query($conn, $sql1);
$output = "";
echo "<option value=''>Select Firm</option>";
while ($rw = mysqli_fetch_array($rk)) {

   $output.= "<option value=".$rw['id'].">".$rw['firm_name']."</option>";

}
echo $output;
?>
