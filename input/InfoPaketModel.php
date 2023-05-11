<?php
class InfoPaketModel extends Database{
    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->conn;
    }
    public function ByIdFoto($id) {
        $result = mysqli_query($this->conn, "SELECT foto_paket FROM info_paket WHERE id='$id'");
        $row = mysqli_fetch_assoc($result);
        return $row['foto_paket']; // Mengembalikan path atau lokasi file gambar
    }

   
    
}