<?php
session_start();

session_destroy();
header("Location: http://localhost/tugasA/index.php");

?>
