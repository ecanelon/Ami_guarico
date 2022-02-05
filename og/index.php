

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>AMI Guarico</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/styleami.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content"> 
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h1 class="text-center font-weight-light my-4">Bienvenido</h1><h5 class="text-center font-weight-light my-4">Por favor identifíquese</h5></div>
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="user">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" name="usuario" placeholder="name@example.com" />
                                                <label for="inputEmail">Ingrese Usuario</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" />
                                                <label for="inputPassword">Ingrese Contraseña</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Recordar contraseña</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">¿Olvidó su Contraseña?</a>
                                                <button class="btn btn-danger" href="index.php">Iniciar Sesión</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        
                                    <?php

    require "conexion.php";

    session_start();

    if($_POST){

        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        $sql = "SELECT id, password, nombre, tipo_usuario FROM usuarios WHERE usuario='$usuario'";
 
        $resultado = $mysqli->query($sql);
        $num = $resultado->num_rows;

        if ($num>0){
            $row = $resultado->fetch_assoc();
            $password_bd = $row['password'];

            $pass_c = sha1($password);

            if($password_bd == $pass_c) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['tipo_usuario'] = $row['tipo_usuario'];

                header ("Location: principal.php");

            } else {

                echo "La contraseña ingresada es incorrecta.";
            }


        }
        else {

            echo "El usuario ingresado no existe.";

        }
        if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    // session isn't started
    session_start();
}
    }
?>  
                                    </div>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>           
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
