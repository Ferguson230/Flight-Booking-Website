<?php
session_start();
session_destroy();
header("Location: http://lyndoncis.com/CIS3120SP16/tdl01030/Project/index.php");
exit();
?>