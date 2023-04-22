<?php
include('config.php');
$nameid = $_POST['datapost'];
$sql1 = "select * from sub_quality where qid='$nameid' ";
$rk = mysqli_query($conn, $sql1);
$output = "";
while ($rw = mysqli_fetch_array($rk)) {

   $output.= "<option value=".$rw['id'].">".$rw['name']."</option>";

}
echo $output;
?>
