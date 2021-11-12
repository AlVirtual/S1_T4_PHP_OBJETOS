<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP_OBJECTS_N2_1_POKERDICE</title>
</head>
<body>

	
	<?php

/*Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.
Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.
Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada de el dau en qüestió.
Crea finalment el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus
Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.*/
    
    //Clase Pare
    class PockerDice{
        private $dadopoker=array("As","K","Q","J","7","8");
        private static $tiradas = 0;
        
        public function tirarDau(){
            $numale = rand(0,5);
            self::$tiradas++;
            return $numale;
        }

        public function shapeName($num){
            $cara = $this->dadopoker[$num];
            return $cara;
        }
                          
        static function getTotalThrows(){
            echo self::$tiradas;
            
        }
        
        static function setTirada($tirada){
            self::$tiradas = $tirada;
        }
        
    }

	?>

</body>
</html>