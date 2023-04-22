<?PHP
include('config.php');
$id=$_GET['id'];
$sql="delete from customer_order where id=$id";
if(mysqli_query($conn, $sql))
{
    echo "<script>alert('Customer's Order Information Deleted...!');</script>";
    header("location:index.php");
}
else
{
    echo "not connect";
}

?>