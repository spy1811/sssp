<?PHP
include('config.php');
$id=$_GET['id'];
$sql="delete from branding where id=$id";
if(mysqli_query($conn, $sql))
{
    echo "<script>alert('Customer's Branding Information Deleted...!');</script>";
    header("location:crm_brand_table.php");
}
else
{
    echo "not connect";
}

?>