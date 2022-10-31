<!-- Copia las clases del ejercicio anterior y modifícalas.
Añade en Persona un atributo edad
A la hora de saber si un empleado debe pagar impuestos, lo hará siempre y cuando 
tenga más de 21 años y dependa del valor de su sueldo. Modifica todo el código 
necesario para mostrar y/o editar la edad cuando sea necesario. -->

<?php
class Persona{
    public string $nombre;
    public string $apellidos;
    public int $edad;

    public function __construct(string $nombre,string $apellidos,int $edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }
    function getNombreCompleto(): string
    {
        $nombrecompleto = $this->nombre . " " . $this->apellidos;
        return $nombrecompleto;
    }
}

?>

