<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP_OBJECTS_N2_1_MAIN</title>
</head>
<body>

<p>Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.<br>
Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.<br>
Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada de el dau en qüestió.<br>
Crea finalment el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus<br>
Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.</p>
	
    <?php

    require("pokerdice.php");
  
    $i=0;
    
    while($i<5){
        $dau = new PockerDice();
        $caraDau= $dau ->tirarDau();
        $nomCara= $dau ->shapeName($caraDau);
        echo "Dau 1: $nomCara1 <br>";
        
        $i++;
    }
    echo PockerDice::getTotalThrows();

	?>

</body>
</html>