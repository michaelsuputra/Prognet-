<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Formulir Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
        }

        h1 {
            color: #007BFF;
        }

        p {
            text-align: left;
            margin: 5px 0;
        }
        
        .result {
            font-size: 18px;
            margin: 10px 0;
            color: #333;
        }

        .error {
            color: #FF0000;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $nim = $_POST["nim"];
            $alamat = $_POST["alamat"];
            $jenis_kelamin = $_POST["jenis_kelamin"];
            $jurusan = $_POST["jurusan"];
            $email = $_POST["email"];

            echo "<h1>Hasil Formulir Biodata</h1>";
            echo "<p class='result'><strong>Nama Lengkap:</strong> $nama</p>";
            echo "<p class='result'><strong>NIM:</strong> $nim</p>";
            echo "<p class='result'><strong>Alamat:</strong> $alamat</p>";
            echo "<p class='result'><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
            echo "<p class='result'><strong>Jurusan:</strong> $jurusan</p>";
            echo "<p class='result'><strong>Email:</strong> $email</p>";
        } else {
            echo "<p class='error'>Terjadi kesalahan dalam pengiriman formulir.</p>";
        }
        ?>
    </div>
</body>
</html>
