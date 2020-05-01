<?php
include '../conexion/Conexion.php';

$type = $_REQUEST['type'];


if ($type == 'insert') {
    $name = $_REQUEST['usuario'];
    $email = $_REQUEST['correo'];
    $password = $_REQUEST['contrasena'];
    $sql = "insert into usuario (usuario, email, password) values('" . $name . "','" . $email . "', '" . $password . "')";
    $result = pg_query($dbconn, $sql);

    if ($result) {
        echo 1;
    }
}

if ($type == 'select') {
    
    $result = pg_query($dbconn, "SELECT * FROM usuario");
    if (!$result) {
        echo "no se encontraron datos.";
        exit;
    }

    //$arr = pg_fetch_all($result);    
    //echo $arr;
    //echo json_encode($arr);

    $tabla = "";

    //mysql_fetch_array
    while ($row = pg_fetch_array($result)) {

       // echo $result;

        $editar = '<a href=\"edicionUsuario.php?a=' . $row['id'] . '&b=' . $row['usuario'] . '&c=' . $row['email'] . '&d=' . $row['password'] . '\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
        $eliminar = '<a href=\"actionDelete.php?id=' . $row['id'] . '\" onclick=\"return confirm(\'¿Seguro que desea eliminiar este usuario?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';

        $tabla .= '{
                  "id":"' . $row['id'] . '",
                  "usuario":"' . $row['usuario'] . '",
                  "email":"' . $row['email'] . '",
				  "password":"' . $row['password'] . '",
				  "acciones":"' . $editar . $eliminar . '"
				},';
    }

    //eliminamos la coma que sobra
    $tabla = substr($tabla, 0, strlen($tabla) - 1);

    echo '{"data":[' . $tabla . ']}';
}


if ($type == 'update') {

    
    $name = $_REQUEST['usuario'];
    $email = $_REQUEST['correo'];
    $password = $_REQUEST['contrasena'];

    $sql = "update test set usuario ='" . $user . "' where id = 1";
    $result = pg_query($dbconn, $sql);
    if ($result) {
        echo "actualizado correctamente";
    } else {
        echo  pg_last_error($dbconn);
    }
}

if ($type == 'delete') {

    $sql = "delete from usuario where id= 1";
    $result = pg_query($dbconn, $sql);
    if ($result) {
        echo "eliminado correctamente\n";
    } else {
        echo pg_last_error($dbconn);
    }
}
