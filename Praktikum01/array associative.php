<?php 

	$mahasiswa= ["Nama"=>"Yasser", "Umur"=>"21", "Alamat"=>"klapanunggal"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
        </tr>
            <tr>
                <td><?php echo $mahasiswa["Nama"]; ?></td>
                <td><?php echo $mahasiswa["Umur"]; ?></td>
                <td><?php echo $mahasiswa["Alamat"]; ?></td>
            </tr>
    </table>
</body>
</html>