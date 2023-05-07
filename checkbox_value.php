<?php
$name = $_POST['name'];
$area = $_POST['area'];
    $chk="";  
    foreach($area as $chk1)  
       {  
          $chk.= $chk1.",";  
       }  

$conn= mysqli_connect("localhost","root","","flight_booking_db");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE booked_flight SET seat='$chk' WHERE name='$name' ";

if(mysqli_query($conn,$sql)) {

    echo 'select seat';
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>