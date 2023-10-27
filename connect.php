<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $birthDate = $_POST['birthDate'];

    $con = new mysqli('localhost', 'root', '', 'handwerkdot');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO employee (firstName, lastName, gender, birthDate) VALUES (?, ?, ?, ?)";
    $stmt = $con->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssss", $firstName, $lastName, $gender, $birthDate);

        if ($stmt->execute()) {
            echo "Data inserted";
        } else {
            die("Error inserting data: " . $stmt->error);
        }

        $stmt->close();
    } else {
        die("Error preparing statement: " . $con->error);
    }

    $con->close();
}
?>

