<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM user WHERE id=".$_GET['edit_id'];
	$result_set=mysql_query($sql_query);
	$fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
	// variables for input data
	$nama_depan = $_POST['nama_depan'];
	$nama_belakang = $_POST['nama_belakang'];
	$kota = $_POST['kota'];
	// variables for input data
	
	// sql query for update data into database
	$sql_query = "UPDATE user SET nama_depan='$nama_depan',nama_belakang='$nama_belakang',kota='$kota' WHERE id=".$_GET['edit_id'];
	// sql query for update data into database
	
	// sql query execution function
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data berhasil diubah');
		window.location.href='index.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('Data gagal diubah');
		</script>
		<?php
	}
	// sql query execution function
}
if(isset($_POST['btn-cancel']))
{
	header("Location: index.php");
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
    <td><input type="text" name="nama_depan" placeholder="Nama depan" value="<?php echo $fetched_row['nama_depan']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nama_belakang" placeholder="Nama belakng" value="<?php echo $fetched_row['nama_belakang']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="kota" placeholder="Kota" value="<?php echo $fetched_row['kota']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>