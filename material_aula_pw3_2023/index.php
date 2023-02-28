<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/">Home</a>
    <a href="?page=tabuada">Tabuada</a>
    <a href="?page=imc">Imc</a>
    <a href="?page=viagem">Viagem</a>
    <a href="?page=sobre">Sobre</a>
    <!-- <form method="post">
        <input type="number"    name="tab" placeholder="tab">
        <input type="number"    name="inicio" placeholder="inicio">
        <input type="number"    name="fim" placeholder="fim">
        <input type="submit" value="Enviar">
    </form> -->
    <?php
        http://materialaulapw3.local/?page
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch($page){
                case 'imc':
                    require_once './page/imc.php';
                    break;
                case 'viagem':
                    require_once './page/viagem.php';
                    break;
                case 'sobre':
                    require_once './page/sobre.php';
                    break;
                case 'tabuada':
                    require_once './page/tabuada.php';
                    break;
                default:
                    require_once './page/page404.php';
            }
        }
        else{
            echo 'BEM VINDO';
        }
       

        // for($id = 0; $id <= $_POST['tab']; $id++){
        //     echo "<h1> $id * ".$_POST['tab']." = ".$_POST['tab'] * $id."</h1>";
        // }
    ?>
</body>
</html>