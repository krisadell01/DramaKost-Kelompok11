<?php  
?> 
 
<!DOCTYPE html> 
<html> 
<head> 
 	<title>Dramakost</title> 
</head> 
 
<body>  	<header> 
 	<h3>Daftar Kost/Kontrakan/Apartment</h3> 
 	</header> 
 
 	<nav> 
 	</nav> 
  	<br> 
	  <table border="1"> 
 	<thead> 
 	<tr> 
 	 	<th>Nama</th> 	
 	 	<th>Harga</th> 
		<th>Id</th>
		<th>Content</th>
 	 	<th>Tindakan</th> 
 	 	<th>Tindakan</th> 
 	</tr> 
 	</thead> 
 	<tbody> 
 
 	<?php 
	$db=mysqli_connect("localhost", "dzikri", "ananda68", "dramakost");
 	$query = "SELECT title,price,id,content FROM post";
	$hasil = mysqli_query($db, $query);  
  
 	while($kos = mysqli_fetch_array($hasil)){ 
 	 	echo "<tr>"; 
 
 	 	echo "<td>".$kos['title']."</td>";
  	 	
		echo "<td>".$kos['price']."</td>";
		echo "<td>".$kos['id']."</td>";
		echo "<td>".$kos['content']."</td>";  	 	
 
 	 	echo "<td>"; 
 	 	echo "<a href='formedit.php?id=".$kos['id']."'>Edit</a>"; 
 	 	echo "</td>"; 
 
 	 	echo "<td>"; 
 	 	echo "<a href='hapus.php?id=".$kos['id']."'>Hapus</a>";  	 	echo "</td>"; 
 
 	 	echo "</tr>"; 
 	 	}  	?> 
 
 	</tbody> 
 	</table> 
 	</body> 
</html> 