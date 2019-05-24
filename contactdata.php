<?php

$name = $_POST['t1'];
$mail = $_POST['t2'];
$mobile = $_POST['t3'];
$message= $_POST['t4'];

$conn = mysqli_connect("localhost","root"."","contactdata");

$sql = insert into contact values('$name','$mail','$mobile','$message');

if(mysqli_query($conn,$sql))
{
    echo "Your record has been submitted Successfully, Thank you for Connecting with us.";
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>