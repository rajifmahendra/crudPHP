<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
	// variables for input data
	$nama_depan = $_POST['nama_depan'];
	$nama_belakang = $_POST['nama_belakang'];
	$kota = $_POST['kota'];
	// variables for input data
	
	// sql query for inserting data into database
	$sql_query = "INSERT INTO user(nama_depan,nama_belakang,kota) VALUES('$nama_depan','$nama_belakang','$kota')";
	// sql query for inserting data into database
	
	// sql query execution function
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data berhasil disimpan ');
		window.location.href='index.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('Data gagal disimpan');
		</script>
		<?php
	}
	// sql query execution function
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sharing</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>Sharing</label>
    </div>
</div>
<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">Kembali</a></td>
    </tr>
    <tr>
    <td><input type="text" name="nama_depan" placeholder="Nama Depan" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nama_belakang" placeholder="Nama Belakang" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="kota" placeholder="Kota" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>Simpan</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>