<?php
$postName = $_POST['postName'];
$postText = $_POST['postText'];

$servername = "localhost";
$usernameDB = "root";
$passwordDB = "dtb456";
$dbname = "dbforum";

// Create connection
    $conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

/*    $check_username = mysqli_query($conn, "SELECT username FROM user where username = '$username' ");
    if (mysqli_num_rows($check_username) > 0) {
        echo('0');
    } else {*/

$sql = "INSERT INTO post (titleName, text, creator)
        VALUES ('$postName', '$postText', '5')";

if ($conn->query($sql) === TRUE) {
    echo "1";
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


