<?php

session_start();   

if(($_SESSION['permesso']) != true) {

    header("Location: errore.php");

}


if(!isset($_SESSION['start-time'])) {
    $_SESSION['start-time'] = time();
}else if(time() - $_SESSION['start-time'] > 20) {
    header("Location: sessione_scaduta.php");
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">
    <h1>Benvenuto</h1>

    <h2>GABRIEL</h2>
    <h2>SIANO</h2>
    <h2>20/06/2006</h2>

    <h3><?php echo date("Y-m-d H:i:s") ?></h3>


<button><a style="text-decoration: none;" href="script_logout.php">LOGOUT</button>

</body>
</html>
