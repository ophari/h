<?php
class InfoPaketController extends InfoPaketModel{
    private $model;
   
    public function __construct()
    {
        $this->model= new InfoPaketModel();
    }
    
    public function ByIdFoto($id){
        $foto = $this->model->ByIdFoto($id);
        return $foto;
    }
}