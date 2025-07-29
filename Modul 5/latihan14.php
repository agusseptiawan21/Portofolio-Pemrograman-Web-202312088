<!DOCTYPE html>
<html>
<body>
    <form method="post" action="latihan14.php">
        Nama: <input type="text" name="nama">
        <input type="submit">
    </form>
    <br>
    <?php
    if (isset($_POST['nama'])) {
        $nama = htmlspecialchars($_POST['nama']);
        echo "Halo, " . $nama . "!";
    }
    ?>
    <?php
    // Cek apakah form GET telah disubmit
    if (isset($_POST['nama_get'])) {
        $nama_get = htmlspecialchars($_GET['nama_get']);
        echo "Halo dari GET, " . $nama_get . "!<br>";
        echo "Perhatikan URL browser Anda!";
    }
    ?>
    <form method="get" action="latihan14.php">
        Nama: <input type="text" name="nama">
        <input type="submit">
    </form>
    <br>
    <?php
    if (isset($_GET['nama'])) {
        $nama = htmlspecialchars($_GET['nama']);
        echo "Halo, " . $nama . "!";
    }
?>
</body>
</html>