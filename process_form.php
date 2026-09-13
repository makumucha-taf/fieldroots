<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "fieldrts_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = isset($_POST['fullname']) ? trim($_POST['fullname']) : '';
    $email   = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    if (!empty($name) && !empty($email) && !empty($message)) {
        $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            echo "<script>alert('Thank you! Your message has been saved to the database.'); window.location.href='contact.php';</script>";
        } else {
            echo "Execution Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "<script>alert('Error: All fields are required.'); window.history.back();</script>";
    }
}
$conn->close();
?>
