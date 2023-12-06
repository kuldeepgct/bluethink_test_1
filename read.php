<?php
include "connection.php";
$sql = "SELECT * FROM `crud`";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Pincode</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile_no</th>
    </tr>
  </thead>
  <tbody>
    <tr>
<?php
while ($row = $result->fetch_assoc()) {
?>
  </tr>
  <tr>
    <td><?php echo $row['Id']; ?></td>
    
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['pincode']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['mobile_no']; ?></td>
    <td><a class="btn btn-primary" href="update.php?id=<?php echo $row['Id'];?>">edit</a><td>
    <td><a class="btn btn-primary" href="delete.php?id=<?php echo $row['Id']?>" role="button">delete</a><td>
    <td><a class="btn btn-primary" href="export.php?id=<?php echo $row['Id']?>" role="button">Export</a><td>
  </tr>
<?php
 }
?>
</tbody>
</table>
    
</body>
</html>