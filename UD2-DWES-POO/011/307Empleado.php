<?php
include_once "010PersonaS.php";
class Empleado extends Persona
{

    public static $SUELDO_TOPE = 3333;

    private $telefonos = [];

    public function __construct(string $nombre,string $apellidos,int $edad,private int $sueldo = 1000)
    {
        parent::__construct($nombre,$apellidos,$edad);
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
    function debePagarImpuestos(): bool
    {
        if ($this->edad > 21){
            if (($this->sueldo) > (self::$SUELDO_TOPE)) {
                return true;
            } else {
                return false;
            }
        }else {
            echo "no tiene la edad <br>";
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

    public function __toString() :string
    {
        return __CLASS__. "[Nombre: $this->nombre][Apellidos: $this->apellidos][Edad: $this->edad][Sueldo: $this->sueldo]<br>";
    }

}

$empleado1 = new Empleado("Oscar", "Povea Campuzano",20,3454);
echo $empleado1;
echo $empleado1->getNombreCompleto() . "<br>";
if ($empleado1->debePagarImpuestos()) {
    echo "Debe pagar impuestos <br>";
} else {
    echo "No debe pagar impuestos <br>";
}
$empleado1->anyadirTelefono(32321323);
$empleado1->anyadirTelefono(43543534    );

echo $empleado1->listarTelefonos();
echo $empleado1->toHtml($empleado1);

?>