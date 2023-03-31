<?php
class Suma{
    public $numero1;
    public $numero2;

    public function __construct($numero1,$numero2)
    {
        $this->numero1=$numero1;
        $this->numero2=$numero2;
    }

    public function sumar()
    {
        $operacion=$this->numero1 + $this->numero2;
        echo "". $this->numero1 . "+". $this->numero2. "=". $operacion;

    }

}
$calculadora = new Suma($_POST['numero1'],$_POST['numero2'],)
?>
<?php
$calculadora->sumar();
?>