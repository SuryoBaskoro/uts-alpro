<!DOCTYPE html>
<html>

<head>
    <title>Tugas UTS</title>
</head>

<body>
    <form action="uts-act.php" method="post">
        <div class="form-group">
            <label>Masukkan Nama: </label>
            <input name="nama" type="text">
        </div>
        <br>
        <div class="form-group">
            <label>Nilai Tugas:</label>
            <input type="number" name="nt">
        </div>
        <br>
        <div class="form-group">
            <label>Nilai UTS:</label>
            <input type="number" name="nu">
        </div>
        <br>
        <div class="form-group">
            <label>Nilai UAS:</label>
            <input type="number" name="na">
        </div>
        <br>
        <div class="form-group">
            <label>Nilai Praktek:</label>
            <input type="number" name="np">
        </div>
        <br>
        <button type="submit">Send</button>
    </form>
</body>

</html>