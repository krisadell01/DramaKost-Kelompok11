<?php
include("config.php");
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = mysqli_query($db,"SELECT * FROM post WHERE id ='$id'");
  $kos = mysqli_fetch_assoc($query);

} else {
  header('Location: daftarkost.php');
}
?>

  <form action="prosesedit.php?id=<?= $id; ?>"
 method="POST">   
    <table>
      <tr>
        <td>Nama</td>
        <td>
          <input type="text" name="title" value="<?php echo $kos['title']?>">
        </td>         
      </tr> 
      <tr>
        <td>Harga</td>
        <td><input type="text" name="price" value="<?php echo $kos['price']?>">
        </td>         
      </tr> 
      <tr>
        <td>Content</td>
        <td><input type="text" name="content" value="<?php echo $kos['content']?>">
        </td>         
      </tr>
      <tr>
        <td>SEO Title</td>
        <td><input type="text" name="SEO_title" value="<?php echo $kos['SEO_title']?>">
        </td>         
      </tr>
      <tr>
        <td>Simpan</td>
        <td><input type="submit" value="Simpan" name="Edit"></td>
      </tr>       
    </table>
  </form>
</body>
</html>
