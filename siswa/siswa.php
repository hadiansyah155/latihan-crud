<?php  
class Siswa extends Database {
    // Menampilkan Semua Data
    public $nis, $nama, $alamat;
    public function index()
    {
        
        $datasiswa = mysqli_query($this->koneksi,"select * from siswa");
        // var_dump($datasiswa);
        return $datasiswa;
    }

    // Menambah Data
    public function create($nis, $nama, $alamat)
    {
        // INSERT INTO `siswa`(`id`, `nis`, `nama`, `alamat`) VALUES ([value-1],[value-2],[value-3],[value-4])
         mysqli_query($this->koneksi,"INSERT INTO `siswa`(`nis`, `nama`, `alamat`) VALUES ($nis,'$nama','$alamat')");
        
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datasiswa = mysqli_query($this->koneksi,"select * from siswa where id='$id'");
        return $datasiswa;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datasiswa = mysqli_query($this->koneksi,"select * from siswa where id='$id'");
        return $datasiswa;
    }

    // mengupdate data berdasarkan id
    public function update($id, $nis, $nama, $alamat)
    {
        mysqli_query($this->koneksi,"update siswa set nis='$nis',nama='$nama', alamat='$alamat' where id='$id'");
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from siswa where id='$id'");
    }
}
// koneksi DB
$db = new Database();
?>