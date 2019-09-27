<?php

class Perro
{
    protected $raza = "Dalmata";
    public $color= "Blanco y negro";

    public function ladrar()
    {
        echo "Guau guau!" . "<br>";
        echo $this->raza;
    }
}
$objeto = new Perro();
//echo $objeto->raza = "Rotweiller";
echo $objeto->ladrar();

/*
                            EJERCICIOS

1)





1)
2)Mostrar una propiedad protegida metiendola en un metodo público





*/