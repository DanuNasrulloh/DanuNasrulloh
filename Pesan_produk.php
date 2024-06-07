<?php
// fungsi untuk menampilkan daftar paket skincare
function tampilkanDaftarPaketSkincare($daftarPaket)
{
    echo "<h2>Daftar Paket Skincare:</h2>";
    echo "<div class='container'>";
    echo "<table>";
    echo "<tr>";

    foreach ($daftarPaket as $paket) {
        echo "<td>";
        echo "<img src='" . $paket['gambar'] . "'>";
        echo "<h3>" . $paket['nama'] . "</h3>";
        echo "<p>Kode: " . $paket['kode'] . "</p>";
        echo "<p>Harga: Rp" . number_format($paket['harga'], 0, ',', '.') . "</p>";
        echo "</td>";
    }

    echo "</tr>";
    echo "</table>";
    echo "</div>";
}

// array daftar paket skincare
$daftarPaket = [
    [
        'nama' => 'Paket face Glowing',
        'kode' => 'P001',
        'harga' => 150000,
        'gambar' => 'images/wardah.jpg'
    ],
    [
        'nama' => 'Paket Jerawat Solution',
        'kode' => 'P002',
        'harga' => 300000,
        'gambar' => 'images/whitening.jpg'
    ],
    [
        'nama' => 'Paket whitening face',
        'kode' => 'P003',
        'harga' => 250000,
        'gambar' => 'images/shanika.jpeg'
    ]
];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Produk Skin Care Iceoo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="TampilanWebsite.php"><span class="badge text-bg-primary">Beranda</span></a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link" href="Profile.php"><span class="badge text-bg-primary">Profile</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Produk.php"><span class="badge text-bg-primary">Produk</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Kontak.php"><span class="badge text-bg-primary">Kontak</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Panggil fungsi tampilkanDaftarPaketSkincare() -->
    <?php tampilkanDaftarPaketSkincare($daftarPaket); ?>

    <h2>Pesan Paket Skincare:</h2>
    <form method="POST" action="order.php">
        <label for="kode">Kode Paket:</label>
        <input type="text" name="kode" id="kode" required><br>

        <label for="nama">Nama Lengkap:</label>
        <input type="text" name="nama" id="nama" required><br>

        <input type="submit" value="Pesan">
    </form>
    <br>
    <footer>
        <p>&copy; Right by Danu Nasrulloh</p>
    </footer>
</body>

</html>
?>