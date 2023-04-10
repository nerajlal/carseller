<?php
  if(isset($_POST['submit']))
  {
    $contact = $_POST['contact'];
    $target_dir = "carpic/";
    $imageFileType = strtolower(pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION));
    $new_file_name = $contact . "." . $imageFileType;
    $target_file = $target_dir . $new_file_name;

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "The file ". $new_file_name . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
  }
?>
<form action="" method="post" enctype="multipart/form-data">
  Contact Number: <input type="text" name="contact" required>
  Image: <input type="file" name="photo" required>
  <input type="submit" name="submit">
</form>
