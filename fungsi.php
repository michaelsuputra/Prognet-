<?php
include 'koneksi.php';

function tambah_data($data){
    $nisn = $data['nisn'];
    $nama_siswa = $data['nama_siswa'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $kelas = $data['kelas']; // Tambahkan kelas
    $alamat = $data['alamat'];

    $query = "INSERT INTO tb_siswa (nisn, nama_siswa, jenis_kelamin, kelas, alamat) VALUES ('$nisn', '$nama_siswa', '$jenis_kelamin', '$kelas', '$alamat')";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}

function ubah_data($data){
    $id_siswa = $data['id_siswa'];
    $nisn = $data['nisn'];
    $nama_siswa = $data['nama_siswa'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $kelas = $data['kelas']; // Tambahkan kelas
    $alamat = $data['alamat'];

    $query = "UPDATE tb_siswa SET nisn='$nisn', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', kelas='$kelas', alamat='$alamat' WHERE id_siswa='$id_siswa'";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}

function hapus_data($data){
    $id_siswa = $data['hapus'];

    $query = "DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa'";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}
?>
