<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_sterida"
);

if (!$koneksi) {
    die("Koneksi database gagal : " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);
    $jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
    $kelas = mysqli_real_escape_string($koneksi, $_POST['kelas']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);

    $query = "INSERT INTO siswa
    (nama, nisn, jenis_kelamin, kelas, alamat)
    VALUES
    ('$nama','$nisn','$jenis_kelamin','$kelas','$alamat')";

    if (mysqli_query($koneksi, $query)) {

        echo "
        <script>
            alert('Data berhasil disimpan');
            window.location='index.php';
        </script>
        ";

    } else {

        echo "Gagal menyimpan data : " . mysqli_error($koneksi);

    }
}

mysqli_close($koneksi);

?>