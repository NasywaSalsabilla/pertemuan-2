<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Mahasiswa</title>
</head>
<body>
    <h1>Aplikasi Penilaian Mahasiswa</h1>

    <form method="post" action="">
        <label
        for="nilai1">Masukkan Nilai Mata Kuliah 1:</label>
        <input type="number"
        name="nilai1" required><br><br>

        <label
        for="nilai2">Masukkan Nilai Mata Kuliah 2:</label>
        <input type="number"
        name="nilai2" required><br><br>

        <label
        for="nilai3">Masukkan Nilai Mata Kuliah 3:</label>
        <input type="number"
        name="nilai3" required><br><br>

        <label
        for="nilai4">Masukkan Nilai Mata Kuliah 4:</label>
        <input type="number"
        name="nilai4" required><br><br>

        <input type="submit"
        name="submit" value="Hitung Rata-rata">
</form>

<?php
// Memeriksa apakah tombol submit di tekan
if (isset($_POST['submit'])) {
    //Mengambil nilai dari form
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];
    $nilai4 = $_POST['nilai4'];

    //Menghitung rata-rata nilai
    $total_nilai = $nilai1 + $nilai2 + $nilai3 + $nilai4;
    $rata_rata =
    $total_nilai /4;

    //Menentukan status kelulusan
    if ($rata_rata >= 60) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    //Menampilkan hasil
    echo "<h3>Nilai Rata-Rata: ". $rata_rata . "</h3>";
    echo "<h3>Status Kelulusan: " . $status . "</h3>";
}
?> <!-- Tutup PHP di sini -->
</body>
</html> 
