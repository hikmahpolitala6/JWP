<?php
$local="localhost";
$user="root";
$password="";
$db="pelatihan";
$koneksi=mysqli_connect($local,$user,$password,$db);
if (!$koneksi)
    {
        echo "koneksi gagal";
    }