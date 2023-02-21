<?php
session_start();
require_once "../models/FormulirModel.php";
   // Mendapatkan data dari form
   if (isset($_POST['submit'])) {
        // $id_users = $_SESSION['id_users'];
        $program = $_POST['program'] ?? array(); // inisialisasi dengan array kosong jika tipe tidak terdefinisi
        foreach ($program as $value) {
            if ($value == '1') {
              // Checkbox reguler dipilih
              // Lakukan sesuatu, misalnya:
              $_POST['program'] = 'Umroh Reguler';
            }
            if ($value == '2') {
              // Checkbox plus dipilih
              // Lakukan sesuatu, misalnya:
              $_POST['program'] = 'Umroh Plus';
            }
    }
    $kamar = $_POST['kamar'] ?? array(); // inisialisasi dengan array kosong jika kamar tidak terdefinisi

    foreach ($kamar as $value) {
      if ($value == '1') {
        // Checkbox quad dipilih
        // Lakukan sesuatu, misalnya:
        $_POST['kamar'] = 'Quad';
      }
      if ($value == '2') {
        // Checkbox triple dipilih
        // Lakukan sesuatu, misalnya:
        $_POST['kamar'] = 'Triple';
      }
      if ($value == '3') {
        // Checkbox double dipilih
        // Lakukan sesuatu, misalnya:
        $_POST['kamar'] = 'Double';
      }
    }
    
        
        $nama_lengkap = $_POST['nama_lengkap'];
        $nik = $_POST['nik'];
        $nama_ayah_kandung = $_POST['nama_ayah_kandung'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $no_paspor = $_POST['no_paspor'];
        $tempat_dikeluarkan_paspor = $_POST['tempat_dikeluarkan_paspor'];
        $tanggal_dikeluarkan_paspor = $_POST['tanggal_dikeluarkan_paspor'];
        $masa_berlaku_paspor = $_POST['masa_berlaku_paspor'];
        $jenis_kelamin = $_POST['jenis_kelamin'] ?? array();

        foreach ($jenis_kelamin as $value) {
        if ($value == '1') {
            // Checkbox pria dipilih
            // Lakukan sesuatu, misalnya:
            $_POST['jenis_kelamin'] = 'laki-laki';
        }
        if ($value == '2') {
            // Checkbox wanita dipilih
            // Lakukan sesuatu, misalnya:
            $_POST['jenis_kelamin'] = 'perempuan';
        }
        }

        $golongan_darah = $_POST['golongan_darah'];
        $status_perkawinan = $_POST['status_perkawinan'];
        $provinsi = $_POST['provinsi'];
        $kota_kabupaten = $_POST['kota_kabupaten'];
        $kecamatan = $_POST['kecamatan'];
        $kelurahan = $_POST['kelurahan'];
        $jalan = $_POST['jalan'];
        $email = $_POST['email'];
        $no_telp_rumah = $_POST['no_telp_rumah'];
        $no_telp_seluler = $_POST['no_telp_seluler'];

        $pendidikan_terakhir = $_POST['pendidikan_terakhir'] ?? array(); // inisialisasi dengan array kosong jika pendidikan tidak terdefinisi

        foreach ($pendidikan_terakhir as $value) {
        if ($value == '1') {
            // Checkbox SD/Sederajat dipilih
            // Lakukan sesuatu, misalnya:
            $_POST['pendidikan_terakhir'] = 'SD';
        }
        if ($value == '2') {
            // Checkbox SMP/Sederajat dipilih
            // Lakukan sesuatu, misalnya:
            $_POST['pendidikan_terakhir'] = 'SMP';
        }
        if ($value == '3') {
            // Checkbox SMA/Sederajat dipilih
            // Lakukan sesuatu, misalnya:
            $_POST['pendidikan_terakhir'] = 'SMA';
        }
        if ($value == '4') {
            // Checkbox S1/Sederajat/Lebih dipilih
            // Lakukan sesuatu, misalnya:
            $_POST['pendidikan_terakhir'] = 'D3/D4/S1/S2/S3';
        }
        }

        $pekerjaan = $_POST['pekerjaan'];
        $keluarga_yg_ikut = $_POST['keluarga_yg_ikut'];
        $hubungan = $_POST['hubungan'];
        $no_telp = $_POST['no_telp'];
        $informasi_pendaftaran = $_POST['informasi_pendaftaran'];
        $penyakit_kronis = $_POST['penyakit_kronis'];
        $keluarga_yg_bisa_dihubungi = $_POST['keluarga_yg_bisa_dihubungi'];
        $hubungan_keluarga = $_POST['hubungan_keluarga'];
        $no_telp_keluarga = $_POST['no_telp_keluarga'];
        $foto = $_FILES['foto'];
       
        
    $formulir = new Formulir( $program, $kamar, $nama_lengkap, $nik, $nama_ayah_kandung, $tempat_lahir, $tanggal_lahir, $no_paspor, $tempat_dikeluarkan_paspor, $tanggal_dikeluarkan_paspor, $masa_berlaku_paspor, $jenis_kelamin, $golongan_darah, $status_perkawinan, $provinsi, $kota_kabupaten, $kecamatan, $kelurahan, $jalan, $email, $no_telp_rumah, $no_telp_seluler, $pendidikan_terakhir, $pekerjaan, $keluarga_yg_ikut, $hubungan, $no_telp, $informasi_pendaftaran, $penyakit_kronis, $keluarga_yg_bisa_dihubungi, $hubungan_keluarga, $no_telp_keluarga, $foto);
    if($formulir->Tambah_data()){
        echo "<script>alert('Berhasil registrasi, silakan login');window.location='../apps/views/pendaftaran.html';</script>";
    }

   }



      