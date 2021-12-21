<?php
$db=mysqli_connect("localhost", "abcde", "12345678", "dramakost");
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>
