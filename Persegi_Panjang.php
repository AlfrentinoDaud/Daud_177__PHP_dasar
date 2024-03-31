<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas Persegi Panjang</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Menghitung Luas Persegi Panjang</h2>
                <form method="post">
                    <div class="form-group">
                        <label for="panjang">Panjang:</label>
                        <input type="text" class="form-control" id="panjang" name="panjang" required>
                    </div>
                    <div class="form-group">
                        <label for="lebar">Lebar:</label>
                        <input type="text" class="form-control" id="lebar" name="lebar" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Hitung Luas</button>
                </form>

                <?php
                // Fungsi untuk menghitung luas persegi panjang
                function persegi_panjang($p, $l) {
                    return $p * $l;
                }

                // Memeriksa apakah formulir telah dikirim
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Mengambil nilai panjang dan lebar dari formulir
                    $p = $_POST["panjang"];
                    $l = $_POST["lebar"];

                    // Memeriksa apakah kedua nilai yang dimasukkan adalah angka
                    if (is_numeric($p) && is_numeric($l)) {
                        // Menghitung dan menampilkan luas persegi panjang
                        echo '<div class="alert alert-success mt-3">Luas Persegi Panjang dengan panjang ' . $p . ' dan lebar ' . $l . ' adalah: ' . persegi_panjang($p, $l) . '</div>';
                    } else {
                        // Jika salah satu atau kedua nilai tidak valid, tampilkan pesan kesalahan
                        echo '<div class="alert alert-danger mt-3">Masukkan angka untuk panjang dan lebar.</div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
