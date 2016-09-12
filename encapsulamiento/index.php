<?php 

 class Persona{
     public $nombre;

   public $apellido;

   private $edad = 0; 

   public function __construct($nom="", $ape="", $e=""){

         $this->nombre = $nom;

         $this->apellido= $ape;

         $this->edad = $e;

    }

   public function imp(){

       //return $this->edad;
  return 'Mi nombre es '.$this->nombre.' '.$this->apellido.' y tengo '.$this->edad.' Años';
   }

}

class trabajo extends Persona{

    public $trabajos;

    public $pruebas;

    public function trabajar($job){

        $this->trabajos = $job;

    }

    public function imprimir(){

       return 'Mi nombre es '.$this->nombre.' '.$this->apellido.' y tengo '.$this->edad.' Años y trabajo en  '.$this->trabajos;

    }  

 }

$persona = new Persona('Pepito','Perez',24);
echo $persona->imp();

$trabajo = new trabajo('david','aristizabal',30);
echo $trabajo->imp();
$trabajo->trabajar('programacion');
echo $trabajo->imprimir();

?>