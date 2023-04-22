<?php
include('config.php');
$bid = $_GET['bid'];

$sql1 = "select * from branding where id=$bid";
$rs = mysqli_query($conn,$sql1);
//echo mysqli_error($conn);
//echo mysqli_num_rows($rs);
$rw = mysqli_fetch_row($rs);
$data["ptype"] = $rw[3];

$data['width'] =$rw[10];
$data['height'] =$rw[11];
$data['gauge'] =$rw[12];
$data['foldingvalue'] =$rw[16];


$sql2 = "select * from quality where id=".$rw[8];
$rsq = mysqli_query($conn,$sql2);
$rwq = mysqli_fetch_row($rsq);
$data['qname'] = $rwq[1];

$sql3 ="select * from sub_quality where id=".$rw[9];
$rssq = mysqli_query($conn, $sql3);
$rwsq =mysqli_fetch_row($rssq);
$data['sqname'] = $rwsq[1];

$sql4 ="select * from folding_type where id=".$rw[15];
$rsft = mysqli_query($conn, $sql4);
$rwft =mysqli_fetch_row($rsft);
$data['ftname'] = $rwsq[1];

$sql5 ="select * from cutting where id=".$rw[17];
$rsc = mysqli_query($conn, $sql5);
$rwc =mysqli_fetch_row($rsc);
$data['cutting'] = $rwc[1];

$sql6 ="select * from punching where id=".$rw[18];
$rsp = mysqli_query($conn, $sql6);
$rwp =mysqli_fetch_row($rsp);
$data['punching'] = $rwp[1];

$sql7 ="select * from treatment where id=".$rw[19];
$rst = mysqli_query($conn, $sql7);
$rwt =mysqli_fetch_row($rst);
$data['treatment'] = $rwt[1];

$sql8 ="select * from package where id=".$rw[20];
$rspk = mysqli_query($conn, $sql8);
$rwpk =mysqli_fetch_row($rspk);
$data['package'] = $rwpk[1];

$sql9 ="select * from delivery where id=".$rw[21];
$rstt = mysqli_query($conn, $sql9);
$rwtt =mysqli_fetch_row($rstt);
$data['delivery'] = $rwtt[1];




if($data['ptype']=="Printing")
{
    $data['bname'] =$rw[4];
    $data['img'] = $rw[5];
    $data['color'] = $rw[6];
    $data['printingtype'] =$rw[14];
    $sql10 ="select * from rubber where id=".$rw[7];
    /* echo $sql10;  */
    $rsrbr = mysqli_query($conn, $sql10);
    $rwrbr =mysqli_fetch_row($rsrbr);
    $data['rubber'] = $rwrbr[1]; 
    
}
else
{

    $data['bname'] ="";
    $data['img'] = "";
    $data['color'] = "";
    $data['printingtype'] = "";
    $data['rubber'] = ""; 

}

echo json_encode($data);
?>
