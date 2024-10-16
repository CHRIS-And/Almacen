<?php
class UsuariosModel extends Mysql{
    public $id, $usuario, $nombre, $correo, $rol, $clave, $estado, $perfil;
    public function __construct()
    {
        parent::__construct();
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