<?php
// Associative Array
$data_dosen = [
    "nama" => "Ir. ABADI NUGROHO, S.Kom., M.Kom.",
    "nidn" => "1104129002",
    "matkul" => "Pemrograman Web"
];
echo "Dosen Pengampu: " . $data_dosen["nama"] . "<br>";

// Indexed Array
$teman = ["Sofyan", "Nopal", "Zul", "Hanif"];
foreach ($teman as $nama) {
    echo "Teman: $nama <br>";
}
?>