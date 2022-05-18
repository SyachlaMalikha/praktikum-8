<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Formulir Registrasi Peserta Didik</title>
    <style>
        .warning {color: #FF0000;}
    </style>
    </head>
    <body>
        <?php 
        $error_nis ="";
        $error_jenispendaftaran="";
        $error_tanggal="";
        $error_nomor_ujian="";
        $error_paud="";
        $error_tk="";
        $error_skhun="";
        $error_ijazah="";
        $error_hobi="";
        $error_cita="";
       
        $nis="";
        $jenispendaftaran="";
        $tanggal="";
        $nomor_ujian="";
        $paud="";
        $tk="";
        $skhun="";
        $ijazah="";
        $hobi="";
        $cita="";
     
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["nis"]))
            {
                $error_nis= "Nis tidak boleh kosong";
            }
            else
            {
                $nis = cek_input ($_POST["nis"]);
                if(!is_numeric($nis))
                {
                    $error_nis = "Nomor NIS hanya boleh angka";
                }
            }

            if(empty($_POST["nomor_ujian"]))
            {
                $error_nomor_ujian = "Nomor ujian peserta tidak boleh kosong";
            }
            else
            {
                $nomor_ujian = cek_input ($_POST["nomor_ujian"]);
                if(!is_numeric($nomor_ujian))
                {
                    $error_nomor_ujian = "Nomor ujian peserta hanya boleh angka";
                }
            }

            if(empty($_POST["skhun"]))
            {
                $error_skhun = "No seri SKHUN tidak boleh kosong";
            }
            else
            {
                $skhun = cek_input ($_POST["skhun"]);
                if(!is_numeric($skhun))
                {
                    $error_skhun = "No seri SKHUN hanya boleh angka";
                }
            }

            if(empty($_POST["ijazah"]))
            {
                $error_ijazah = "No seri ijazah tidak boleh kosong";
            }
            else
            {
                $ijazah = cek_input ($_POST["ijazah"]);
                if(!is_numeric($ijazah))
                {
                    $error_ijazah = "No seri ijazah hanya boleh angka";
                }
            }
        }
  
        function cek_input($data){
            $data = trim($data);
            $data= stripslashes($data);
            $data= htmlspecialchars($data);
            return $data;
        }
        ?>
  <div class="row">
  <div class="col-md-6">
  <div class="card">
    <div class="card-header">
      REGISTRASI PESERTA DIDIK
    </div>
    <div class="card-body">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  
  <div class="form-group row">
  <label for="jenispendaftaran" class="col-sm-2 col-form-label "> Jenis Pendaftaran</label>
    <div class="col-sm-10">
    <input type="radio" name="jenispendaftaran" value="Siswa Baru">Siswa Baru</label>
      <input type="radio" name="jenispendaftaran" value="Pindahan">Pindahan</label> 
      <span class="warning" ><?php echo $error_jenispendaftaran; ?></span>
    </div>
  </div>
  
  <div class="form-group row">
  <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
    <div class="col-sm-10">
      <input type="text" name="tanggal" class="form-control <?php echo($error_tanggal !="" ? "is-invalid" : "");?>" 
      id="tanggal" placeholder="Tanggal Masuk Sekolah" value="<?php echo $tanggal; ?>">
      <span class="warning" ><?php echo $error_tanggal; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="nis" class="col-sm-2 col-form-label ">NIS</label>
    <div class="col-sm-10">
      <input type="text" name="nis" class="form-control <?php echo($error_nis !="" ? "is-invalid" : "");?>" 
      id="nis" placeholder="NIS" value="<?php echo $nis; ?>">
      <span class="warning" ><?php echo $error_nis; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="nomor_ujian" class="col-sm-2 col-form-label ">Nomor Peserta Ujian</label>
    <div class="col-sm-10">
      <input type="text" name="nomor_ujian" class="form-control <?php echo($error_nomor_ujian !="" ? "is-invalid" : "");?>" 
      id="nomor_ujian" placeholder="Nomor ujian" value="<?php echo $nomor_ujian; ?>">
      <span class="warning" ><?php echo $error_nomor_ujian; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="paud" class="col-sm-2 col-form-label "> Apakah Pernah PAUD?</label>
    <div class="col-sm-10">
    <input type="radio" name="paud" value="Ya">Ya</label>
      <input type="radio" name="paud" value="Tidak">Tidak</label> 
      <span class="warning" ><?php echo $error_paud; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="tk" class="col-sm-2 col-form-label "> Apakah Pernah TK?</label>
    <div class="col-sm-10">
    <input type="radio" name="tk" value="Ya">Ya</label>
      <input type="radio" name="tk" value="Tidak">Tidak</label> 
      <span class="warning" ><?php echo $error_tk; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="skhun" class="col-sm-2 col-form-label ">No.Seri SKHUN Sebelumnya</label>
    <div class="col-sm-10">
      <input type="text" name="skhun" class="form-control <?php echo($error_skhun !="" ? "is-invalid" : "");?>" 
      id="skhun" placeholder="No.Seri SKHUN Sebelumnya" value="<?php echo $skhun; ?>">
      <span class="warning" ><?php echo $error_skhun; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="ijazah" class="col-sm-2 col-form-label ">No.Seri Ijazah Sebelumnya</label>
    <div class="col-sm-10">
      <input type="text" name="ijazah" class="form-control <?php echo($error_ijazah !="" ? "is-invalid" : "");?>" 
      id="ijazah" placeholder="No.Seri Ijazah Sebelumnya" value="<?php echo $ijazah; ?>">
      <span class="warning" ><?php echo $error_ijazah; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="hobi" class="col-sm-2 col-form-label "> Hobi </label>
    <div class="col-sm-10">
    <select name="hobi">
            <option value="Olahraga"> Olahraga </option>
            <option value="Kesenian"> Kesenian</option>
            <option value="Membaca"> Membaca</option>
            <option value="Menulis"> Menulis </option>
            <option value="Traveling"> Traveling </option>
            <option value="Lainnya"> Lainnya </option>
            </select>
      <span class="warning" ><?php echo $error_hobi; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="cita" class="col-sm-2 col-form-label "> Cita-Cita</label>
    <div class="col-sm-10">
    <select name="cita">
            <option value="PNS"> PNS </option>
            <option value="TNI/POLRI"> TNI/POLRI</option>
            <option value="Guru/Dosen"> Guru/Dosen</option>
            <option value="Dokter"> Dokter </option>
            <option value="Politikus"> Politikus </option>
            <option value="Wiraswasta"> Wiraswasta </option>
            <option value="Seni/Lukis/Artis/Sejenis"> Seni/Lukis/Artis/Sejenis </option>
            <option value="Lainnya"> Lainnya </option>
            </select>
      <span class="warning" ><?php echo $error_cita; ?></span>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
    <button type="submit" name="Submit" class="btn btn-primary" style="background-color:blue; color:black;">Submit</button>
     <button type="next" name="next" class="btn btn-primary" style="background-color:blue;"><a href="dataDiri.php" style="color:black;">Next</button>
    </div>
  </div>

    </form>
        </div> 
      </div>
    </div>
  </div>

  <?php 
  include("konek.php");

  if(isset($_POST['Submit'])) {
    $nis = $_POST['nis'];
    $jenispendaftaran = $_POST['jenispendaftaran'];
    $tanggal = $_POST['tanggal'];
    $nomor_ujian = $_POST['nomor_ujian'];
    $paud= $_POST['paud'];
    $tk = $_POST['tk'];
    $skhun = $_POST['skhun'];
    $ijazah = $_POST['ijazah'];
    $hobi = $_POST['hobi'];
    $cita = $_POST['cita'];
 

    $sql = "INSERT INTO peserta_didik (nis,jenispendaftaran,tanggal,nomor_ujian,paud,tk,skhun,ijazah,hobi,cita) VALUES ('$nis','$jenispendaftaran','$tanggal','$nomor_ujian','$paud','$tk','$skhun','$ijazah','$hobi','$cita')";
    $peserta = mysqli_query($conn, $sql);

        if ($peserta) {
          echo "Tambah data berhasil";
          exit;
        }
    else {
      echo "Gagal";
      exit;
    }
  }
  ?>

</body>
</html>