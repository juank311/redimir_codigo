<?php
//incluir la conexion de la base de datos 
    include_once __DIR__ . "/conexion.php";
//configurar zona horaria 
    date_default_timezone_set('America/Bogota');

    //
$min = 1;
$max = 999;
$numero_1 = rand($min, $max);
$numero_2 = rand($min, $max);
$code = intval($numero_1 * $numero_2)/5;

   
if (isset($_POST['btnRegistrarse'])) {
    
    $niu_user = $_POST['niu_user'];
    $name_user = $_POST['name_user'];
    $last_name_user = $_POST['last_name_user'];
    $phone_user = $_POST['phone_user'];
    $email_user = $_POST['email_user'];
    $address_user = $_POST['address_user'];
    $department_user = $_POST['department_user'];
    $city_user = $_POST['city_user'];
        
      if (empty($niu_user) || 
        empty($name_user) || 
        empty($last_name_user) || 
        empty($phone_user) || 
        empty($email_user) || 
        empty($address_user) || 
        empty($department_user) || 
        empty($city_user)) {
        
            //echo "Error, existen campos obligatorios vacios";
            $error = "Existen campos obligatorios (*) vacios";
            header('Location: index.php?error='.urldecode($error));
            exit();

    } else {
        $query_search = "SELECT * FROM registros WHERE niu_user = ?";

        $stmt_search = $pdo->prepare($query_search);

        $stmt_search->execute([$niu_user]);

        $id_comparado = $stmt_search->fetch(PDO::FETCH_ASSOC);

        //var_dump($id_comparado);

        if ($id_comparado == false) {

            $query_insert = "INSERT INTO registros(niu_user, name_user, last_name_user, phone_user, email_user, address_user, department_user, city_user, code) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
            $stmt_insert = $pdo->prepare($query_insert);
         
            $stmt_insert->execute([$niu_user, $name_user, $last_name_user, $phone_user, $email_user, $address_user, $department_user, $city_user, $code]);

           
            $mensaje = "Registro exitoso, su codigo para redimir es: ". $code;
            header('Location: index.php?mensaje='.urldecode($mensaje));
            
        } else {
            //echo "Error, este Número de Identidad YA EXISTE";
            $error = "Este número de identidad YA EXISTE";
            header('Location: index.php?error='.urldecode($error));
            exit();
            
        }
        }
    } 










?>