<?php
class Productos extends Controllers
{
    public function __construct()
    {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: ".base_url());
        }
        parent::__construct();
    }

    public function Historial(){
        $data1 = $this->model->selectHistorial();
        $this->views->getView($this, "Historial", "", $data1);
    }


    //Seleciona los datos de un Producto
    public function editar()
    {
        $id = $_GET['idProducto'];
        $data1 = $this->model->editarProductos($id);
        if ($data1 == 0) {
            $this->Listar();
        } else {
            $this->views->getView($this, "Aumentar","", $data1);
        }
    }

    //Seleciona los datos de un Producto
    public function restar()
    {
        $id = $_GET['idProducto'];
        $data1 = $this->model->restarProductos($id);
        if ($data1 == 0) {
            $this->Listar();
        } else {
            $this->views->getView($this, "Restar","", $data1);
        }
    }

    //Actualiza los datos de un Producto
    public function actualizar()
    {
        $idProducto = $_POST['idProducto'];
        $nombre = $_POST['nombre'];
        $cantidad_entrada = $_POST['cantidad_entrada'];
        $cantidad = $_POST['cantidad'];
        $idUsuario= $_SESSION['idUsuario'];
        if($cantidad_entrada > 0){
        $actualizar = $this->model->aumentarProductos($idProducto, $nombre, $cantidad_entrada,$idUsuario, $cantidad); 
        }    
           else {
                $alert =  'error_de_cantidad_negativa';
            }
        header("location: " . base_url() . "Inicio/Home?msg=$alert");
        die();
    }

     //Actualiza los datos de un Producto
     public function restar_inventario()
     {
         $idProducto = $_POST['idProducto'];
         $nombre = $_POST['nombre'];
         $cantidad_salida = $_POST['cantidad_salida'];
         $cantidad = $_POST['cantidad'];
         $idUsuario= $_SESSION['idUsuario'];
         if($cantidad_salida > 0 && $cantidad >= $cantidad_salida){
         $actualizar = $this->model->actualizarProductosSalida($idProducto, $nombre, $cantidad_salida, $idUsuario, $cantidad);     
          } else {
                 $alert =  'error_de_cantidad';
             }
         header("location: " . base_url() . "Inicio/Home?msg=$alert");
         die();
     }

    //Inactiva los datos de un Usuario
    public function eliminar()
    {
        $id = $_GET['idProducto'];
        $estado = 0;
        $eliminar = $this->model->eliminarProductos($id, $estado);
        $alert = 'inactivo';
        $data1 = $this->model->selectProductos();
        header("location: " . base_url() . "Inicio/Home?msg=$alert");
        die();
    }

        //Inactiva los datos de un Usuario
        public function reactivar()
        {
            $id = $_GET['idProducto'];
            $estado = 1;
            $eliminar = $this->model->reactivarProductos($id, $estado);
            $alert = 'reactivado';
            $data1 = $this->model->selectProductos();
            header("location: " . base_url() . "Inicio/Home?msg=$alert");
            die();
        }

        public function crear(){
            $Nombre=$_POST['nombre']; 
            $cantidad = 0;                 
            $estado = 1;
                    $insert = $this->model->cree($Nombre,$cantidad, $estado);                
                    header("location: " . base_url() . "Inicio/Home");                    
                    die();
        }

}
?>