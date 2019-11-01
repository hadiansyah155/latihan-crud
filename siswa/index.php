<?php 
// menambah / memanggil file database.php
include '../database.php';
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>document</title>
</head>
<body>
    <center>Data Siswa</center>
    <fieldset>
        <legend>Data Siswa</legend>
   <a href="create.php" style="padding: 0.4% 0.8%;background-color: blue;color: #fff;border-radius: 2px;text-decoration:none;">Tambah data</a><br><br>
	<table border="1"cellpadding="8" width="70%" bgcolor="#eee" >
	<tr style="text-align: center;font-weight: bold;background-color: skyblue">
            <th>No</th>
            <th>Nama</th>   
            <th>Nomor Induk Siswa</th>
            <th>Alamat</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php
            $siswa = new Siswa();
            $no = 1;
            foreach($siswa->index() as $data) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['nis']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><a href="show.php?id=<?php echo $data['id']; ?>&aksi=show" style="padding: 0.4% 0.8%;background-color:
             orange;color: #fff;border-radius: 2px;text-decoration:none;">SHOW</a></td>
            <td><a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit" style="padding: 0.4% 0.8%;background-color:
             green;color: #fff;border-radius: 2px;text-decoration:none;">EDIT</a></td>
            <td><a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" onclick="return confirm
            ('Apakah Anda Yakin Ingin Menghapus Data Ini?');
            ALTER TABLE nama_tabel_lama RENAME TO nama_tabel_baru;" style="padding: 0.4% 0.8%;background-color:
             red;color: #fff;border-radius: 2px;text-decoration:none;">DELETE</a></td>
        </tr>
        <?php }?>
        </table>
    </fieldset>
</body>
</html>
