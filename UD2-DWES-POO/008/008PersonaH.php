<!-- Copia las clases del ejercicio anterior y modifícalas. Crea en Persona 
el método estático toHtml(Persona $p), y modifica en Empleado el mismo método 
toHtml(Persona $p), pero cambia la firma para que reciba una Persona como 
parámetro.-->

<?php


class Persona{
    public string $nombre;
    public string $apellidos;

    public function __construct(string $nombre,string $apellidos)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    function getNombreCompleto(): string
    {
        $nombrecompleto = $this->nombre . " " . $this->apellidos;
        return $nombrecompleto;
    }
}

?>

