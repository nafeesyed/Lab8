<!DOCTYPE html>
<html>
<head>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//Validation
	if (strpos($_FILES['filename']['name'], 'jpg') !== false) {
		//Move uploaded file
		$location ="files/";
		$location.=basename($_FILES['filename']['name']);
		echo $location."<br />";
		$tmp =$_FILES['filename']['tmp_name'];
		echo "$tmp";
		move_uploaded_file($_FILES['filename']['tmp_name'], $location);
	}
}
?>
</head>
<body>
<div>
<form action="index.php" method="post" enctype="multipart/form-data">
Pick a file:<input type="file" name="filename" /><br />
<input type="submit" value="Submit" /></form>
</div>
</body>
</html>
