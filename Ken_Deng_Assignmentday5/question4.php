<?php
  /*
  Name：Ken Deng
  Date: 03-09-2020
  */

  $name = $email = $education = $gender = $photo = "";
  $nameError = $emailError = $educationError =$genderError= $photoError="";

  if($_SERVER["REQUEST_METHOD" == "POST"]){
    if (empty($_POST["name"])){
      $nameError = "Name is required";
    }else{
      $name = test_input($_POST["name"]);
    }
  }

  if($_SERVER["REQUEST_METHOD" == "POST"]){
    if (empty($_POST["email"])){
      $emailError = "Email is required";
    }else{
      $email = test_input($_POST["email"]);
    }
  }

  if($_SERVER["REQUEST_METHOD" == "POST"]){
    if (empty($_POST["education"])){
      $educationError = "Education is required";
    }else{
      $education = test_input($_POST["education"]);
    }
  }

  if($_SERVER["REQUEST_METHOD" == "POST"]){
    if (empty($_POST["gender"])){
      $genderError = "Gender is required";
    }else{
      $gender = test_input($_POST["gender"]);
    }
  }

  if($_SERVER["REQUEST_METHOD" == "POST"]){
    if (empty($_POST["photo"])){
      $photoError = "Photo is required";
    }else{
      $photo = test_input($_POST["photo"]);
    }
  }
?>

<html>
<body>
<h1>New York University</h1>
<b>Student registration</b>
<p color = red>* required</p>
<form method = "post" action = "<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>"
Name: <input type="text", name = "name" value="<?php echo $name;?>"> *<br>
Email: <input type="text", name = "email" value="<?php echo $email;?>"> *<br>
Education: <input type="text", name = "education" value="<?php echo $education;?>"> *<br>
Gender:<input type="radio", name = "gender" value="<?php if(isset($gender)&&$gender =="male") echo "checked";?>"
value = "male">Male
<input type="radio", name = "gender" value="<?php if(isset($gender)&&$gender =="female") echo "checked";?>"
value = "female">Female
<input type="radio", name = "gender" value="<?php if(isset($gender)&&$gender =="other") echo "checked";?>"
value = "other">Other*<br>
upload your photo: <input type="submit" name="submit" value="photo">

</form>
</body>
</html>
