<!--
/*
1.	Create a form with name, email, phone#, comments, upload file option to
accept user photo (field label: Please upload your photo).
1.	validate photo size 1mb,
2.	file type should be only png or jpg (pl refer the code file),
3.	Try to upload the file in “test” directory (please do not create the directory), take the screenshot of the error message
4.	use try catch to show the custom message like “Please create a test directory to upload the file”

*/-->
<?php
    $target_dir = "test/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 1000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" ) {
        echo "Sorry, only JPG & PNG files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    try{
      $error = 'Always throw this error';
      throw new  Exception($error);

      echo 'Never executed';
    }catch(exception $e){
      echo 'Please create a test directory to upload the file',
      $e ->getMessage(),"\n";
    }
?>
