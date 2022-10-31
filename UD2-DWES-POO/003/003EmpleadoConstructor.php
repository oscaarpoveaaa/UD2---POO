<!-- Copia la clase del ejercicio anterior y modifícala. 
Elimina los setters de nombre y apellidos, de manera que dichos datos se asignan 
mediante el constructor (utiliza la sintaxis de PHP8). Si el constructor recibe un tercer 
parámetro, será el sueldo del Empleado. Si no, se le asignará 1000€ como sueldo 
inicial. -->

<?php
class Empleado
{

    
    
  

    private $telefonos = [];

    public function __construct(private string $nombre,private string $apellidos,  private int $sueldo = 1000)
    {
        
    }

    /**
     * Get the value of sueldo
     */
    public function getSueldo()
    {
        return $this->sueldo;
    }

    /**
     * Set the value of sueldo
     *
     * @return  self
     */
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }

    /**
     * Get the value of telefonos
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }

    /**
     * Set the value of telefonos
     *
     * @return  self
     */
    public function setTelefonos($telefonos)
    {
        $this->telefonos = $telefonos;

        return $this;
    }

    function getNombreCompleto(): string
    {
        $nombrecompleto = $this->nombre . " " . $this->apellidos;
        return $nombrecompleto;
    }
    function debePagarImpuestos(): bool
    {
        if ($this->sueldo > 3333) {
            return true;
        } else {
            return false;
        }
    }

    public function anyadirTelefono(int $telefono): void
    {
        array_push($this->telefonos, $telefono);
    }

    public function listarTelefonos(): string
    {
        $lista_telefonos = "";
        for ($i = 0; $i < count($this->telefonos); $i++) {
            if ($i != (count($this->telefonos) - 1)) {
                $lista_telefonos = $lista_telefonos . $this->telefonos[$i] . ", ";
            } else {
                $lista_telefonos = $lista_telefonos . $this->telefonos[$i];
            }
        }
        return $lista_telefonos;
    }

    public function vaciarTelefonos(): void
    {
        foreach ($this->telefonos as $i => $value) {
            unset($this->telefonos[$i]);
        }
    }
}

$empleado1 = new Empleado("Oscar","Povea Campuzano",4332);
echo $empleado1->getNombreCompleto() . "<br>";
if ($empleado1->debePagarImpuestos()) {
    echo "Debe pagar impuestos <br>";
} else {
    echo "No debe pagar impuestos <br>";
}
$empleado1->anyadirTelefono(32321323);
$empleado1->anyadirTelefono(435435345);
$empleado1->anyadirTelefono(746456563);
$empleado1->anyadirTelefono(9767534543);
echo $empleado1->listarTelefonos();
$empleado1->vaciarTelefonos();
echo $empleado1->listarTelefonos();

?>