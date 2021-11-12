<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP_OBJECTS_N1_2_MAIN</title>
</head>

<body>
    <p>Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().<br>
    A l'arxiu main defineixi dos objectes, un triangle i un rectangle i truca al mètode area de cadascun.</p>

    <form action="main.php" method="post">
        <label>Ample</label><input type="text" name="ample">
        <label>Alt</label><input type="text" name="alt">
        <button><input type="submit" name=""></button>
    </form>
    
    <?php

    include("shape.php");

    $triangle = new Triangle();
    $rectangle = new Rectangle();
    
    if(isset($_POST['ample'],$_POST['alt'])){
        
        $ample=$_POST['ample'];
        $alt=$_POST['alt'];

        $triangle->_construct($ample,$alt);
        echo "l'àrea del triangle és: ";
        $triangle->area();

        $rectangle->_construct($ample,$alt);
        echo"l'àrea del rectangle és: ";
        $rectangle->area();
    }
    
    ?>
    
</body>
</html>