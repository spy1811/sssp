<?PHP
include('config.php');
$id=$_GET['id'];
$sql="delete from customer where id=$id";
if(mysqli_query($conn, $sql))
{
    echo "<script>alert('Customer's Information Deleted...!');</script>";
    header("location:crm_customer_table.php");
}
else
{
    echo "not connect";
}

?>