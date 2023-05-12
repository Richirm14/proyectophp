<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php
    echo 'hola mundo';
    echo '<h1>Este es un titulo</h1>';
    ?>
    <h1><?php echo"Este es un titulo grande homie" ?></h1>

    <?php
    //declaracion de una variable
    $num =3;
    $nombre = "Juan";
    $numDos = 3;
    $suma = $num + $numDos;
    echo "<h1>El resultado de la suma es: ".$suma."</h1";

    ?>

    <input type="submit" value="Formularios"/>
    <a href="/formularios.php">
        <button>formularios</button>
    </a>
    <br>

    <?php
    
    //estructutas de control
    //el if
    $num = 3;
    if($num<=3){
        echo "son igual al 3: "."<br>";
    }

    //el switch
    $num2 = 4;
    switch($num2){
        case 1: echo "soy el uno";
                break;
        case 4: echo "soy el cuatro";
                break;
        default: echo "fallaste";
                break;
    }

    //el while
    $i = 1;
    while($i<=10){
        echo $i . "<br>";
        $i++;
    }

    //do while
    $q = 1;
    do{
        echo $q;
        $q++;
    }while($q<=10);
    echo "<br>";

    //for
    for($w = 1; $w <=10; $w++){
        echo$w;
    }

    ?>

    <?php
    //recuperar datos enviados por el metodo POST

    @$nombre = $_POST['nombre'];
    @$correo = $_POST['correo'];

    echo "El nombre introducido es:". $nombre ."<br";
    echo "El correo introducido es:". $correo ;
    ?>

</body>
</html>