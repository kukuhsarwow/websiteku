<?php
include 'function.php';
$conn->close();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            <?php
            if (isset($_GET['choice'])) {
                $choice = htmlspecialchars($_GET['choice']);
                if ($choice === 'Bogor') {
                    echo "background-image: url('../date/gambar/ammar-andiko-jPZ_rCUvdWs-unsplash.jpg');";
                } elseif ($choice === 'Bandung') {
                    echo "background-image: url('../date/gambar/pexels-thegr8ossab-6658022.jpg');";
                } elseif ($choice === 'Yogyakarta') {
                    echo "background-image: url('../date/gambar/pexels-gustomyhapsah-12255513.jpg');";
                } else {
                    echo "background-image: url('../date/default.jpg');";
                }
            }
            ?>
            background-size: cover; /* Menyesuaikan ukuran gambar dengan ukuran layar */
            background-position: center; /* Memusatkan gambar */
            color: white; /* Mengubah warna teks agar kontras dengan latar belakang */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mt-5">Terima Kasih!</h1>
        <p>
            <?php
            if (isset($_GET['name']) && isset($_GET['choice'])) {
                $name = htmlspecialchars($_GET['name']);
                $choice = htmlspecialchars($_GET['choice']);
                echo "$name, terima kasih telah memilih $choice sebagai tempat nge-date!";
            } else {
                echo "Data tidak tersedia.";
            }
            ?>
        </p>
        <a href="index.php" class="btn btn-primary">Kembali ke Pilihan</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


