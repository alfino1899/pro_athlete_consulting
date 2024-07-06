<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "root"; // MAMP default password
    $dbname = "pro_athlete_consulting";
    $port = 8889;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];

    // Insert data into database
    $sql = "INSERT INTO pro_athlete_consulting (name, email, phonenumber) VALUES ('$name', '$email', '$phonenumber')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
