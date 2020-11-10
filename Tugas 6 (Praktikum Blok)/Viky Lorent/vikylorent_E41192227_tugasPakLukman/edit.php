<?php
 include("config.php"); // untuk memanggil file koneksi.php
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
<table>
  <tr>
    <td><a href="input.php">Input Data</a></td>
    <td><a href="tampil.php">Tampil Data</a></td>
  </tr>
</table>
<table>
<?php
  //untuk mengambil value dari paramater id=
  $id=$_GET['id'];
  //query sql untuk menampilkan data berdasarkan id
  $query=mysql_query("SELECT * FROM mahasiswa WHERE id='".$id."'");
  //menampilkan data dari query database berbentuk array an ditampilkan di form
  $data=mysql_fetch_assoc($query);

 //syntax php untuk edit data ke database
 if (isset($_POST['edit'])) {
  # code...
  $query=mysql_query("UPDATE mahasiswa SET nim='".$_POST['nim']."', nama='".$_POST['nama']."',tanggal_lahir='".$_POST['tanggal_lahir']."',,agama='".$_POST['agama']."' username='".$_POST['tanggal_lahir']."', password='".$_POST['password']."'WHERE id='$id'");

  if ($query) {
   # code...
   echo "data berhasil disimpan";
   
   $query=mysql_query("SELECT * FROM mahasiswa WHERE id='".$id."'");
   //menampilkan data dari query database berbentuk array an ditampilkan di form
   $data=mysql_fetch_assoc($query);

  }else{
   echo "data gagal disimpan".mysql_error();
  }
 }
?>
 <!--form edit -->
 <form method="POST">
  <tr>
   <td>NIM</td>
   <td><input type="text" name="nim" size="30" value="<?php echo $data['nim']; ?>"></td>
  </tr>
  <tr>
   <td>nama</td>
   <td><input type="text" name="nama" size="30" value="<?php echo $data['nama']; ?>"></td>
  </tr>
  <tr>
   <td>Tanggal Lahir</td>
   <td><input type="text" name="tanggal_lahir" size="30" value="<?php echo $data['tanggal_lahir']; ?>"></td>
  </tr>
  <tr>
   <td>Agama</td>
   <td><input type="text" name="agama" size="30" value="<?php echo $data['agama']; ?>"></td>
  </tr>
  <tr>
   <td>Username</td>
   <td><input type="text" name="username" size="30" value="<?php echo $data['username']; ?>"></td>
  </tr>
  <tr>
   <td>Password</td>
   <td><input type="text" name="password" size="30" value="<?php echo $data['password']; ?>"></td>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" name="edit" value="Edit"></td>
  </tr>
 </form>
</table>

</body>
</html>