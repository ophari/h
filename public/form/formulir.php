<?php
session_start()
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form action="../../apps/init.php" method="post">
        	<h1>Formulir</h1>

        <label for="">Pilih Program</label>

        <select name="program" id="program" >
            <option value="..">..</option>
            <option value="Umroh Reguler">Umroh Reguler</option>
            <option value="Umroh Plus">Umroh Plus</option>
            <option value="custom">custom</option>
        </select>

        <label for="">kamar</label>

        <select name="kamar" id="">
            <option value="..">..</option>
            <option value="Quad">Quad</option>
            <option value="Trile">Trile</option>
            <option value="Double">Double</option>
        </select>
        <label for="">Biodata Diri</label>
        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
        <br>
        <input type="text" name="nik" placeholder="nik">
        <br>
        <input type="text" name="nama_ayah_kandung" id="nama_ayah_kandung" placeholder="Nama Ayah Kandung" required>
        <br>
        <input type="text" name="temat_lahir" placeholder="Tempat Lahir" required>
        <br>
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" required>
        <br>
        <input type="text" name="no_paspor" id="" placeholder="No Paspor" >
        <br>
        <input type="text" name="tempat_dikeluarkan_paspor" placeholder="Tempat Dikeluarkan Paspor">
        <br>
        <label for="tanggal_dikeluarkan_paspor">Tanggal Dikeluarkan Paspor</label>
        <input type="date" name="tanggal_dikeluarkan_paspor" placeholder="Masa Berlaku Paspor" >
        <br>
        <label for="masa_berlaku_paspor">Masa Berlaku Paspor</label>
        <input type="date" name="masa_berlaku_paspor" id="masa_berlaku_paspor">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="..">..</option>
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option>
        </select>
        <br>
        <label for="golongan_darah">Golongan Darah</label>
        <select name="golongan_darah" id="golongan_darah">
            <option value="..">..</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
        </select>
        <br>
        <input type="text" name="status_perkawinan" placeholder="Status Perkawinan" required><br>

              
          <label for="provinsi">Provinsi:</label>
          <select name="provinsi" id="provinsi">
            <option value="">Pilih</option>
          </select>

          <label for="kota">Kota/Kabupaten:</label>
          <select name="kota_kabupaten" id="kota">
            <option value="">Pilih</option>
          </select>

          <label for="kec">Kecamatan:</label>
          <select name="kecamatan" id="kec">
            <option value="">Pilih</option>
          </select>

        <label for="kel">Kelurahan:</label>
        <select name="kelurahan" id="kel">
          <option value="">Pilih</option>
        </select>
          <br>
          <input type="text" name="kode_pos" placeholder="Kode Pos" required><br>
          <br>
          <textarea name="jalan" id="" cols="30" rows="10" placeholder="Nama Jalan" required></textarea>
          <br>
          <input type="email" style="width: 500px; padding: 12px 20px; margin: 8px 0; box-sizing: border-box; border: 2px solid #ccc; border-radius: 4px;" name="email" placeholder="Email" required>
          <br>
          <input type="text" name="no_telp_rumah" id="" placeholder="No Telphone Rumah" required>
          <br>
          <input type="text" name="no_telp_seluler" placeholder="No Telp Seluler" required>
          <br>
          <label for="Pendidikan Terakhir">Pendidikan_Terakhir</label>
          <select name="pendidikan_terakhir" id="pendidikan_terakhir">
            <option value="">..</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="D3/D4/S1/S2/S3">D3/D4/S1/S2/S3</option>
          </select>
          <br>
          <input type="text" name="pekerjaan" placeholder="Pekerjaan" required>
          <br>
          <div class="keluarga_yg_ikut_umroh">
            <label for="">Keluarga Yang Ikut Umroh</label>
            <input type="text" name="keluarga_yg_ikut" placeholder="Nama Keluarga Yang Ikut">
            <br>
            <input type="text" name="hubungan" placeholder="Hubungan">
            <br>
            <input type="text" name="no_telp" placeholder="No Telp">
          </div>
          <label for="informasi_pendaftaran">Informasi Pendaftaran</label><br>
          <textarea name="informasi_pendaftaran" id="" cols="30" rows="10" placeholder="Tidak Wajib Diisi"></textarea>
            <br>
            <label for="penyakit_kronis">Penyakit Kronis</label>
           <input type="text" name="penyakit_kronis" id="penyakit_kronis" placeholder="Jika tidak Memiliki Tidak Harus Diisi">
           <br>
           <div class="ketika_darurat">
            <label for="">Keluarga Yang Dapat Dihubungi Ketika Darurat</label>
            <input type="text" name="keluarga_yg_bisa_dihubungi" placeholder="Nama Keluarga Yang Bisa ">
            <input type="text" name="hubungan_keluarga" placeholder="Hubungan Keluarga">
            <input type="text" name="no_telp_keluarga" placeholder="No Telpn Keluarga">
            <label for="foto">Upload Foto</label>
            <input type="file" name="foto" id="foto" placeholder="upload">
          </div>
          <br>
          <button type="submit">Kirim</button>
    </form>
    <script src="../../apps/api/lokasi.js"></script>
</body>
</html>