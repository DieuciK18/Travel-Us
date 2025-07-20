<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "travel_us";

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destination = $_POST['destination_id'];
    $start = $_POST['start_date'];
    $end = $_POST['end_date'];
    $travelers = $_POST['travelers'];
    $flight = isset($_POST['flight_included']) ? 1 : 0;
    $hotel = isset($_POST['hotel_included']) ? 1 : 0;
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $special = $_POST['special_requests'];

    $stmt = $conn->prepare("INSERT INTO reservations (destination, start_date, end_date, travelers, flight_included, hotel_included, first_name, last_name, email, phone, special_requests)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiisssss", $destination, $start, $end, $travelers, $flight, $hotel, $first, $last, $email, $phone, $special);

    if ($stmt->execute()) {
        echo "<script>alert('Réservation enregistrée avec succès');window.location.href='index.html';</script>";
    } else {
        echo "Erreur : " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
