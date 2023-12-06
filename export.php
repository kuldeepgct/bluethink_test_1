<?php 
include "connection.php";
$file = fopen('zxc.csv', 'w');
fputcsv($file, array( 'NAME', 'Pincode', 'Email', 'Mobile_No')); 
if(isset($_GET['id'])){
   $user_id = $_GET['id']; 

    $sql = "SELECT `name`,`pincode`,`email`,`mobile_no` FROM `crud` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 
     
    while($res = $result->fetch_assoc())
    {
        
        fputcsv($file, $res); 
    }
    fclose($file);
    header('Location:zxc.csv');
}
?>

    

