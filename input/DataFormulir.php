<?php
class TableJadwal extends Database{
  
  public function __construct() {
    $db = new Database;
    $this->conn = $db->conn;
  }

  

  
  public function  DataJadwal(){
    $sql = "SELECT * FROM jadwal_perjalanan";
    $result = $this->conn->query($sql);
    if($result->num_rows > 0){
        return $result;
    } else {
        return false;
    }
}




public function getJadwalPerjalananById($id_jadwal) {
  $sql = "SELECT * FROM jadwal_perjalanan WHERE id_jadwal='$id_jadwal'";
  $result = $this->conn->query($sql);
  if ($result->num_rows > 0) {
    return $result->fetch_assoc();
  } else {
    return null;
  }
}




// public function updateFormulir($id_formulir, $id_jadwal, $tanggal_keberangkatan, $tanggal_pulang, $maskapai, $mekah, $madinah, $old_jadwal = null){
//   $new_jadwal = $this->getJadwalPerjalananById($id_jadwal);
//   $sql = "UPDATE formulir SET id_jadwal_formulir=?, tanggal_keberangkatan_formulir=?,tanggal_pulang_formulir=?, maskapai_formulir=?, mekah_formulir =?, madinah_formulir=?  WHERE id_formulir=?";
//   $stmt = $this->conn->prepare($sql);
//   $stmt->bind_param("isssssi", $id_jadwal, $tanggal_keberangkatan, $tanggal_pulang, $maskapai, $mekah, $madinah, $id_formulir);
//   if($stmt->execute()){
//     if($old_jadwal != null){
//       $old_jadwal = $this->getJadwalPerjalananById($old_jadwal);
//       $old_sisa_kursi = $old_jadwal['sisa_kursi'];
//       $new_sisa_kursi = $new_jadwal['sisa_kursi'];
//       if($old_sisa_kursi != $new_sisa_kursi){
//         $old_sisa_kursi++;
//         $new_sisa_kursi--;
//         $this->updateSisaKursiJadwal($old_jadwal['id_jadwal'], $old_sisa_kursi);
//         $this->updateSisaKursiJadwal($new_jadwal['id_jadwal'], $new_sisa_kursi);
//       }
//     } else {
//       $new_sisa_kursi = $new_jadwal['sisa_kursi'];
//       $new_sisa_kursi--;
//       $this->updateSisaKursiJadwal($new_jadwal['id_jadwal'], $new_sisa_kursi);
//     }
//     return true;
//   } else {
//     return false;
//   }
// }

public function updateFormulir($id_formulir, $id_jadwal, $tanggal_keberangkatan, $tanggal_pulang, $maskapai, $mekah, $madinah, $old_jadwal = null){
  $new_jadwal = $this->getJadwalPerjalananById($id_jadwal);
  $sql = "UPDATE formulir SET id_jadwal_formulir=?, tanggal_keberangkatan_formulir=?,tanggal_pulang_formulir=?, maskapai_formulir=?, mekah_formulir =?, madinah_formulir=?  WHERE id_formulir=?";
  $stmt = $this->conn->prepare($sql);
  $stmt->bind_param("isssssi", $id_jadwal, $tanggal_keberangkatan, $tanggal_pulang, $maskapai, $mekah, $madinah, $id_formulir);
  if($stmt->execute()){
    if($old_jadwal != null){
      $old_jadwal = $this->getJadwalPerjalananById($old_jadwal);
      $old_sisa_kursi = $old_jadwal['sisa_kursi'];
      $new_sisa_kursi = $new_jadwal['sisa_kursi'];
      if($old_sisa_kursi != $new_sisa_kursi){
        $old_sisa_kursi++;
        $new_sisa_kursi--;
        $this->updateSisaKursiJadwal($old_jadwal['id_jadwal'], $old_sisa_kursi);
        $this->updateSisaKursiJadwal($new_jadwal['id_jadwal'], $new_sisa_kursi);
      } else {
        $old_sisa_kursi++;
        $this->updateSisaKursiJadwal($old_jadwal['id_jadwal'], $old_sisa_kursi);
      }
    } else {
      $new_sisa_kursi = $new_jadwal['sisa_kursi'];
      $new_sisa_kursi--;
      $this->updateSisaKursiJadwal($new_jadwal['id_jadwal'], $new_sisa_kursi);
    }
    return true;
  } else {
    return false;
  }
}


public function getIdpembayaran($id_pembayaran) {
    $sql = "SELECT * FROM form_pembayaran WHERE id_pembayaran='$id_pembayaran'";
    $result = $this->conn->query($sql);
    if ($result->num_rows > 0) {
      return $result->fetch_assoc();
    } else {
      return null;
    }
  }


public function updateSisaKursiJadwal($id_jadwal, $sisa_kursi){
  $sql = "UPDATE jadwal_perjalanan SET sisa_kursi=? WHERE id_jadwal=?";
  $stmt = $this->conn->prepare($sql);
  $stmt->bind_param("ii", $sisa_kursi, $id_jadwal);
  if($stmt->execute()){
    return true;
  } else {
    return false;
  }
}


public function updatePembayaranFormulir($id_formulir, $id_pembayaran, $bukti_pembayaran){
  $sql = "UPDATE formulir SET id_pembayaran_formulir=?, bukti_pembayaran =? WHERE id_formulir=?";
  $stmt = $this->conn->prepare($sql);
  $stmt->bind_param("isi", $id_pembayaran, $bukti_pembayaran, $id_formulir);
  if($stmt->execute()){
      return true;
  } else {
      return false;
  }
}

public function DataBank(){
$sql = "SELECT * FROM form_pembayaran";
$result = $this->conn->query($sql);
if($result->num_rows > 0){
    return $result; 
} else {
    return false;
}
}


}


