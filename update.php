<?php
include "connection.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    $pin = $_POST['pincode'];

    $email = $_POST['email'];

    $mobile = $_POST['mob'];

    $user_id = $_POST['user_name'];

    $sql = "UPDATE `crud` SET `name`='$name',`pincode`='$pin',`email`='$email',`mobile_no`='$mobile' WHERE `id`='$user_id'"; 

    $result = $conn->query($sql); 

    if ($result == TRUE) {

        echo "Record updated successfully.";
        header('location:read.php');
    }else{

         echo "Error:" . $sql . "<br>" . $conn->error;
    }

    } 

  if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "SELECT * FROM `crud` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 
     
    while ($row = $result->fetch_assoc()) {

        $id = $row['Id'];

        $name = $row['name'];

        $pin = $row['pincode'];

        $email = $row['email'];

        $mob = $row['mobile_no'];

        } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="validation.js"></script>
</head>
<body>
   
<form name="myfrom" action="" method="post"  onsubmit="return validateForm()">

  <div id="name1">
  Name:<br>
  <input type="text"  name="name" value="<?php echo $name;?>"><br>
  <span class="zxc"></span>
  </div>
  <input type="hidden" name="user_name" value="<?php echo $id;?>">

  <div id="pin1">
  Pincode:<br>
  <input type="text"  name="pincode" value="<?php echo $pin;?>"><br>
  <span class="zxc"></span>
  </div>

  <div id="email1">
  Email:<br>
  <input type="text"  name="email" value="<?php echo $email;?>"><br>
  <span class="zxc"></span>
  </div>

  <div id="mobile1">
  Mobile_no:<br>
  <input type="text" name="mob" value="<?php echo $mob;?>"><br>
  <span class="zxc"></span>
  </div>

  <input type="submit" value="Upload csv" name="submit">
</form>
</body>
</html>

<?php
 } 
?> 