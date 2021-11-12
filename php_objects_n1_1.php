<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP_OBJECTS_N1</title>
</head>

<body>
    
    <!--------Exercici 1-------->
    <h1>Excercici 1</h1>
    <p>Crea una classe Employee defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi com a paràmetres el nom i sou. Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha o no pagar impostos (si el sou supera 6000 paga impostos).</p>
    

    <form action="php_objects_n1_1.php" method="post">
        <label>Nom </label><input type="text" name="persona">
        <label>Sou </label><input type="number" name="salari">
        <button><input type="submit" name=""></button>
    </form>

    <?php

    
    class Employee{
        
        //Atributs
        private $nom;
        private $sou;
        
        //Metode constructor
        public function initialize($name,$earn){
            $this->nom=$name;
            $this->sou=$earn;   
        }
        
        //Metode imprimir
        public function prin(){
            echo $this->nom;
            if ($this->sou <= 6000){
                echo " no ha de pagar impostos <br>";
            }else{
                echo " ha de pagar impostos <br>";     
            }
        } 
  
    }

    if(isset($_POST['persona'],$_POST['salari'])){
        $persona = $_POST['persona'];
        $salari = $_POST['salari'];
    
        //Creació i Asignació d'objectes
        $empleat1=new Employee();
        $empleat1->initialize($persona,$salari);
        $empleat1->prin();
    }
       
    ?>

</body>
</html>