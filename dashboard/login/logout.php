
<?php
session_start();
session_unset();
echo '<script type="text/javascript">
alert("Successfully Logged Out");
window.location.href="loginform.php";
</script>';
?>