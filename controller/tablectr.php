<?php
require_once ("../display/LinkModelController.php");

session_start();

// Check if the form was submitted
if (isset($_POST['submit'])) {
    // Get the form data
    $id_jadwal = $_POST['id_jadwal'];
    $tanggal_keberangkatan = $_POST['tanggal_keberangkatan'];
    $maskapai = $_POST['maskapai'];
    $tanggal_pulang = $_POST['tanggal_pulang'];
    $id_formulir = $_SESSION['d2f6dcff06a7f867']; // tambahkan ini
  
    // Update the database with the new form data
    $formulir = new Formulir();
    $success = $formulir->InputJadwal($id_jadwal, $tanggal_keberangkatan, $maskapai, $tanggal_pulang, $id_formulir);
  
    // Handle the result of the update
    if ($success) {
        // Redirect the user to a success page
        header('Location: success.php');
        exit;
    } else {
        // Redirect the user to an error page
        header('Location: error.php');
        exit;
    }
} else {
    // Redirect the user to an error page
    header('Location: error.php');
    exit;
}
?>
