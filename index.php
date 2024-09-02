<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="center">
    <form action="" method="POST">
        <label for="base">informe a base</label>
        <input type="number" id="base" name="base" required>
        <br>
        <br>
        <label for="altura">informe a altura</label>
        <input type="number" id="altura" name="altura" required>
        <br>
        <br>
        <button class="button" type="submit" name="triangulo">Verificar</button>
    </form>
</div>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['triangulo'])){
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $area = ($base * $altura) / 2;
        
        if($area > 100){
            echo "a area é maior que o limite";
        }else{
            echo "a area é menor que o limite";
        }
    }
}

?>
</body>
</html>