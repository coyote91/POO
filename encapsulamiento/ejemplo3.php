<?php 

/**
* 
*/
class A 
{ 
    static $p = "davd";
    protected $edad = "30";
    const CONSTANTE ="Hola soy : " ;

	function z()
	{
		echo self::CONSTANTE ." ". A::$p;
	}

    protected function mifuncion()
    {
          echo "soy un metodo padre";

    }

    public function decirhola()
    {

    	echo "hola";
    }

}


class B extends A
{
	 static $r = "Rosa ";

	 use Decirmundo;

	public static function x()
	{
		echo "<br>" . parent::CONSTANTE ." ". self::$r ." y tengo "; 

		parent::mifuncion();
		parent::Decirhola();
	}
}

trait Decirmundo{
 
 public function decirhola()
 {
    echo "Hola Mundo";

 }


}

$a = new A();
$a->z();


$b = new B();
//$b->x();
$b->Decirhola();

B::x();



class Coche {
    protected $velocidad = 0;

    function setVelocidad($velocidad) {
        $this->velocidad = (int) $velocidad;
    }
}

Class Deportivo extends Coche{

    function aumentarVelocidad() {
        echo $this->velocidad  = $this->velocidad * 2;
    }
}

$deportivo = new Deportivo();
$deportivo->setVelocidad(100);
$deportivo->aumentarVelocidad(); 

?>