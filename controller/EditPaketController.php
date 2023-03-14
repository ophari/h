<?php
    class EditPaketControlller extends EditPaketModel{

        private $model;

        public function __construct()
        {
            $this->model = new EditPaketModel();
        }

        public function GetAll(){
            $row = $this->model->getGambar();
            return $row;
        }

        public function Update(){
            if(isset($_POST['submit'])){
                $id = $_POST['id'];
                $gambar_lama = $_POST['gambar_lama'];
                $gambar_baru = $_FILES['gambar']['name']; 
                $temp_file = $_FILES['gambar']['tmp_name']; 

                $result = $this->model->updateGambar($id, $gambar_lama, $gambar_baru, $temp_file);
                if ($result) {
                    echo "<script>alert('Data sudah di Update');window.location='EditPaket.php';</script>";
                } else {
                    echo "Error: Data gagal di-update";
                }
            }
        }    
}
        
    
?>