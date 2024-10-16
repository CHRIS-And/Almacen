<?php
class Inicio extends Controllers 
{
    public function __construct()
    {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: ".base_url());
        }
        parent::__construct();
    }

    
    //Muestra la vista HOME
    public function Home()
    {
        $data1 = $this->model->selectProductos();
    $this->views->getView($this, "Home", "", $data1);
        die();
    }
}                       
?>

