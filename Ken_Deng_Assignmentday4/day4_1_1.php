<h2>PHP Day4 Question One</h2>
<form
action="<day4_1_2.php>" method = "post" enctype="multipart/form-data">
  <p>Your name: <input type= "text" name="name"></p>

  <p>Your Email:<input type= "text" name="email"></p>

  <p>Your Phone:<input type= "text" name="phone"></p>

  Your Comments:<br><textarea name="comment" rows="10" cols="40"></textarea>
  <br><br>
  <p>Please upload your Photo:</p>
    <input type = "file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" value="Upload Image" name="submit">
</form>
