<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Formulir Biodata</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve data from the form
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $alamat = $_POST["alamat"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $jurusan = $_POST["jurusan"];
        $email = $_POST["email"];

        // Display the submitted data
        echo "<h1>Form Submission Result</h1>";
        echo "<p>Nama Lengkap: $nama</p>";
        echo "<p>NIM: $nim</p>";
        echo "<p>Alamat: $alamat</p>";
        echo "<p>Jenis Kelamin: $jenis_kelamin</p>";
        echo "<p>Jurusan: $jurusan</p>";
        echo "<p>Email: $email</p>";
    } else {
        echo "<p>Form submission error.</p>";
    }
    ?>
</body>
</html>