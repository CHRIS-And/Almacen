<?php
class InicioModel extends Mysql{ 
    public $id, $area, $usuario, $tipo, $plataforma, $tipocontrata, $fecha, $gpo , $gen , $fechaN;
    public function __construct()
    {
        parent::__construct();
    }
    public function selectProductos()
    {
        $sql = "SELECT * FROM productos";
        $res = $this->select_all($sql);
        return $res;
    }
}
?>