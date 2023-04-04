<?php
class TableJadwal extends Database{
  public function __construct() {
    $db = new Database;
    $this->conn = $db->conn;
  }

  // public function DataJadwal(){
  //   $sql = "SELECT f.id_formulir, f.tanggal_keberangkatan, f.maskapai, f.tanggal_pulang, j.id_jadwal, j.tanggal_keberangkatan, j.maskapai, j.tanggal_pulang FROM jadwal_perjalanan j INNER JOIN formulir f ON j.id_formulir = f.id_formulir";
  //   $result = $this->conn->query($sql);
  //   if($result->num_rows > 0){
  //   return $result;
  //   } else {
  //   return false;
  //   }
  //   }



  // public function DataJadwal($id_jadwal){
  //   $sql = "SELECT * FROM jadwal_perjalanan WHERE id_jadwal=?";
  //   $stmt = $this->conn->prepare($sql);
  //   $stmt->bind_param("i", $id_jadwal);
  //   $stmt->execute();
  //   $result = $stmt->get_result();
  //   if($result->num_rows > 0){
  //   return $result;
  //   } else {
  //   return false;
  //   }
  //   }

//   public function DataJadwal($selected_option){
//     $sql = "SELECT * FROM jadwal_perjalanan WHERE id_jadwal=?";
//     $stmt = $this->conn->prepare($sql);
//     $stmt->bind_param("i", $selected_option);
//     $stmt->execute();
//     $result = $stmt->get_result();
//     if($result->num_rows > 0){
//         return $result;
//     } else {
//         return false;
//     }
// }

// public function  DataJadwal(){
//   $sql = "SELECT jp.id_formulir, jp.tanggal_keberangkatan, jp.maskapai, jp.tanggal_pulang, f.tanggal_keberangkatan_formulir, f.maskapai_formulir, f.tanggal_pulang_formulir
//   FROM jadwal_perjalanan jp
//   INNER JOIN formulir f ON jp.id_formulir = f.id_formulir;
//   ";
//   $result = $this->conn->query($sql);
//   if($result->num_rows > 0){
//       return $result;
//   } else {
//       return false;
//   }
// }


  
  public function  DataJadwal(){
    $sql = "SELECT * FROM jadwal_perjalanan";
    $result = $this->conn->query($sql);
    if($result->num_rows > 0){
        return $result;
    } else {
        return false;
    }
}

// public function updateFormulir($id_formulir, $id_jadwal, $tanggal_keberangkatan, $maskapai, $tanggal_pulang){
//   $sql = "UPDATE formulir f INNER JOIN jadwal_perjalanan j ON f.id_formulir = j.id_formulir SET j.tanggal_keberangkatan=?, j.maskapai=?, j.tanggal_pulang=? WHERE f.id_formulir=? AND j.id_jadwal=?";
//   $stmt = $this->conn->prepare($sql);
//   $stmt->bind_param("sssis", $tanggal_keberangkatan, $maskapai, $tanggal_pulang, $id_formulir, $id_jadwal);
//   if($stmt->execute()){
//   return true;
//   } else {
//   return false;
//   }
//   }
  
// public function updateFormulir($id_formulir, $id_jadwal, $tanggal_keberangkatan, $maskapai, $tanggal_pulang){
//   $sql = "UPDATE formulir f INNER JOIN jadwal_perjalanan j ON f.id_formulir = j.id_formulir SET f.tanggal_keberangkatan_formulir=?, f.maskapai_formulir=?, f.tanggal_pulang_formulir=? WHERE f.id_formulir=? AND f.id_jadwal_formulir=?";
//   $stmt = $this->conn->prepare($sql);
//   $stmt->bind_param("sssii", $tanggal_keberangkatan, $maskapai, $tanggal_pulang, $id_formulir,$id_jadwal);
//   if($stmt->execute()){
//       return true;
//   } else {
//       return false;
//   }
// }





public function updateFormulir($id_formulir, $id_jadwal, $tanggal_keberangkatan, $maskapai, $tanggal_pulang){
    $sql = "UPDATE formulir SET id_jadwal_formulir=?, tanggal_keberangkatan_formulir=?, maskapai_formulir=?, tanggal_pulang_formulir=? WHERE id_formulir=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("isssi", $id_jadwal, $tanggal_keberangkatan, $maskapai, $tanggal_pulang, $id_formulir);
    if($stmt->execute()){
        return true;
    } else {
        return false;
    }
  }


  // public function DataJadwal(){
  //   $userQuery = "SELECT * FROM jadwal_perjalanan";
  //   $result = $this->conn->query($userQuery);
  //   if($result->num_rows > 0){
  //       return $result; 
  //   } else {
  //       return false;
  //   }

  // }

  
  // public function updateFormulir($id_formulir ,$tanggal_keberangkatan, $maskapai, $tanggal_pulang){
  //   $sql = "UPDATE formulir SET tanggal_keberangkatan_formulir=?, maskapai_formulir=?, tanggal_pulang_formulir=? WHERE id_formulir = ?";
  //   $stmt = $this->conn->prepare($sql);
  //   $stmt->bind_param("sssi", $tanggal_keberangkatan, $maskapai, $tanggal_pulang, $id_formulir);
  //   if ($stmt->execute()) {
  //     return true;
  //   } else {
  //     return false;
  //   }
  // }

 

  

  

}