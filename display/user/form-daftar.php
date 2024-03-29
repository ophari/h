<?php
session_start();
    if(!isset($_SESSION['id_users'])) {
      echo "<script>alert('Anda harus login terlebih dahulu');window.location='../user/login.php';</script>";
      exit;
  }
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $_SESSION['id_formulir'] = $id_formulir;
  
    
  }
  $username = isset($_SESSION['username']) ? $_SESSION['username'] :  '<li class="list-item"><a class="login" href="login.php">Login/Daftar</a><</li>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="../../core/style/Formulir.css"/>
    <link rel="stylesheet" href="../../core/style/AdminWelcome.css">
   
</head>
<body> 
<nav class="sidebar">
        <img class="user-logo" src="../../core/asset/icon-user.png" href="welcome.html">
            <ul class="nav-list">
           
                <li class="list-item"><a class="login" href="#"><?php echo $username; ?></a></li>
                <li class="list-item"><a class="fa" href="display/user/register.php">Daftar</a></li>
                <li class="list-item"><a class="fa" href="galeri.php">Galeri</a></li>
                <li class="list-item"><a class="fa" href="kontak.html">Kontak</a></li>
                <li class="list-item"><a class="fa" href="pendaftaran.php">Daftar Haji & Umroh</a></li>
                <div class="TentangLogout">
                <li class="list-item"><a class="fa tentang-kami" href="core/tentang-kami.html">Tentang Kami</a></li>
                <li class="list-item"><a id="logout-link" class="logout" href="../../controller/logout.php">Logout</a></li>
                </div>
              </ul>
        </nav>
        <nav class="wrapper">
          <a href="../../index.php"><img class="img-logo" src="../../core/asset/LogoItkontamaTravelOrange2022.png" alt="Logo-icon"></a>
            <button class="hamburger">
                <div class="bar"></div>
            </button>
        </nav>
    <main>
    <div class="hContainer daftar">
      
        <form class="form" action="../../controller/FormlirController.php" method="post" enctype="multipart/form-data">
              <h1 class="heading">Formulir Pendaftaran</h1>
            <h3>Program :</h3>
           
            <label for="reguler">
            <input type="radio" id="reguler" name="program" value="1" required>Umroh Reguler</label>
            <label for="plus">
            <input type="radio" id="plus" name="program" value="2">Umroh Plus</label>
            <br>
            <label for="quad">
            <input type="radio" id="quad" name="kamar" value="4" required>Quad</label>
           
            <label for="triple">
            <input type="radio" id="triple" name="kamar" value="3">Triple</label>
           
            <label for="double">
            <input type="radio" id="double" name="kamar" value="2">Double</label>
           
            <br><br>
            <div class="field field_v1">
            <label for="nik" class="ha-screen-reader">Nama Lengkap</label><br>
            <input type="text" name="nama_lengkap" id="nama" class="field__input" placeholder="Isikan nama lengkap anda" required>
          
             
            </div>
            <br><br>
            <div class="field field_v1">
            <label for="nik" class="ha-screen-reader">NIK</label><br>
            <input type="txt" name="nik" id="nik" class="field__input" placeholder="Nomor kartu penduduk anda" pattern="\d*" required>
            </div>
            <br><br>
            <div class="field field_v1">
                <label for="ayah" class="ha-screen-reader">Nama Ayah Kandung</label><br>
                <input type="txt" name="nama_ayah_kandung" id="ayah" class="field__input" placeholder="Masukkan nama lengkap ayah anda" required>
                </div>
            <br><br>
            <div class="field field_v1">
                <label for="lahir" class="ha-screen-reader">Tempat Lahir</label><br>
                <input type="txt" name="tempat_lahir" id="lahir" class="field__input" placeholder="Tempat lahir anda" required>
                </div>
            <br><br>

            <div class="tanggal">
              <label for="dateofbirth" class="za-lahir">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" id="dateofbirth" class="tanggal-input" required>
              </div>
              <br>

              <div class="field field_v1">
                <label for="passport" class="ha-screen-reader">Nomor Passport </label><br>
                <input type="txt" name="no_paspor" id="passport" class="field__input" placeholder="Masukkan nomor passport">
                </div>
            <br><br>

            <div class="field field_v1">
              <label for="tmpt-passport" class="ha-screen-reader">Tempat Dikeluarkan Passport (tidak wajib jika tidak punya)</label><br>
              <input type="txt" name="tempat_dikeluarkan_paspor" id="tmpt-passport" class="field__input" placeholder="Masukkan tempat dikeluarkan passport anda">
              
            </div>
          <br><br>
          <div class="tanggal">
            <label for="tgl-passport" class="za-lahir">Tanggal Dikeluarkan Passport <span>(tidak wajib jika tidak punya)</span></label><br><br>
            <input type="date" name="tanggal_dikeluarkan_paspor" id="tgl-passport" class="tanggal-input">
            </div>
            <br>

            <div class="tanggal">
              <label for="ms-passport" class="za-lahir">Masa Berlaku Passport <span>(tidak wajib jika tidak punya)</span></label><br>
              <input type="date" name="masa_berlaku_paspor" id="ms-passport" class="tanggal-input">
            
              </div>
              <br>
              <h3>Jenis Kelamin :</h3>
             
              <label for="pria">
              <input type="radio" id="pria" name="jenis_kelamin" value="1" required>Pria</label>
              <label for="wanita">
              <input type="radio" id="wanita" name="jenis_kelamin" value="2">Wanita</label>
              <br><br>
              <div class="goldar">
                <label for="bloodType"></label>
                <select id="bloodType" name="golongan_darah" required>
                  <option value="" selected>-- Pilih Golongan Darah --</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="AB">AB</option>
                  <option value="O">O</option>
                </select>
              </div>
             
              <br>
              <div class="goldar">
                <label for="bloodType"></label>
                <select id="bloodType" name="status_perkawinan" required>
                  <option value="" selected>-- Status Pernikahan --</option>
                  <option value="sudah">Sudah Menikah</option>
                  <option value="Pernah">Pernah Menikah</option>
                  <option value="belum">Belum Menikah</option>
                </select>
              </div>
             
              <br>
              <div class="goldar">
                <label for="dataOption"></label>
                <select id="provinsi" name="provinsi" required></select>
                <option value=""></option>
                </div>
               
                <br>
                <div class="goldar">
                <label for="dataOption"></label>
                <select id="kota" name="kota_kabupaten" required></select>
                <option value=""></option>
                </div>
               
                <br>
                <div class="goldar">
                <label for="dataOption" ></label>
                <select id="kec" name="kecamatan" required></select>
                <option value=""></option>
                </div>
               
                <br>
                <div class="goldar">
                <label for="dataOption"></label>
                <select id="kel" name="kelurahan" required></select>
                <option value=""></option>
              </div>
             
              <br>
              <div class="field field_v1">
                <label for="jalan" class="ha-screen-reader">Jalan</label><br>
                <input type="txt" name="jalan" id="jalan" class="field__input" placeholder="Masukkan jalan tempat tinggal anda" required>
               
                </div>
                <br><br>
                <div class="field field_v1">
                  <label for="email" class="ha-screen-reader">Email</label><br>
                  <input type="email" name="email" id="email" class="field__input" placeholder="Masukkan Email anda" onchange="this.value = this.value.toLowerCase();" required>
                  
                  </div>
                  <br><br>
                  <div class="field field_v1">
                    <label for="no_telp_rumah" class="ha-screen-reader">No Telpon Rumah</label><br>
                    <input type="txt" name="no_telp_rumah" id="no_telp_rumah" class="field__input" placeholder="Nomor telpon rumah anda" pattern="\d*" required>
                    
                    </div>
                    <br><br>
                    <div class="field field_v1">
                      <label for="no_telp_seluler" class="ha-screen-reader">No Telpon Seluler</label><br>
                      <input type="txt" name="no_telp_seluler" id="no_telp_seluler" class="field__input" placeholder="Nomor telpon seluler anda" pattern="\d*" required>
                    
                      </div>
                      <br><br>
                      <div class="pendidikan">
                      <h3>Pendidikan Terakhir :</h3>
                     
                      <label for="sd">
                      <input class="Ipendidikan" type="radio" id="sd" name="pendidikan_terakhir" value="1" required>SD/Sederajat</label>
                      <label for="smp">
                      <input type="radio" id="smp" name="pendidikan_terakhir" value="2">SMP/Sederajat</label>
                      <label for="sma">
                      <input type="radio" id="sma" name="pendidikan_terakhir" value="3">SMA/Sederajat</label>
                      <label for="s1">
                      <input type="radio" id="s1" name="pendidikan_terakhir" value="4">S1/Sederajat/Lebih</label>
                      <br><br>
                      </div>

                      <div class="field field_v1">
                        <label for="pekerjaan" class="ha-screen-reader">Pekerjaan</label><br>
                        <input type="txt" name="pekerjaan" id="pekerjaan" class="field__input" placeholder="Masukkan pekerjaan anda" required>
                       
                        </div>
                        <br><br>
                        <div class="field field_v1">
                          <label for="keluarga_yg_ikut" class="ha-screen-reader">Keluarga Yang Ikut <span>(tidak wajib)</span></label><br>
                          <input type="txt" name="keluarga_yg_ikut" id="keluarga_yg_ikut" class="field__input" placeholder="Keluarga Yang Ikut">
                          </div>
                          <br><br>

                          <div class="field field_v1">
                            <label for="hubungan" class="ha-screen-reader">Hubungan <span>(tidak wajib jika tidak ikut)</span></label><br>
                            <input type="txt" name="hubungan" id="hubungan" class="field__input" placeholder="Hubungan">
                            </div>
                            <br><br>
                            
                            <div class="field field_v1">
                              <label for="no_telp" class="ha-screen-reader">No Telpon Keluarga Yang Ikut <span>(tidak wajib jika tidak ikut)</span></label><br>
                              <input type="txt" name="no_telp" id="no_telp_seluler" class="field__input" placeholder="Nomor telpon keluarga yang ikut" pattern="\d*">
                              </div>
                              <br><br>

                              <div class="field field_v1">
                                <label for="informasi_pendaftaran" class="ha-screen-reader">Informasi Pendaftaran (Refferal) <span class="name">(tidak wajib)</span></label><br>
                                <input type="txt" name="informasi_pendaftaran" id="informasi_pendaftaran" class="field__input" placeholder="Masukkan nama orang yang mengajak anda untuk daftar di Itkontama Travel">
                      
                              </div>
                            <br><br>

                            <div class="field field_v1">
                              <label for="penyakit_kronis" class="ha-screen-reader">Penyakit Kronis <span class="name">(jika punya)</span></label><br>
                              <input type="txt" name="penyakit_kronis" id="penyakit_kronis" class="field__input" placeholder="Masukkan jika punya">
                             
                              </div>
                              <br><br>
                              <div class="field field_v1">
                                <label for="keluarga_yg_bisa_dihubungi" class="ha-screen-reader">Keluarga Yang Bisa Dihubungi Ketika Darurat <span class="name">(Keluarga Yang Bisa Dihubungi Ketika Darurat)</span></label><br>
                                <input type="txt" name="keluarga_yg_bisa_dihubungi" id="keluarga_yg_bisa_dihubungi" class="field__input" placeholder="Nama keluarga yang bisa dihubungi" required>
                               
                                </div>
                                <br><br>
                                <div class="field field_v1">
                                  <label for="hubungan_keluarga" class="ha-screen-reader">Hubungan Keluarga Yang Bisa Dihubungi Ketika Darurat  <span class="name">(Keluarga Yang Bisa Dihubungi Ketika Darurat)</span></label><br>
                                  <input type="txt" name="hubungan_keluarga" id="hubungan_keluarga" class="field__input" placeholder="Hubungan keluarga yang bisa dihubungi" required>
                                
                                  </div>
                                  <br><br>

                                <div class="field field_v1">
                                  <label for="no_telp_keluarga" class="ha-screen-reader">No Telpon Keluarga Yang Bisa Dihubungi Ketika Darurat  <span class="name">(No Telpon Keluarga Yang Bisa Dihubungi Ketika Darurat)</span></label><br>
                                  <input type="txt" name="no_telp_keluarga" id="no_telp_keluarga" class="field__input" placeholder="Nomor keluarga yang bisa dihubungi" required>
                                 
                                  </div>
                                  <br><br><br>
                                  <label for="file"></label>
                                  <span>Foto 3X4 :</span>
                                 
                                  <input type="file" id="file" name="foto" class="file-input" accept="image/*">
                                 
                                  <a href="table_jadwal.html"><button href="table_jadwal.html" class="kirim tombol" type="submit"  name ="submit" value="submit">Kirim</button></a>
        </form>
        <a href="pendaftaran.html"><button class="bBtn tombol">Kembali</button></a>
    </div>
</main>


<script src="../../core/script/script.js"></script>
<script src="../../core/script/api/wilayah.js"></script>
</body>
</html>
