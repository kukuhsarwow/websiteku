<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dating_app";


$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $choice = $_POST['choice'];

    // Simpan data ke database dengan prepared statement
    $stmt = $conn->prepare("INSERT INTO date_choices (name, choice) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $choice);

    if ($stmt->execute()) {
        // Redirect ke halaman awal
        header("Location: result.php?name=" . urlencode($name) . "&choice=" . urlencode($choice));
        exit(); // Pastikan untuk keluar setelah redirect
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Cek pesan dari query string untuk menampilkan pesan terima kasih
if (isset($_GET['message']) && $_GET['message'] == 'success') {
    echo "<p>Terima kasih, $name telah memilih $choice sebagai tempat nge-date!</p>";
}



?>