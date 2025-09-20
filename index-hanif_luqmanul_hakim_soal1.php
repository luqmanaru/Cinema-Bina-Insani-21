<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME TO CINEMA BINA INSANI 21</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <table>
            <tr>
                <th colspan="2">CINEMA BINA INSANI 21</th>
            </tr>
            <br>
            <form method="post">
                <tr>
                    <label for="kode">
                        <td>Kode Tiket</td>
                    </label>
                    <td>
                        <select name="kode" required>
                            <option value="TRM">Transformers The Last Knight</option>
                            <option value="MID">Mission Impossible - Dead Reckoning Part One</option>
                            <option value="TMM">The Mummy</option>
                            <option value="TWM">Wonder Woman</option>
                        </select>
                    </td>
                </tr>
                <br>
                <tr>
                    <label for="waktu">
                        <td>Waktu</td>
                    </label>
                    <td>
                        <input type="radio" id="waktu1" name="waktu" value="12.30" required>
                        <label for="waktu1">12.30</label>
                        <input type="radio" id="waktu2" name="waktu" value="13.30">
                        <label for="waktu2">13.30</label>
                        <input type="radio" id="waktu3" name="waktu" value="15.30">
                        <label for="waktu3">15.30</label>
                        <input type="radio" id="waktu4" name="waktu" value="17.30">
                        <label for="waktu4">17.30</label>
                        <input type="radio" id="waktu5" name="waktu" value="19.30">
                        <label for="waktu5">19.30</label>
                        <input type="radio" id="waktu6" name="waktu" value="20.30">
                        <label for="waktu6">20.30</label>
                        </select>
                    </td>
                </tr>
                <br>
                <tr>
                    <label for="hari">
                        <td>Hari</td>
                    </label>
                    <td>
                        <select name="hari" required>
                            <option value="senin-minggu">Senin-Minggu</option>
                            <option value="jumat">Jumat</option>
                            <option value="sabtu-minggu">Sabtu-Minggu</option>
                        </select>
                    </td>
                </tr>
                <br>
                <tr>
                    <label for="jumlah_beli">
                        <td>Jumlah Beli</td>
                    </label>
                    <td>
                        <input type="number" name="jumlah_beli" required>
                    </td>
                </tr>
                <br>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="simpan">
                        <a href="index-hanif_luqmanul_hakim_soal1.php" class="btn">Batal</a>
                    </td>
                </tr>
            </form>
        </table>
        <?php
        $kode = $hari = $waktu = $jumlah_beli = $harga_tiket = $nama_film = $total_harga = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            //ini variable
            $kode = $_POST['kode'];
            $hari = $_POST['hari'];
            $waktu = $_POST['waktu'];
            $jumlah_beli = $_POST['jumlah_beli'];

            //ini harga per barang nya
            $harga_tiket = 0;

            //ini harag per barang berdasarkan kode barang, hari, dan waktu
            switch ($kode) {
                case "TRM":
                    if ($hari == "jumat") {
                        $harga_tiket = 50000;
                    } else {
                        if ($waktu == "12.30" || $waktu == "13.30") {
                            $harga_tiket = 40000;
                        } else {
                            $harga_tiket = 60000;
                        }
                    }
                    $nama_film = "Transformers The Last Knight";
                    break;
                case "MID":
                    if ($hari == "jumat") {
                        $harga_tiket = 70000;
                    } else {
                        if ($waktu == "12.30" || $waktu == "13.30") {
                            $harga_tiket = 60000;
                        } else {
                            $harga_tiket = 80000;
                        }
                    }
                    $nama_film = "Mission Impossible - Dead Reckoning Part One";
                    break;
                case "TMM":
                    if ($hari == "jumat") {
                        $harga_tiket = 55000;
                    } else {
                        if ($waktu == "12.30" || $waktu == "13.30") {
                            $harga_tiket = 45000;
                        } else {
                            $harga_tiket = 65000;
                        }
                    }
                    $nama_film = "The Mummy";
                    break;
                case "TWM":
                    if ($hari == "jumat") {
                        $harga_tiket = 80000;
                    } else {
                        if ($waktu == "12.30" || $waktu == "13.30") {
                            $harga_tiket = 70000;
                        } else {
                            $harga_tiket = 90000;
                        }
                    }
                    $nama_film = "Wonder Woman";
                    break;
                default:
                    die("Kode Film Tidak Ada");
            }

            //ini penghitungan total harga
            $total_harga = $harga_tiket * $jumlah_beli;
        }

        // Mengonversi string menjadi nilai numerik sebelum mengurangkan
        $total_harga = floatval($total_harga);
        ?>

        <p>STRUK PEMBAYARAN</p>
        <p>CINEMA BINA INSANI 21</p>
        <p>=================================</p>
        <p>Kode Film : <?php echo $kode; ?></p>
        <p>Nama Film : <?php echo $nama_film; ?></p>
        <p>Harga Tiket : <?php echo $harga_tiket; ?></p>
        <p>Hari : <?php echo $hari; ?></p>
        <p>Waktu : <?php echo $waktu; ?></p>
        <p>Jumlah Beli : <?php echo $jumlah_beli; ?></p>
        <p>Total Bayar : <?php echo $total_harga; ?></p>
        <p>=================================</p>
        <p>Terima Kasih Telah Menonton di CINEMA BINA INSANI 21</p>
        <p>Silahkan Datang Kembali _/|\_</p>
        <br>
        <a href="index-hanif_luqmanul_hakim_soal1.php" class="btn">Ingin memesan lagi?</a>
    </div>
</body>

</html>