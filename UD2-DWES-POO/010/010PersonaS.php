<!-- Copia las clases del ejercicio anterior y modifícalas.
Añade nuevos métodos que hagan una representación de todas las propiedades de las 
clases Persona y Empleado, de forma similar a los realizados en HTML, pero sin que 
sean estáticos, de manera que obtenga los datos mediante $this.
function public __toString(): string -->

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