
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    <!--CSS-->    
    <link rel="stylesheet" href="../libs/table/css/bootstrap.css">
    <link rel="stylesheet" href="../libs/table/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../libs/table/font-awesome/css/font-awesome.css">
    
</head>

<body>
<div class="col-md-8 col-md-offset-2">
    <h1>Usuarios
        <!--a href="registrousuario.php" class="btn btn-primary pull-right menu"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Nuevo usuario</a-->
    </h1>  
</div>
<div class="col-md-8 col-md-offset-2">    
    <table id="tabla_paginar" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
        <th>#</th>
            <th>Usuario</th>
            <th>Correo</th>
            <th>Password</th>   
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
        <tr>
        <th>#</th>
            <th>Usuario</th>
            <th>Correo</th>
            <th>Password</th>   
            <th>Acciones</th>
        </tr>
        </tfoot>
    </table>        
</div>

<!--Javascript-->    

      
    <script src="../libs/jquery-3.2.1.min.js"></script>
    <!--script src="../libs/table/js/jquery-1.10.2.js"></script-->
    <script src="../libs/table/js/jquery.dataTables.min.js"></script>
    <script src="../libs/table/js/dataTables.bootstrap.min.js"></script>          
    <script src="../libs/table/js/bootstrap.js"></script>
    <script src="../libs/table/js/lenguajeusuario.js"></script>     
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
    </script>   
</body>
</html>
