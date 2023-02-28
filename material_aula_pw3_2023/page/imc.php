<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="number" name="input_peso" placeholder="Informe seu peso">
    <input type="number" name="input_alt" placeholder="Informe sua altura">
    <input type="submit" value="Calcular">
</form>
<h3></h3>

<?php
    if(isset($_POST['input_peso'])){
        $peso = $_POST['input_peso'];
        $alt = $_POST['input_alt'];
        $resultado = $peso / ($alt * $alt);
        echo"<h3>IMC: " .$resultado."</h3>";
    }

?>    
</body>
</html>