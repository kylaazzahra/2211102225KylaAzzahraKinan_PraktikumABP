<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Cek Umur</title>
    <style>
        body {
            background-color: #ffe6f0; /* Pink muda */
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 50px;
        }
        .container {
            background-color: #ffcce0; /* Warna pink */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(255, 105, 180, 0.3);
            width: 300px;
            text-align: center;
        }
        input[type="text"], input[type="number"] {
            width: 90%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ff99cc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #ff66a3;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #ff3385;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Cek Umur Kamu!</h2>
    <form method="POST" action="proses.php">
        <input type="text" name="nama" placeholder="Masukkan Nama" required><br>
        <input type="number" name="umur" placeholder="Masukkan Umur" required><br>
        <input type="submit" value="Cek Sekarang">
    </form>
</div>

</body>
</html>
