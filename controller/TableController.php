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

  //   public function GetAllJadwal($selected_option){
  //     $jadwal = $this->model->DataJadwal($selected_option);
  //     return $jadwal;
  // }
    

  public function handleForm($id_jadwal) {
    if(isset($_POST['submit'])){
  
      $conn = mysqli_connect("localhost","root","","db_haji_umroh") ;
      $id_jadwal = $_POST['id_jadwal'];
      $sql = "SELECT * FROM jadwal_perjalanan WHERE id_jadwal=$id_jadwal";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $tanggal_keberangkatan = $row['tanggal_keberangkatan'];
          $maskapai = $row['maskapai'];
          $tanggal_pulang = $row['tanggal_pulang'];
        }
      }
  
      $id_formulir = $_POST['id_formulir'];
      $id_jadwal = $_POST['id_jadwal'];
  
      // Check if the id_jadwal field is empty
      if(empty($id_jadwal)) {
        echo "Anda harus memilih jadwal terlebih dahulu";
        return;
      }
  
      $update = $this->model->updateFormulir($id_formulir, $id_jadwal, $tanggal_keberangkatan, $maskapai, $tanggal_pulang);
      if($update){
        echo "Data berhasil diupdate";
      } else {
        echo "Data gagal diupdate";
      }
    }
  }
  
  
    // public function updateJadwal($id_jadwal,$id_formulir,  $tanggal_keberangkatan, $maskapai, $tanggal_pulang) {
    //     $success = $this->model->updateFormulir($id_jadwal, $id_formulir, $tanggal_keberangkatan, $maskapai, $tanggal_pulang);
    //     return $success;
    // }

}