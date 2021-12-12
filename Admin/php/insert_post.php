<?php

session_start();
if(!isset($_SESSION['admin']))
{
  header("Location: http://localhost/DRAMAKOST/login.php");
}


$title = $_POST['title'];
$SEO = $_POST['SEO'];
$content = $_POST['content'];
$Category = $_POST['Category'];
$admin = $_POST['admin'];
$price = $_POST['price'];

$db=mysqli_connect("localhost", "Krisadell", "Kr1s4nd1_03", "dramakost");
$query = "INSERT INTO post (title, SEO_title, content, admin, price)
VALUES ('$title', '$SEO', '$content', '$admin', '$price')";

mysqli_query($db, $query);

$query = "SELECT id FROM post WHERE SEO_title ='$SEO'";
$result = mysqli_query($db, $query);

$row = mysqli_fetch_array($result);

echo "ID is " . $row[0];

$post_id = $row[0];
$category_array = explode(" ", $Category);

foreach($category_array as $em)
{
    $query = "INSERT INTO has_category (post, category) VALUES ($post_id, $em)";
    mysqli_query($db, $query);
}

header('Location: http://localhost/DRAMAKOST/admin/insert_post.php')

?>
