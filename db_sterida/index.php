<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa</title>
    <link rel="stylesheet" href="kon.css">
</head>
<body>

<div class="container">

    <h2>Pendaftaran Siswa</h2>

    <form action="koneksi.php" method="POST">

        <label>Nama Lengkap</label>
        <input type="text" name="nama" required>

        <label>NISN</label>
        <input type="text" name="nisn" required>

        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label>Kelas</label>
        <input type="text" name="kelas" required>

        <label>Alamat</label>
        <textarea name="alamat" rows="4" required></textarea>

        <button type="submit">Simpan Data</button>

    </form>

</div>

</body>
</html>