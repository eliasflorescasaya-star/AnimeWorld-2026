<?php

$conexion = new mysqli(
"localhost",
"root",
"",
"animeworld"
);

if($conexion->connect_error){

die("Error de conexión");

}

$usuario=$_POST["usuario"];

$correo=$_POST["correo"];

$contrasena=$_POST["contrasena"];

$confirmar=$_POST["confirmar"];


if($contrasena != $confirmar){

echo "

<h2 style='color:red;
text-align:center;'>

❌ Las contraseñas no coinciden

</h2>

<a href='../registro.html'>

<button>

Volver

</button>

</a>

";

exit();

}


$contrasenaSegura=password_hash(
$contrasena,
PASSWORD_DEFAULT
);


$sql="INSERT INTO usuarios
(usuario,correo,contrasena)

VALUES(?,?,?)";

$stmt=$conexion->prepare($sql);

$stmt->bind_param(
"sss",
$usuario,
$correo,
$contrasenaSegura
);

if($stmt->execute()){

echo "

<body style='
background:url(../imagenes/fondo1.jpg)
center/cover fixed;
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

<h1>
🌸 Cuenta creada correctamente 🌸
</h1>

<h3>
👋 Bienvenido $usuario
</h3>

<a href='../trabajo.php'>

<button style='
padding:15px;
border:none;
border-radius:20px;
background:pink;
cursor:pointer;
'>

Entrar a Anime World

</button>

</a>

</div>

</body>

";

}else{

echo "❌ Error al guardar";

}

$stmt->close();

$conexion->close();

?>