<!DOCTYPE html>
<html>
<head>
	<title>Form Nilai Ujian</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            text-align: center;
        }

        from {
            margin 20px;
        }

        label {
            display: inline-block;
            width: 100px;
            text-align: right;
            margin-right: 10px;
        }

        input[type="text"],
        select,
        input[type="number"]{
            width: 300px;
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"]{
            background-color: #4CAF50;
            color: white;
            padding: 10px;
        }
    </style>
</head>
<body>
	<h1>Form Nilai Ujian</h1>
	<form action="process.php" method="post">
		<label for="nim">NIM:</label>
		<input type="text" id="nim" name="nim" required>
		<br>
		<label for="matkul">Pilih MK:</label>
		<select id="matkul" name="matkul" required>
			<option value="">-- Pilih Mata Kuliah --</option>
			<option value="Teknik Informatika">Teknik informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
			<!-- Add more options here -->
		</select>
		<br>
		<label for="nilai">Nilai:</label>
		<input type="number" id="nilai" name="nilai" min="0" max="100" required>
		<br>
		<input type="submit" value="Simpan">
	</form>
    <?php
    $nim =$_POST['nim'];
    $matkul =$_POST['matkul'];
    $nilai =$_POST['nilai'];

    if (!preg_match('/^[0-9]{5}$/', $nim)){
        die('invalid NIM');
    }

    if ($matkul == '') {
        die('please select a subject');
    }

    if ($nilai >= 85){
        $grade = 'A';
    } elseif ($nilai >= 70){
        $grade = 'B';
    } elseif ($nilai >= 55){
        $grade = 'C';
    } elseif ($nilai >= 48){
        $grade = 'D';
    } else {
        $grade = 'E';
    }

    echo "<h1>Hasil Ujian</h1>";
    echo "<p>NIM : $nim</p>";
    echo "<p>Nama Mata Kuliah: $matkul</p>";
    echo "<P>Nilai : $nilai</p>";
    echo "<p>Hasil Ujian : $grade</p>";
    if ($grade  != 'E' ) {
        echo "<p>Grade : LULUS</P>";
    } else {
        echo "<p>Grade : TIDAK LULUS</P>";
    }
    echo "<p>Lab pemrograman web lanjutan</p>";
    echo "<p>Dosen : Sirojul Munir S.si, M.kom</p>";
    echo "<p>STT-NF-Kampus B</p>";
    ?>
</body>
</html>