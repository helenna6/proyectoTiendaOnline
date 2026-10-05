<?php

$host = 'localhost';
$user = 'usuario';
$pass = 'usuario';
$db   = 'tienda_online';

$conn = new mysqli(
    'localhost',
    'usuario',
    'usuario',
    'tienda_online'
);

if ($conn->connect_error) {
    die("❌ Error de conexión: " . $conn->connect_error);
}

echo "✅ Conexión correcta a MariaDB<br>";
echo "Base de datos: " . $db . "<br>";
echo "Servidor: " . $host;