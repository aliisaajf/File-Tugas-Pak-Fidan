<!DOCTYPE html>
<html>
<head>
    <title>DATA SISWA</title>
</head>
<body>
    <form action="proses.php" method="post" enctype="multipart/form-data">
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>
        <label>Kelas:</label><br>
        <input type="text" name="kelas"><br><br>

        <label>Absen:</label><br>
        <input type="text" name="absen"><br><br>

        <label>File Foto:</label><br>
        <input type="file" name="foto"><br><br>

        <input type="submit" name="upload" value="Upload">

    </form>
</body>
</html>