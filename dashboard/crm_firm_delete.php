<?PHP
include('config.php');
$id=$_GET['id'];
$sql="delete from firm where id=$id";
if(mysqli_query($conn, $sql))
{
    echo "<script>alert('Firm Information Deleted...!');</script>";
    header("location:crm_firm_table.php");
}
else
{
    echo "not connect";
}

?>