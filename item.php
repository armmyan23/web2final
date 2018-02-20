<?php 
$db = mysqli_connect("localhost","root","usbw","arman_db");
mysqli_set_charset($db, "utf8");

$id = $_GET["id"];

$sql = "SELECT * FROM `store` WHERE `id` = $id";
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
	<div class="main">
		
		<?php include("menu.php"); ?>

		<div class="container1">

			<?php 	
			while ( $r = mysqli_fetch_assoc($result) ) {
				?>
				<div class="product_content">
					<div>
						<h1 style="
						font-size: 35px; color: #565"><?=$r['title'] ?></h1>
						<div class="frame">
							<img style="float: bottom;margin-right: 50px;" id="myImg" src="<?=$r['img_src'] ?> " alt="<?=$r['title'] ?>" width="100%" height="100%">
						<div id="myModal" class="modal">
						  <span  class="close">&times;</span>
						  <img class="modal-content" id="img01">
						  <div id="caption"></div>
						</div>
							<p style="font-size: 20px;color: #565"><?=$r['content'] ?></p>
						</div>
						<strong><p style="
						font-size: 25px;color: #565;">Price : <?='$'.$r['price'] ?></p></strong>	
					</div>
					
						
				</div>
				<?php 	
			}
			
			?>
		</div>

		<?php 
		include("zoom.php");
		include("footer.php"); ?>
	</div>
</body>
</html>