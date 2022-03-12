<?php
//Destruye la sesion si existe
session_start();
session_destroy();

require_once 'modelo/regempleado.php';
if (is_file('vista/'.$pagina.'.php')) {

    if (!empty($_POST)) {

        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $objUsuario = new empleado1();

        $busqueda = $objUsuario->validar($usuario, $clave);
        
        if ($busqueda['estado'] == true) {
            session_start();

            $_SESSION['ci_empleado'] = $busqueda['ci_empleado'];
            $_SESSION['nombres']     = $busqueda['nombres'];
            $_SESSION['apellido1']   = $busqueda['apellido1'];
            $_SESSION['apellido2']   = $busqueda['apellido2'];
            $_SESSION['rol_usuario'] = strtolower($busqueda['rol_usuario']);
            $_SESSION['usuario']     = $busqueda['usuario'];
            $_SESSION['contrasena']  = $busqueda['contrasena'];
    
            header('location:index.php?pagina=inicio');
            exit();
		} else {
            $msj = "Los datos ingresados son incorrectos, por favor verifique nuevamente";
        }
    }
    require_once 'vista/'.$pagina.'.php';
} else {
    echo "Pagina en contruccion";
}
?>