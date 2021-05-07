<?php
session_start();
$_SESSION['login']=="";
session_unset();
$_SESSION['action1']="You have logged out successfully..!";
$_SESSION['notreg'] = "";
?>
<script language="javascript">
document.location="login.php";
</script>
