<?php
    //GUARDAR DATOS DE ESTUDIANTES
    
    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'francisco_escolar'
    );
    

    //VARIABLES DE DATOS DE ESTUDIANTES
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $cedula_identidad = $_POST['cedula_identidad'];
    $cedula_escolar = $_POST['cedula_escolar'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $sexo = $_POST['sexo'];
    $lugar_nacimiento = $_POST['lugar_nacimiento'];
    $direccion_actual = $_POST['direccion_actual'];
    $punto_referencia = $_POST['punto_referencia'];
    $correo_electronico = $_POST['correo_electronico'];
    $numero_telefono = $_POST['numero_telefono'];


    //VARIABLES DE DATOS DE REPRESENTANTES
    $nombres_repre = $_POST['nombres_repre'];
    $apellidos_repre = $_POST['apellidos_repre'];
    $cedula_id_repre = $_POST['cedula_id_repre'];
    $lugar_nac_repre = $_POST['lugar_nac_repre'];
    $parentesco_repre = $_POST['parentesco_repre'];
    $estado_civil_repre = $_POST['estado_civil_repre'];
    $correo_electronico_repre = $_POST['correo_electronico_repre'];
    $numero_telefono_repre = $_POST['numero_telefono_repre'];
    $numero_telefono_repre_otro = $_POST['numero_telefono_repre_otro'];


// if (isset($_POST['save_task'])) {
$query = "INSERT INTO registro_estudiantes (
    nombres,
    apellidos,
    cedula_identidad,
    cedula_escolar,
    fecha_nacimiento,
    sexo,
    lugar_nacimiento,
    direccion_actual,
    punto_referencia,
    correo_electronico,
    numero_telefono,
    nombres_repre,
    apellidos_repre,
    cedula_id_repre,
    lugar_nac_repre,
    parentesco_repre,
    estado_civil_repre,
    correo_electronico_repre,
    numero_telefono_repre,
    numero_telefono_repre_otro


) VALUES (
    '$nombres',
    '$apellidos',
    '$cedula_identidad',
    '$cedula_escolar',
    '$fecha_nacimiento',
    '$sexo',
    '$lugar_nacimiento',
    '$direccion_actual',
    '$punto_referencia',
    '$correo_electronico',
    '$numero_telefono',
    '$nombres_repre',
    '$apellidos_repre',
    '$cedula_id_repre',
    '$lugar_nac_repre',
    '$parentesco_repre',
    '$estado_civil_repre',
    '$correo_electronico_repre',
    '$numero_telefono_repre',
    '$numero_telefono_repre_otro'
        
)";


$result = mysqli_query($conn, $query);



if(!$result) {
  die("Query Failed.");
}

$_SESSION['message'] = 'Tarea guardada con exito';
$_SESSION['message_type'] = 'success';
header('Location: index.php');
//   }
  
  ?>
  