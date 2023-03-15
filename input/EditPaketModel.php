<?php
class EditPaketModel extends Database{

public function __construct()
{
    $db = new Database();
    $this->conn = $db->conn;
}



public function getGambar()
{
    $result = mysqli_query($this->conn, "SELECT * FROM gambarpaket");
    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


public function updateGambar($id, $gambar_lama, $gambar_baru, $temp_file)
{
    // cek apakah file gambar baru telah di-upload
    if (!empty($gambar_baru)) {
        // hapus file gambar lama
        unlink("../../../core/GambarPaket/" . $gambar_lama);

        // upload file gambar baru ke folder upload
        move_uploaded_file($temp_file, "../../../core/GambarPaket/" . $gambar_baru);
    } else {
        // jika tidak ada file gambar baru yang di-upload, gunakan nama file gambar lama
        $gambar_baru = $gambar_lama;
    }

    // update data gambar pada tabel homegambar
    $sql = "UPDATE gambarpaket SET gambar='$gambar_baru' WHERE id='$id'";

    if (mysqli_query($this->conn, $sql)) {
        return true;
    } else {
        return false;
    }
}



}