<?php
class TableController extends TableJadwal{
    private $model;
    public function __construct()
    {
        $this->model= new TableJadwal();
    }

    public function GetAllJadwal(){
      $jadwal = $this->model->DataJadwal();
      return $jadwal;
      }

  public function handleForm() {
    if(isset($_POST['submit'])){
      
      $id_jadwal = $_POST['id_jadwal'];
      $jadwal = $this->model->getJadwalPerjalananById($id_jadwal);
      
      if ($jadwal == null) {
        echo "Jadwal tidak ditemukan";
        return;
      }
  
      $id_formulir = $_POST['id_formulir'];
      $tanggal_keberangkatan = $_POST['tanggal_keberangkatan'];
      $tanggal_pulang = $_POST['tanggal_pulang'];
      $maskapai = $_POST['maskapai'];
      $mekah = $_POST['mekah'];
      $madinah = $_POST['madinah'];
     
      $update = $this->model->updateFormulir($id_formulir, $id_jadwal, $tanggal_keberangkatan, $tanggal_pulang,  $maskapai, $mekah, $madinah);
      if($update){
        echo "<script>alert('Jadwal keberangkatan berhasil dipilih');window.location='form_pembayaran.html';</script>";
      } else {
        echo "<script>alert('Kouta sudah penuh. Jadwal keberangkatan gagal dipilih');</script>";
      }
      
    }
  }
  
  
    
}