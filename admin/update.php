<?php  
$id = $_GET['id'];
$db = mysqli_connect("localhost", "root", "usbw", "arman_db");
$sql = "SELECT * FROM news WHERE id = $id";
$result = mysqli_query($db, $sql);
$r = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Administration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main">
		<div class="header">
			ADMINISTRATION
		</div>		
		<div class="container">	
			<h1>Update product <?php echo $_GET['id']; ?></h1>		

			<form action="action.php" method="post" enctype="multipart/form-data">
				<label for="title">Title</label><br>
				<input type="text" name="title" id="title" value="<?php echo $r['title']; ?>"> <br><br>

				<label for="excerpt">Excerpt</label><br>
				<textarea name="excerpt" id="excerpt" rows="6" cols="46" > <?php echo $r['excerpt']; ?></textarea><br><br>

				<label for="content">Content</label><br>
				<textarea name="content" id="content" rows="10" cols="46"><?php echo $r['content']; ?></textarea><br><br>				

				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

				<input type="file" name="image"><br><br>

				<input type="submit" name="update">
			</form>			
		</div>
	</div>
</body>
</html>