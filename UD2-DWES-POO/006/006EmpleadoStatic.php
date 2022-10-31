<!-- Copia la clase del ejercicio anterior y modifícala. Completa el 
siguiente método con una cadena HTML que muestre los datos de un empleado 
dentro de un párrafo y todos los teléfonos mediante una lista ordenada (para ello, 
deberás crear un getter para los teléfonos):
public static function toHtml(Empleado $emp): string -->

<?php
class Empleado
{



    public static $SUELDO_TOPE = 3333;

    private $telefonos = [];

    public function __construct(private string $nombre, private string $apellidos,  private int $sueldo = 1000)
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

    /**
     * Get the value of SUELDO_TOPE
     */
    public function getSUELDO_TOPE()
    {
        return $this->SUELDO_TOPE;
    }

    /**
     * Set the value of SUELDO_TOPE
     *
     * @return  self
     */
    public function setSUELDO_TOPE($SUELDO_TOPE)
    {
        $this->SUELDO_TOPE = $SUELDO_TOPE;

        return $this;
    }

    function getNombreCompleto(): string
    {
        $nombrecompleto = $this->nombre . " " . $this->apellidos;
        return $nombrecompleto;
    }
    function debePagarImpuestos(): bool
    {
        if (($this->sueldo) > (self::$SUELDO_TOPE)) {
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
    public static function toHtml(Empleado $emp): string{
        
        $lista_telefonos = "";
        for ($i = 0; $i < count($emp->telefonos); $i++) {
                $lista_telefonos = $lista_telefonos .  "<li>" . $emp->telefonos[$i] . "</li>";

        }
        $lista_telefonos ="<ol>$lista_telefonos</ol>";
        return $lista_telefonos;
    }
}


$empleado1 = new Empleado("Oscar", "Povea Campuzano",5000);
echo $empleado1->getNombreCompleto() . "<br>";
if ($empleado1->debePagarImpuestos()) {
    echo "Debe pagar impuestos <br>";
} else {
    echo "No debe pagar impuestos <br>";
}
$empleado1->anyadirTelefono(32321323);
$empleado1->anyadirTelefono(435435345);
echo $empleado1->listarTelefonos();
echo $empleado1->toHtml($empleado1);
?>
