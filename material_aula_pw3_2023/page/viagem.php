<form method="post">
    <input type="number" name="input_gas" placeholder="Informe o preço da gasolina">
    <input type="number" name="input_distancia" placeholder="Informe a distancia percorrida">
    <input type="number" name="input_pedagio" placeholder="Informe o valor do pedagio">
    <input type="number" name="input_km" placeholder="Informe o gasto por KM">
    <input type="submit" value="Calcular">
</form>
<h3></h3>

<?php
    if(isset($_POST['input_gas'])){
        $gas = $_POST['input_gas'];
        $distancia = $_POST['input_distancia'];
        $pedagio = $_POST['input_pedagio'];
        $km = $_POST['input_km'];
        $media = ($distancia / $km) * $gas + $pedagio;
        echo"<h3>Custo da viagem: " .$media."</h3>";
    }

?>    