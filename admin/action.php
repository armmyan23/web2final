<?php  	

if( isset($_POST["add"]) ){
	
	$title = $_POST["title"];
	$content = $_POST["content"];
	$excerpt = $_POST["excerpt"];
	$price = $_POST["price"];
	$img_src = "";


	if( isset($_FILES["image"]) ){

		$img_src = "image/" . $_FILES["image"]["name"];
		$file_path = "../" . $img_src;

		move_uploaded_file($_FILES["image"]["tmp_name"], $file_path);
	}

	$db = mysqli_connect("localhost", "root", "usbw", "arman_db");
	$sql = "
		INSERT INTO `store`
			(title, excerpt ,content, img_src,price)
		VALUES
			('$title', '$excerpt', '$content', '$img_src','$price')
	";
	$r = mysqli_query($db, $sql);

	if($r){
		echo "May 9";
	}
	else{
		echo "Error";
	}
}


if( isset($_POST["update"]) ){
	$title = $_POST["title"];
	$content = $_POST["content"];
	$excerpt = $_POST["excerpt"];
	$id = $_POST["id"];
	$img_src = $_POST["img_src"];

	$db = mysqli_connect("localhost","root","usbw","arman_db");
	mysqli_set_charset($db, "utf8");

	$sql = "
			UPDATE `store`
				SET (`title` = '$title', `excerpt` = '$excerpt' ,`content` = '$content', `img_src` = '$img_src', `price` = '$price')
				WHERE `id` = $id
	";
	$res = mysqli_query($db, $sql);
	if ($res) {
		echo "May 9";
	}
	else{
		echo "ERROR";
	}
}


if( isset($_GET['action']) && $_GET['action'] == "delete"){
	$id = $_GET['id'];

	$db = mysqli_connect("localhost", "root", "usbw", "arman_db");
	$sql = "DELETE FROM store WHERE id = $id";
	
	$res = mysqli_query($db, $sql);

	if ($res) {
		echo "May 9";
	}
	else{
		echo "ERROR";
	}
}

?>