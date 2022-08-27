<?php
session_start();
require_once "Database/Database.php";
if ($_SESSION['username'] == null) {
    echo "<script>alert('Please login.');</script>";
    header("Refresh:0 , url=index.html");
    exit();
}
$username = $_SESSION['username'];
$sql_fetch_todos = "SELECT * FROM product ORDER BY id ASC";
$query = mysqli_query($conn, $sql_fetch_todos);

?>
<!doctype html>
<html lang="en">

<head>
    <title>Principal</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="faviconconfiguroweb.png">
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #fd7e1b;
        }

        .header {
            position: fixed;
            top: 0px;
            left: 0px;
            right: 0px;
            height: 50px;
            padding: 5px 13px 11px 0px;
            width: 100%;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            margin-top: 0px;
            bottom: 0;
            background-color: #298dba;
        }

        .header p {
            margin-left: 20px;
            text-align: left;
        }

        .button-logout {
            position: relative;
            margin-top: -50px;
            margin-right: 20px;
            float: right;
            text-decoration: none;
            border: transparent;
            border-radius: 15px;
            background-color: #e60000;
            padding: 10px 10px 10px 10px;
            color: white;
            transition: 0.5s;
        }

        .button-logout:hover {
            background-color: #D9ddd4;
            color: red;
        }

        .container {
            margin: 90px auto;
            margin-bottom: 50px;
            border-radius: 30px;
            text-align: center;
            background-color: white;
            width: 40%;
            padding-bottom: 10px;
        }

        table th,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px 0px 10px 0px;
        }

        table {
            width: 100%;
        }

        th {
            color: white;
            background-color: #298dba;
        }

        tr {
            background-color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .stock {
            text-align: center;
        }
       
        .timeregis {
            text-align: center;
        }

        .modify {
            text-align: center;
        }
        
        .inbound {
            text-align: center;
        }

        .inbound .bfix {
            border-radius: 15px;
            background-color: green;
            color: black;
            text-decoration: none;
            padding: 4px 20px 4px 20px;
            transition: 0.5s;
        }

        .outbound {
            text-align: center;
        }

        .outbound .bfix {
            border-radius: 15px;
            background-color: blue;
            color: black;
            text-decoration: none;
            padding: 4px 20px 4px 20px;
            transition: 0.5s;
        } 
        
        .delete {
            text-align: center;
        }

        .modify .bfix {
            border-radius: 15px;
            background-color: #ffcc33;
            color: black;
            text-decoration: none;
            padding: 4px 20px 4px 20px;
            transition: 0.5s;
        }

        .modify .bfix:hover {
            background-color: #fdb515;
            color: white;
        }

        .delete .bdelete {
            border-radius: 15px;
            background-color: #e60000;
            text-decoration: none;
            color: white;
            padding: 4px 20px 4px 20px;
            transition: 0.5s;
        }

        .delete .bdelete:hover {
            background-color: #D9ddd4;
            color: red;
        }

        .Addlist {
            margin-right: 100px;
            padding: 5px 30px 5px 30px;
            border-radius: 15px;
            text-decoration: none;
            color: white;
            background-color: #00A600;
            transition: 0.5s;
        }

        .Addlist:hover {
            color: black;
            background-color: #BBFFBB;
        }

      
    </style>
</head>

<body>
    <div class="header">
        <h3>ALMACEN</h3>
        <a name="" id="" class="button-logout" href="logout.php" role="button">Cerrar Sesión</a>
    </div>
    <div class="container">
        <h2>Has ingresado como <?php echo $str = strtoupper($username) ?></h2>
        <h1>¿Qué acción deseas realizar?</h1>
    </div>
    <div class= "action">
        
        <a name="" id="" class="Addlist" style="float:right" href="list.php" role="button">LISTA DE PRODUCTOS</a>
        <br>
        <a name="" id="" class="Addlist" style="float:right" href="inbound.php" role="button">INGRESO DE PRODUCTO</a>
        <br>
        <a name="" id="" class="Addlist" style="float:right" href="outbound.php" role="button">SALIDA DE PRODUCTO</a>       
        <br>
        <a name="" id="" class="Addlist" style="float:right" href="fix.php" role="button">EDITAR</a>
        <br>
        <a name="" id="" class="Addlist" style="float:right" href="delete.php" role="button">ELIMINAR</a>
        <br>
        <a name="" id="" class="Addlist" style="float:right" href="addlist.php" role="button">AGREGAR NUEVO PRODUCTO</a>
    </div>
   
    <?php
    mysqli_close($conn);
    ?>
</body>

</html>