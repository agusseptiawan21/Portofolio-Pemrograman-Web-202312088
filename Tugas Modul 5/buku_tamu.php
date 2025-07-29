<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu Digital STITEK Bontang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f7;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #0077b6;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 600px;
            background: white;
            margin: 30px auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            border-radius: 8px;
        }
        label {
            display: block;
            margin-top: 15px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #0077b6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<header>
    <h1>Buku Tamu Digital STITEK Bontang</h1>
</header>

<div class="container">
    <?php
    $nama = $email = $pesan = "";
    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $errors[] = "Nama Lengkap wajib diisi.";
        } else {
            $nama = htmlspecialchars($_POST["nama"]);
        }

        if (empty($_POST["email"])) {
            $errors[] = "Alamat Email wajib diisi.";
        } else {
            $email = htmlspecialchars($_POST["email"]);
        }

        if (empty($_POST["pesan"])) {
            $errors[] = "Pesan/Komentar wajib diisi.";
        } else {
            $pesan = htmlspecialchars($_POST["pesan"]);
        }

        if (empty($errors)) {
            echo "<div class='success'>";
            echo "<h3>Terima kasih atas kunjungan Anda!</h3>";
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Pesan:</strong><br>$pesan</p>";
            echo "</div>";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>">

        <label for="email">Alamat Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>">

        <label for="pesan">Pesan/Komentar:</label>
        <textarea id="pesan" name="pesan" rows="4"><?php echo $pesan; ?></textarea>

        <button type="submit">Kirim Pesan</button>
    </form>

    <?php
    if (!empty($errors)) {
        echo "<div class='error'><ul>";
        foreach ($errors as $e) {
            echo "<li>$e</li>";
        }
        echo "</ul></div>";
    }
    ?>
</div>

</body>
</html>
