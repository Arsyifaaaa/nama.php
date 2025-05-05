<?php

if (isset($_POST['nama'])) {
    $nama = htmlspecialchars($_POST['nama']);
    echo "Halo " . $nama;
} else {
    echo "Nama belum diisi.";
}

?>
