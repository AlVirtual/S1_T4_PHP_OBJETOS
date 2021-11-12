
    <?php
//Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle //que heretin de Shape i que calculin respectivament l'àrea de la forma area().
//A l'arxiu main defineixi dos objectes, un triangle i un rectangle i truca al mètode area de cadascun.
    
    //Classe Pare
    class Shape{
        
        //Atributs
        protected $ample;
        protected $alt;
        
        //Metode Constructor
        public function _construct($am,$al){
            $this->ample=$am;
            $this->alt=$al;
        }
        
    }
    
    //Classes Filles
    class Triangle extends Shape{
        
        //Metode de clase
        public function area(){
            $calcul = ($this->ample*$this->alt)/2;
            echo $calcul . "<br>";
        }
    }

    class Rectangle extends Shape{
        
        //Metode de clase
        public function area(){
            $calcul = ($this->ample*$this->alt);
            echo $calcul . "<br>";
        }
    }
    
    
    ?>
