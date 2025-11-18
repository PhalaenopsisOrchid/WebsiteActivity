<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "person_validation_db";
$port       = 3307;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = $conn->real_escape_string($_POST['full_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $validation_status = $conn->real_escape_string($_POST['validation_status']);
    $validated_by = $conn->real_escape_string($_POST['validated_by']);

    if (empty($email)) {
        $email = NULL;
    }
    if (empty($validated_by)) {
        $validated_by = NULL;
    }

    $sql = "INSERT INTO validations (full_name, email, validation_status, validated_by)
             VALUES (?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param("ssss", $full_name, $email, $validation_status, $validated_by);

    if ($stmt->execute()) {
        echo "<h2>✅ Success!</h2>";
        echo "<p>New record created successfully.</p>";
        echo "<p>Total Records Captured: " . $conn->insert_id . "</p>";
        echo '<p><a href="form.html">Go back to the form</a></p>';
    } else {
        echo "<h2>❌ Error:</h2>" . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>