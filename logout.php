<?php
setcookie("username", "", time() - 3600, "/");
header("Location: session_9.php");
exit();
?>