<?php
require_once("db_connect.php");

//get values from form
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

//insert into db
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    // Redirect to success page
    header("Location: ../login.php");
    exit();

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>