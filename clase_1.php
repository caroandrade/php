<?php

  class Comida {
        //atributos
        private $nombre;
        private $origen;
        private $nivel;
        private $vegana;
        private $celiaca;

        //metodos
        //setters


    public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
        public function setOrigen($origen){
            $this->origen = $origen;
        }
        public function setNivel($nivel){
            $this-> nivel = $nivel;
        }
        public function setVegana($vegana){
            $this->vegana =$vegana;
        }
        public function setCeliaca($celiaca){
            $this->celiaca =$celiaca;
        }
        //getters
        public function getNombre()
        {
            return $this->nombre;
        }
        public function getOrigen()
    {
        return $this->origen;
    }
    public function getNivel(){
            return $this->nivel;

    }
    public function getVegana(){
            return $this->vegana;
    }
    public function getCeliaca(){
            return $this->celiaca;
    }


    }

    $asado = new Comida();
    $asado ->setNombre("asado");
    $asado ->setOrigen("argentina");
    $asado ->setNivel ("medio");
    $asado ->setVegana("no");
    $asado ->setCeliaca("Si");

echo 'Soy una comida:';
echo "<br>";

    echo "Nombre: ".$asado ->getNombre()." Origen: " .$asado->getOrigen()." Nivel: " .$asado->getNivel()." Vegana: ". $asado->getVegana()." Celiaca: " .$asado->getCeliaca();$pasta = new Comida();
$pasta ->setNombre("fideos");
$pasta ->setOrigen("italia");
$pasta ->setNivel ("alto");
$pasta ->setVegana("Si");
$pasta ->setCeliaca("No");
echo "<br>";
echo "otra comida: ";
echo "<br>";
echo "nombre  ".$pasta ->getNombre()." origen: " .$pasta->getOrigen() ." Nivel: ".$pasta->getNivel()." Vegana: ". $pasta->getVegana()." Celiaca: ". $pasta->getCeliaca();

class Postre extends Comida{
 }
$chocotorta= new Postre();
$chocotorta->setNombre("chocotorta");
$chocotorta->setOrigen("argentino");
$chocotorta->setNivel("Basico");
$chocotorta->setVegana("no");
$chocotorta->setCeliaca("no");
echo "<br>";
echo "<br>";
echo "<br>";
echo "Postre hereda los atributos y metodos de Comida<br>";
echo "<br>";
echo "estamos en la sección de postres <br>";
echo "nombre  ".$chocotorta ->getNombre()." origen: " .$chocotorta->getOrigen() ." Nivel: ".$chocotorta->getNivel()." Vegana: ". $chocotorta->getVegana()." Celiaca: ". $chocotorta->getCeliaca();

