<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if(isset($_POST['submit']))
    {   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customerinfo";
$loginid2 = $_POST['1loginid'];
$password2 = $_POST['1password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT login_id,password_ FROM id_password";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if(strcmp($loginid2,$row["login_id"])==0 && strcmp($password2,$row["password_"]==0)
        	{echo "<a href="p1.html"> click here to login</a>";
        }
    }
} else {
    echo "0 results";
}
}
$conn->close();
?>
</body>
</html>
