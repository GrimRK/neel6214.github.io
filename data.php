<?php
if(isset($_POST['submit']))
    {   
        
        
        
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customerinfo";
$loginid2 = $_POST['1loginid'];
$password2 = $_POST['1password'];
$contactnumber2 = $_POST['1contactnumber'];
$email2 = $_POST['1email'];
$name2 = $_POST['1name'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO id_password(login_id,name_,email_,contact_number,password_)
VALUES ('$loginid2','$name2','$email2',$contactnumber2,'$password2')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>