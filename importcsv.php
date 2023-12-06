<?php
include "connection.php";
if(isset($_POST['submit']))
{
  $file_name=$_FILES['fileToUpload']['name'];
  
  $temp_name=$_FILES['fileToUpload']['tmp_name'];

  move_uploaded_file($temp_name,"csv/".$file_name);

  $file_read=fopen("csv/".$file_name,'r');

  while($file_get =fgetcsv($file_read))
  {
    $sql="INSERT INTO `crud` (`name`,`pincode`,`email`, `mobile_no`) VALUES ('$file_get[0]','$file_get[1]','$file_get[2]','$file_get[3]')";
 
    $result = $conn->query($sql);
 
    if ($result == TRUE) {
      echo "New record created successfully.";
      header('Location:read.php');
 
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
 
    } 
  }
    $conn->close(); 
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
  Select CSV file to upload:<br>
  <input type="file" name="fileToUpload" id="fileToUpload"><br>
  <input type="submit" value="Upload csv" name="submit">
</form>

</body>
</html>