<?php
if(isset($_POST['upload'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $absen = $_POST['absen'];

    // Menyimpan data ke file txt
    $data = $nama."|".$kelas."|".$absen."\n";
    file_put_contents("biodata.txt", $data, FILE_APPEND);

    // Upload foto
    $folder = "uploads/";
    if(!is_dir($folder)){
        mkdir($folder);
    }
    $fileName = $_FILES['foto']['name'];
    $tmpName = $_FILES['foto']['tmp_name'];
    move_uploaded_file($tmpName, $folder.$fileName);
    date_default_timezone_set('Asia/Jakarta');
    $wib = date('H:i:s');

    // Tampilkan hasil
    echo "<h3>Data berhasil disimpan:</h3>";
    echo "Nama: ".$nama."<br>";
    echo "Kelas: ".$kelas."<br>";
    echo "Absen: ".$absen."<br>";
    echo "<img src='".$folder.$fileName."' width='90'><br><br>";
    echo "UPDATE AT: " . date(" jS \of F Y h:i:s A") . "<br>";
    echo "<a href='index.php'>Input lagi</a>";
}
?>