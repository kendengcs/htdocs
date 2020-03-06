<!--
/*
1.	Create a form with name, email, phone#, comments, upload file option to accept user photo (field label: Please upload your photo).
1.	validate photo size 1mb,
2.	file type should be only png or jpg (pl refer the code file),
3.	Try to upload the file in “test” directory (please do not create the directory), take the screenshot of the error message
4.	use try catch to show the custom message like “Please create a test directory to upload the file”

*/-->

<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
	<?php
	// define variables and set to empty values
	$name = $email = $phone = $comment = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST"){
		 $name = test_input($_POST["name"]);
	   $email = test_input($_POST["email"]);
		 $phone = test_input($_POST["phone"]);
	   $comment = test_input($_POST["comment"]);

		}

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

	/*	function checkPhotoDirectory(){
	 		$path = __DIR__.'/test';
			if(is_dir($path===False)){

			}
	  }
			try {
				checkPhotoDirectory();//检查路径是否存在
				ehco 'If you see this, means no directory.';
			}

			catch(Exception $e){
				ehco "Please create a test directory to upload the file.".$e->getMessage();
			}
	*/
		$allowedExts = array("jpeg", "jpg", "png");
		$temp = explode(".", $_FILES["file"]["name"]);
		echo $_FILES["file"]["size"];
		$extension = end($temp);

		if ((($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/jpg")
		|| ($_FILES["file"]["type"] == "image/pjpeg")
		|| ($_FILES["file"]["type"] == "image/x-png")
		|| ($_FILES["file"]["type"] == "image/png"))
	&& ($_FILES["file"]["size"] < 1000000)
	&& in_array($extension, $allowedExts))
	  {
	  if ($_FILES["file"]["error"] > 0)
	    {
	    echo "Error: " . $_FILES["file"]["error"] . "<br>";
	    }
	  else
	    {
	    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
	    echo "Type: " . $_FILES["file"]["type"] . "<br>";
	    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>";
	    echo "Stored in: " . $_FILES["file"]["tmp_name"];

			if (file_exists("test/" . $_FILES["file"]["name"]))
			 {
			 echo $_FILES["file"]["name"] . " already exists. ";
			 }
		 else
			 {
			 move_uploaded_file($_FILES["file"]["tmp_name"], "test/" . $_FILES["file"]["name"]);
			 echo "Stored in: " . "test/" . $_FILES["file"]["name"];
			 }
	    }
	  }
	else
	  {
	  echo "Invalid file";
	  }
	?>

	<h2>PHP Day4 Question One</h2>
	<form
	action="<upload.php>" method = "post" enctype="multipart/form-data">
		<p>Your name: <input type= "text" name="name"></p>
		<br><br>
		<p>Your Email:<input type= "text" name="email"></p>
		<br><br>
		<p>Your Phone:<input type= "text" name="phone"></p>
		<br><br>
		Your Comments:<br><textarea name="comment" rows=""="5" cols="30"></textarea>

	Please upload your Photo:
			<input type = "file" name="file" id="file"><br>
		  <input type="submit" value="submit" name="submit">
	</form>
</body>
</html>
