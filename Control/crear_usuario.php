<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <?php
    include "conexionDB.php";
    $cedula = isset($_POST['cedula']) ? trim($_POST['cedula']) : null;
    $nombres = isset($_POST['nombre']) ? mb_strtoupper(trim($_POST['nombre']), 'UTF-8') : null;
    $apellidos = isset($_POST['apellido']) ? mb_strtoupper(trim($_POST['apellido']), 'UTF-8') : null;
    $direccion = isset($_POST['direccion']) ? mb_strtoupper(trim($_POST['direccion']), 'UTF-8') : null;
    $telefono = isset($_POST['telefono']) ? trim($_POST['telefono']) : null;
    $correo = isset($_POST['correo']) ? trim($_POST['correo']) : null;
    $passwork = isset($_POST['passwork']) ? trim($_POST['passwork']) : null;
    $fecha = isset($_POST['fecha']) ? trim($_POST['fecha']) : null;
    $rol = " ";
    if (isset($_POST["user"])){
        $rol = "U";
    }else if(isset($_POST["admin"])){
        $rol= "A";
    }
    
    $sql = "INSERT INTO usuarios VALUES (0, '$cedula', '$nombres', '$apellidos', '$direccion', '$telefono',
     '$correo', MD5('$passwork'), '$fecha', 'N', null, null)";
     if($conn->query($sql) === TRUE){
         echo "<p>Se ha registrado correctamente !!</p>";
}else{
    if($conn->errno == 1062){
        echo "<p class='error'> La persona con la cedula $cedula ya se encuentra registrada. </p>";
    }
    echo "<h1>$conn->errno</h1>";
}
$conn->close();
echo "<a href='../Principal.html'> REGRESAR </a>"
?>
</body>
</html>