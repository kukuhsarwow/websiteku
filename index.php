<?php
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Tempat Nge-date</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<body>
<div class="container mt-5">
    <h2>Pilih Destinasi Wisata</h2>
    <p>Sayang, silahkan dipilih destinasi yang ingin di tuju yaaa.</p>
    <form action="index.php" method="POST">
        <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Masukkan namamu" required>
        </div>

        <label>Pilih destinasi:</label>
        <div class="form-check">
            <input type="radio" id="bogor" name="choice" value="Bogor" class="form-check-input" required
                   data-bs-toggle="tooltip" data-bs-placement="top" title="Kota hujan yang indah">
            <label for="bogor" class="form-check-label">Bogor</label>
        </div>
        <div class="form-check">
            <input type="radio" id="bandung" name="choice" value="Bandung" class="form-check-input"
                   data-bs-toggle="tooltip" data-bs-placement="top" title="Kota penuh dengan keindahan alam">
            <label for="bandung" class="form-check-label">Bandung</label>
        </div>
        <div class="form-check">
            <input type="radio" id="yogyakarta" name="choice" value="Yogyakarta" class="form-check-input"
                   data-bs-toggle="tooltip" data-bs-placement="top" title="Kota budaya dan sejarah">
            <label for="yogyakarta" class="form-check-label">Yogyakarta</label>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit Pilihan</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script>
    // Inisialisasi tooltip
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>

</body>
</html>