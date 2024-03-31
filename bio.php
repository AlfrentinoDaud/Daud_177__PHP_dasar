<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Form Biodata</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="form-group">
            <label for="tglL">Tempat Tanggal Lahir:</label>
            <input type="text" class="form-control" id="tglL" name="tglL">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat"></textarea>
        </div>

        <div class="form-group">
            <label>Jenis kelamin:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="lk" value="Laki-Laki">
                <label class="form-check-label" for="lk">Laki-Laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="pr" value="Perempuan">
                <label class="form-check-label" for="pr">Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label for="hobi">Hobi:</label>
            <input type="text" class="form-control" id="hobi" name="hobi">
        </div>

        <div class="form-group">
            <label for="pendidikan">Pendidikan:</label>
            <input type="text" class="form-control" id="pendidikan" name="pendidikan">
        </div>

        <div class="form-group">
            <label for="noTelp">Nomor Telepon:</label>
            <input type="tel" class="form-control" id="noTelp" name="noTelp" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}">
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

    <?php
    // Cek apakah form telah di-submit
    if (isset($_POST["submit"])) {
        // Mengambil nilai dari form
        $nama = $_POST['nama'];
        $tglL = $_POST['tglL'];
        $alamat = $_POST['alamat'];
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $hobi = $_POST['hobi'];
        $pendidikan = $_POST['pendidikan'];
        $nomor = $_POST['noTelp'];

        // Validasi semua input
        if (!empty($nama) && !empty($tglL) && !empty($alamat) && !empty($gender) && !empty($hobi) && !empty($pendidikan) && !empty($nomor)) {
            // Menampilkan hasil biodata jika semua input terisi
            echo "<div class='mt-5'>";
            echo "<h3>Biodata Anda:</h3>";
            echo "Nama: $nama <br>";
            echo "Tempat Tanggal Lahir: $tglL <br>";
            echo "Alamat: $alamat <br>";
            echo "Jenis Kelamin: $gender <br>";
            echo "Hobi: $hobi <br>";
            echo "Pendidikan: $pendidikan <br>";
            echo "Nomor Telepon: $nomor <br>";
            echo "</div>";
        } else {
            // Menampilkan pesan error jika ada input yang kosong
            echo "<div class='mt-3 alert alert-danger'>Semua kolom harus diisi!</div>";
        }
    }
    ?>
</div>

</body>
</html>
