<?php

//Instanciar PDO con la conexion a base de datos de SQLITE 
//Tambien la creacion del directorio que contiene la base  de datos .

$pdo = new PDO("sqlite:".__DIR__."/usuarios.db");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//Crear la definicion de la tabla.


$definicionTabla = "CREATE TABLE IF NOT EXISTS registros(

    id INTEGER PRIMARY KEY AUTOINCREMENT,
    niu_user TEXT NOT NULL,
    name_user TEXT NOT NULL, 
    last_name_user TEXT NOT NULL, 
    phone_user TEXT NOT NULL, 
    email_user TEXT NOT NULL, 
    address_user TEXT NOT NULL,
    department_user TEXT NOT NULL,
    city_user TEXT NOT NULL,
    code TEXT NOT NULL,  
    date_creation DATE
      
);";

$resultado = $pdo->exec($definicionTabla);
// echo "Tabla Creada correctamente";












?>
