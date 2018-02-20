<?php 
$db = mysqli_connect("localhost","root","usbw","arman_db");

$sql = "SELECT * FROM `store`";
$result = mysqli_query($db, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Store</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="img-jpg" href="image/logo2.png">
	<meta charset="utf-8">
    <meta name="author" content="Arman Margaryan">
    <meta name="keywords" content="web,anime,tumo,html,css">
    <meta name="description" content="web page about html,css,anime and more">
</head>

<body>
	<div class="mainsite">
		
		<?php include("menu.php"); ?>

		<div class="container">
			<h1>Store : </h1>

			<br><br><br><br><br>

			<?php 
			
			while ( $r = mysqli_fetch_assoc($result) ) {
				?>
				<div class="item">
					<div class="title"><a href="item.php?id=<?php echo $r["id"]; ?>">
						<?php echo $r["title"]; ?>
					</a>
					</div>
					<p>
						<img src="<?php echo $r["img_src"]; ?>" width = "150px">
						<?php echo $r["excerpt"]; ?>
					</p>
					<p><?php echo "Price : " .  $r["price"] . "$"; ?></p>
				</div>
				<?php 	
			}
			
			?>
		</div>

		<?php include("footer.php"); ?>
	</div>
</body>
</html>