<?php
session_start();
session_destroy();
//header("location:loginsite.php");
echo"<meta http-equiv='refresh' content='0; url=login.php'>";
?>