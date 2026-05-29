<?php

session_start();

$conexion = new mysqli(
"localhost",
"root",
"",
"animeworld"
);

if($conexion->connect_error){
    die("Error de conexión");
}

$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

$sql = "SELECT * FROM usuarios WHERE usuario = ?";

$stmt = $conexion->prepare($sql);

$stmt->bind_param("s", $usuario);

$stmt->execute();

$resultado = $stmt->get_result();

if($resultado->num_rows > 0){

    $fila = $resultado->fetch_assoc();

    if(password_verify($contrasena, $fila["contrasena"])){

        $_SESSION["usuario"] = $fila["usuario"];

        echo "
        <body style='
        background:url(../imagenes/fondo1.jpg) center/cover fixed;
        font-family:Arial;
        color:white;
        text-align:center;
        '>

        <div style='
        background-color:rgba(0,0,0,0.7);
        width:500px;
        margin:auto;
        margin-top:150px;
        padding:30px;
        border-radius:20px;
        '>

        <h1>🌸 Bienvenido ".$fila["usuario"]." 🌸</h1>

        <h2>✅ Inicio de sesión correcto</h2>

        <a href='../trabajo.php'>
        <button style='
        padding:15px 30px;
        border:none;
        border-radius:30px;
        background:linear-gradient(45deg,#ff4da6,#ff80bf);
        color:white;
        font-size:18px;
        cursor:pointer;
        '>
        Entrar a Anime World
        </button>
        </a>

        </div>
        </body>
        ";

    }else{

        echo "❌ Contraseña incorrecta";
    }

}else{

    echo "❌ Usuario no encontrado";
}

$stmt->close();
$conexion->close();

?>