<!-- Copia las clases del ejercicio anterior y modifícalas.
Transforma Persona a una clase abstracta donde su método estático toHtml(Persona $p)
tenga que ser redefinido en todos sus hijos. -->

<?php
abstract class Persona{
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

    public static function toHtml(Persona $p): string {
        if ($p instanceof Empleado) {
            $lista_telefonos = "";
        for ($i = 0; $i < count($p->telefonos); $i++) {
                $lista_telefonos = $lista_telefonos .  "<li>" . $p->telefonos[$i] . "</li>";

        }
        $lista_telefonos ="<ol>$lista_telefonos</ol>";
        return $lista_telefonos;
        }
    }
}

?>