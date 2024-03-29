<?php
include('../../../connection.php');
include_once('../../../input/DashboardModel.php');
include_once('../../../input/ProfileModel.php');
session_start();
if(!isset($_SESSION['id_users']) || $_SESSION['level'] != 'admin') {
  echo "<script>alert('Anda harus login terlebih dahulu');window.location='../../display/user/login.php';</script>";
  exit;
}
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="../../../core/style/dasboard.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>
</head>
<body>
    <main>
    <div class="hContainer profile">
        <div class="pContainer">
            <div class="horizontal"></div>
            <h1>Dashboard Admin</h1>
            <?php
                                        $users = new admin();
                                        $id_users = $_GET['id_users'] ?? null; 
                                        if (isset($_GET['delete'])) {
                                          $id_users = $_GET['delete'];
                                          $delete = $users->deleteUser($id_users);
                                      
                                          // Redirect to the same page after deleting the user
                                          header("Location: dashboard.php");
                                          exit;
                                      }
                                      
                                        $result = $users->getData();
                                        if($result)
                                        {
                                            foreach($result as $row){
                                            if($row['level'] === 'admin') {
                                            ?>
                <div class="parent-element">
                  <div class="block">
                    <div class="hb">
                        <h3><?= $row['username']; ?></h3>
                        <p><?= $row['email']; ?></p>
                    </div>
                     <a href="dashboard_user.php?id_users=<?php echo $row['id_users']; ?>">
                        <button class="tnm tnm-4">
                          <p>Data/Pembayaran</p>
                        </button>
                    </a>
                    </div>
    </div>
                    <?php
        } else { 
          ?>
          <div class="parent-element">
                  <div class="block">
                    <div class="hb">
                        <h3><?= $row['username']; ?></h3>
                        <p><?= $row['email']; ?></p>
                    </div>
                     <a href="dashboard_user.php?id_users=<?php echo $row['id_users']; ?>">
                        <button class="tnm tnm-1">
                          <p>Data/Pembayaran</p>
                        </button>
                    </a>
                    <a href="dashboard.php?delete=<?= $row['id_users']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus?')">
                      <button class="tnm tnm-2">
                        <p>Hapus</p>
                      </button>
                    </a>
                </div>
                </div>
                <a href="table_jadwal_admin.php"><button class="tnm tnm-5"><p>Table Jadwal</p></button></a> 
                <a href = "EditPaket.php"><button class="tnm tnm-8" ><p>Input Paket</p></button>
                <a href = "form_pembayaran_admin.php"><button class="tnm tnm-9" ><p>Edit Pembayaran</p></button>
                <?php
              }
           }
        } else {                 
                  echo "No Record Found";
                 }
                                    ?> 
        <nav class="sidebar">
          <img class="user-logo" src="../../../core/asset/icon-user.png" alt="user-logo" href="../welcome.html"></a>  
            <ul class="nav-list">
            <li class="list-item"><a class="login" href="#"><?php echo $username; ?></a></li>
                <li class="list-item"><a class="fa" href="galeri.php">Galeri</a></li>
                <li class="list-item"><a class="fa" href="kontak.html">Kontak</a></li>
                <li class="list-item"><a class="fa" href="pendaftaran.html">Daftar Haji & Umroh</a></li>
                <li class="list-item"><a class="fa" href="dashboard.php">Dashboard</a></li>
                <div class="TentangLogout">
                <li class="list-item"><a class="fa tentang-kami" href="core/tentang-kami.html">Tentang Kami</a></li>
                <li class="list-item"><a id="logout-link" class="logout" href="../../controller/logout.php">Logout</a></li>
                </div>
              </ul>
        </nav>
        <nav class="wrapper">
          <a href="../welcome.php"><img class="img-logo" src="../../../core/asset/LogoItkontamaTravelOrange2022.png" alt="Logo-icon"></a>
            <button class="hamburger">
                <div class="bar"></div>
            </button>
        </nav>
    </div>
</main>
    <script src="../../../core/script/script.js"></script>
    <script>
     const blocks = document.querySelectorAll('.block');
let topValue = 0;

blocks.forEach(block => {
  block.style.top = `${topValue}px`;
  topValue += 100; // increase topValue by 100px for the next block
});
</script>
<script>

</script>
</body>
</html>