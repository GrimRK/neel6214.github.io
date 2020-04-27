<?php
if(isset($_POST['submit']))
    {   
        
        
        
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customerinfo";
$name2 = $_POST['1name'];

$shoulderlength2 = $_POST['1shoulderlength'];
$neck2 = $_POST['1neck'];
$waist2 = $_POST['1waist'];
$wrist2 = $_POST['1wrist'];
$inseam2 = $_POST['1inseam'];
$outseam2 = $_POST['1outseam'];
$ankle2 = $_POST['1ankle'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO customer_info(customer_name,shoulder_length,neck,waist,wrist,inseam,outseam,ankle)
VALUES ('$name2',$shoulderlength2,$neck2,$waist2,$wrist2,$inseam2,$outseam2,$ankle2)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>