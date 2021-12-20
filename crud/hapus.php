<?php

session_start();

    $db=mysqli_connect("localhost", "Krisadell", "Kr1s4nd1_03", "dramakost");
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $pass = mysqli_real_escape_string($db, $_POST['password']);
    $pass = hash('sha512', $pass);
    $query = "SELECT id FROM admin WHERE Email = '$email' AND password = '$pass'";

    $result = mysqli_query($db, $query);

    if(mysqli_num_rows($result) == 1)
    {
        $_SESSION['admin'] = mysqli_fetch_array($result)[0];
        header("Location: http://localhost/DRAMAKOST/admin/insert_post.php");
    } else {
        header("Location: http://localhost/DRAMAKOST/login.php?error=1");
    }

?>

<?php


if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM post WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: listkkost.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
