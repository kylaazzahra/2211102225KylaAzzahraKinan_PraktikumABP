<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Cek Umur</title>
    <style>
        body {
            background-color: #ffe6f0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 50px;
        }
        .result-container {
            background-color: #ffcce0;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(255, 105, 180, 0.3);
            width: 300px;
            text-align: center;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            background-color: #ff66a3;
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
        }
        a:hover {
            background-color: #ff3385;
        }
    </style>
</head>
<body>

<div class="result-container">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = htmlspecialchars($_POST['nama']);
        $umur = (int) $_POST['umur'];

        echo "<h2>Halo, $nama!</h2>";
        if ($umur >= 18) {
            echo "<p>Status: <strong>Dewasa</strong>.</p>";
        } else {
            echo "<p>Status: <strong>Belum Dewasa</strong>.</p>";
        }
    } else {
        echo "<p>Tidak ada data yang dikirim!</p>";
    }
    ?>
    <a href="index.php">Kembali</a>
</div>

</body>
</html>
