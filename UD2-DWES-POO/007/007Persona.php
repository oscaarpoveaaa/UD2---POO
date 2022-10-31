<!-- Copia la clase del ejercicio anterior en 307Empleado.php y 
modifícala.Crea una clase Persona que sea padre de Empleado, de manera que 
Persona contenga el nombre y los apellidos, y en Empleado quede el salario y los 
teléfonos. -->

<?php 
class Persona{
    public string $nombre;
    public string $apellidos;

    public function __construct(string $nombre,string $apellidos)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }
}

?>

