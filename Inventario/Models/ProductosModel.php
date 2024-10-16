<?php
class ProductosModel extends Mysql{
    public function __construct()
    {
        parent::__construct();
    }

    //Selecciona productos 
    public function selectProductos()
    {
        $sql = "SELECT * FROM productos";
        $res = $this->select_all($sql);
        return $res;
    }

      //Selecciona Historial
      public function selectHistorial()
      {
          $sql = "SELECT U.nombre AS Usuario, E.cantidad_entrada AS cantidad, P.nombre AS nombre_producto, E.fecha_hora_entrada AS fecha_hora, 'Entrada' AS tipo_movimiento, E.estatus AS estatus FROM `productos` P JOIN `entradas` E ON P.idProducto = E.idProducto JOIN `usuarios` U ON E.idUsuario = U.idUsuario UNION ALL SELECT U.nombre AS Usuario, S.cantidad_salida AS cantidad, P.nombre AS nombre_producto, S.fecha_hora_salida AS fecha_hora, 'Salida' AS tipo_movimiento, S.estatus AS estatus FROM `productos` P JOIN `salidas` S ON P.idProducto = S.idProducto JOIN `usuarios` U ON S.idUsuario = U.idUsuario;";
          $res = $this->select_all($sql);
          return $res;
      }
    
    //Seleciona los datos de un producto
    public function restarProductos(int $id)
    {
        $this->id = $id;
        $sql = "SELECT * FROM productos WHERE idProducto = '{$this->id}'";
        $res = $this->select($sql);
        if (empty($res)) {
            $res = 0;
        }
        return $res;
    }

        //Seleciona los datos de un producto
         public function editarProductos(int $id)
        {
            $this->id = $id;
            $sql = "SELECT * FROM productos WHERE idProducto = '{$this->id}'";
            $res = $this->select($sql);
            if (empty($res)) {
                $res = 0;
            }
            return $res;
        } 

      //Edita los datos de un Producto
      public function aumentarProductos(int $idProducto, string $nombre, int $cantidad_entrada,int $idUsuario, int $cantidad)
      {
          $return = "";
          $this->fecha_hora_entrada= date('Y-m-d H:i:s');
          $this->estatus=1;
          $this->idProducto = $idProducto;
          $this->nombre = $nombre;
          $this->cantidad_entrada = $cantidad_entrada;
          $this->idUsuario = $idUsuario;
          $this->cantidad = $cantidad;
          $this->nueva_cantidad = $cantidad+$cantidad_entrada;
          $query = "INSERT INTO entradas (cantidad_entrada,idUsuario, idProducto, fecha_hora_entrada, estatus) VALUES (?, ?, ?, ?, ?)";
          $data = array($this->cantidad_entrada,$this->idUsuario, $this->idProducto, $this->fecha_hora_entrada, $this->estatus);
          $resul = $this->insert($query, $data);
          
          if ($resul){
              $query2 = "UPDATE productos SET cantidad = ? WHERE idProducto = ?";
              $data2 = array($this->nueva_cantidad, $this->idProducto);
              $resul2 = $this->update($query2, $data2);
      
            
          } else {
              return "Error al insertar en entradas.";
          }
      }

       //Edita los datos de un Producto
       public function actualizarProductosSalida(int $idProducto, string $nombre, int $cantidad_salida,int $idUsuario, int $cantidad)
       {
           $return = "";
           $this->fecha_hora_salida= date('Y-m-d H:i:s');
           $this->estatus=0;
           $this->idProducto = $idProducto;
           $this->nombre = $nombre;
           $this->cantidad_salida = $cantidad_salida;
           $this->idUsuario = $idUsuario;
           $this->cantidad = $cantidad;
           $this->nueva_cantidad = $cantidad-$cantidad_salida;
           $query = "INSERT INTO salidas (cantidad_salida,idUsuario, idProducto, fecha_hora_salida, estatus) VALUES (?, ?, ?, ?, ?)";
           $data = array($this->cantidad_salida,$this->idUsuario, $this->idProducto, $this->fecha_hora_salida, $this->estatus);
           $resul = $this->insert($query, $data);
           
           if ($resul){
               $query2 = "UPDATE productos SET cantidad = ? WHERE idProducto = ?";
               $data2 = array($this->nueva_cantidad, $this->idProducto);
               $resul2 = $this->update($query2, $data2);
       
             
           } else {
               return "Error al insertar en entradas.";
           }
       }

    //cambia de estado un producto a inactivo
    public function eliminarProductos(int $id, int $estado)
    {
        $return = "";
        $this->id = $id;
        $this->estado = $estado;
        $query = "UPDATE productos SET estatus = ? WHERE idProducto=?";
        $data = array($this->estado, $this->id);
        $resul = $this->update($query, $data);
        $return = $resul;
        return $return;
    }

      //cambia de estado un producto a activo
      public function reactivarProductos(int $id, int $estado)
      {
          $return = "";
          $this->id = $id;
          $this->estado = $estado;
          $query = "UPDATE productos SET estatus = ? WHERE idProducto=?";
          $data = array($this->estado, $this->id);
          $resul = $this->update($query, $data);
          $return = $resul;
          return $return;
      }

      public function cree(string $nombre,int $cantidad, int $estado) {
        $return = "";
        $this->nombre = $nombre;
        $this->cantidad = $cantidad; 
        $this->estado = $estado;    
        $query = "INSERT INTO productos(nombre,cantidad, estatus) VALUES (?,?,?)";
                $data = array($this->nombre,$this->cantidad, $this->estado);
                $resul = $this->insert($query, $data);
                $return = $resul;

        return $return;
    }
    
    //Validad contraseña de usuario
    public function selectUsuario(string $correo, string $pass)
    {
        $this->correo = $correo;
        $this->pass = $pass;
        $sql = "SELECT * FROM usuarios WHERE correo = '{$this->correo}' AND contrasena = '{$this->pass}'";
        $res = $this->select($sql);
        return $res;
    }

}
?>