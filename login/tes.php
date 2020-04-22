<?php
session_start();

if(isset($_SESSION['id']))
{
    echo "Berhasil login";
}
else {
    echo "Gagal";
}
?>
