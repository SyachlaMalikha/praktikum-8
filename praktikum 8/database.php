<?php 
  $servername = "localhost";
  $username   = "root";
  $password   = "";
  $dbname     = "registrasi_pesertadidik";

  // create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // check connection
  if (!$conn) {
      die("Connection failed:" . mysqli_connect_error());
  }

 
  $sql_pesertaDidik = "CREATE TABLE peserta_didik (
      nis INT (50) PRIMARY KEY,
      jenispendaftaran VARCHAR(50) NOT NULL,
      tanggal VARCHAR(50) NOT NULL,
      no_ujian VARCHAR(50) NOT NULL,
      paud VARCHAR(50) NOT NULL,
      tk VARCHAR(50) NOT NULL,
      skhun VARCHAR(50) NOT NULL,
      ijazah VARCHAR(50) NOT NULL,
      hobi VARCHAR(50) NOT NULL,
      cita VARCHAR(50) NOT NULL
      )";
      
  if (mysqli_query($conn, $sql_pesertaDidik)) {
      echo "Database berhasil dibuat";
  } else {
      echo "Gagal membuat database" . mysqli_error($conn);
  }

  $sql = "CREATE TABLE data_pribadi (
    nik INT (50) PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    jk VARCHAR(50) NOT NULL,
    nisn VARCHAR(50) NOT NULL,
    tempatL VARCHAR(50) NOT NULL,
    tanggalL VARCHAR(50) NOT NULL,
    agama VARCHAR(50) NOT NULL,
    khusus VARCHAR(50) NOT NULL,
    alamat VARCHAR(100) NOT NULL,
    rt VARCHAR(50) NOT NULL,
    rw VARCHAR(50) NOT NULL,
    dusun VARCHAR(50) NOT NULL,
    desa VARCHAR(50) NOT NULL,
    kecamatan VARCHAR(50) NOT NULL,
    kode VARCHAR(20) NOT NULL,
    tempatT VARCHAR(50) NOT NULL,
    transpor VARCHAR(50) NOT NULL,
    hp VARCHAR(50) NOT NULL,
    telp VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    penerima_KPS VARCHAR(50) NOT NULL,
    no_KPS VARCHAR(50) NOT NULL,
    kwn VARCHAR(50) NOT NULL,
    negara VARCHAR(50) NOT NULL

    )";
    
if (mysqli_query($conn, $sql)) {
    echo "Database berhasil dibuat"; 
} else {
    echo "Gagal membuat database" . mysqli_error($conn);
}
  mysqli_close($conn);
?>