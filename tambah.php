<html>
<head>
 <title>Tambah data mahasiswa</title>
</head>
<body>
 <a href="index.php">Go to Home</a>
 <br/><br/>
 <form action="tambah.php" method="post" name="form1">
 <table width="25%" border="0">
 <tr>
 <td>Nim</td>
 <td><input type="text" name="NIM"></td>
 </tr>
 <tr>
 <td>Nama</td>
 <td><input type="text" name="Nama"></td>
 </tr>
 <tr>
 <td>Gender (L/P)</td>
 <td><input type="text" name="jkel"></td>
 </tr>
 <tr>
 <td>Alamat</td>
 <td><input type="text" name="alamat"></td>
 </tr>
 <tr>
 <td>Tgl Lahir</td>
 <td><input type="text" name="tgllhr"></td>
 </tr>
 <tr>
 <td>semester</td>
 <td><input type="text" name="semester"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" name="Submit" value="Tambah"></td>
 </tr>
 </table>
 </form>

<?php
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['Submit'])) {
 $NIM = $_POST['NIM'];
 $Nama = $_POST['Nama'];
 $jkel = $_POST['jkel'];
 $alamat = $_POST['alamat'];
 $tgllhr = $_POST['tgllhr'];
 $semester = $_POST['semester'];
 // include database connection file
 include_once("koneksi.php");
 // Insert user data into table
 $result = mysqli_query($con, "INSERT INTO mahasiswa(NIM,Nama,jkel,alamat,tgllhr,semeter)
VALUES('$NIM','$Nama', '$jkel','$alamat','$tgllhr','$semester')");
// Show message when user added
 echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
}
?>
</body>
</html>