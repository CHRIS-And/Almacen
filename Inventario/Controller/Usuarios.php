<?php
class Usuarios extends Controllers
{
    public function __construct()
    {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: ".base_url());
        }
        parent::__construct();
    }

    //Iniciar sesión
    public function login()
    {        
        if (!empty($_POST['correo']) || !empty($_POST['pass'])) {
            $correo = limpiarInput($_POST['correo']);
            $pass = limpiarInput($_POST['pass']);                        
            $data = $this->model->selectUsuario($correo, $pass);
            
            if (!empty($data)) {
                    $_SESSION['idUsuario'] = $data['idUsuario'];
                    $_SESSION['nombre'] = $data['nombre'];
                    $_SESSION['correo'] = $data['correo'];               
                    $_SESSION['idRol'] = $data['idRol'];                                                              
                    $_SESSION['activo'] = true;
                    
                    //$fecha_elimina = $_POST['fecha_elimina'];                
                    header('location: '.base_url(). 'Inicio/Home');
            } else {
                $error = 0;
                header("location: ".base_url(). 'Login'."?msg=$error");
            }

        }
        
    }

    //Cerrar Sesión
    public function salir()
    {
        session_destroy();
        header("Location: ".base_url());
    }
}
?>