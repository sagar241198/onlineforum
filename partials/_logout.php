<?php
session_start();
// echo 'you are logged out successfully';
session_destroy();
header("location:/onlineforum/index.php")

?>