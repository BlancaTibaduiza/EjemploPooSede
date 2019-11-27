<?php


namespace App\Modelos;



class Persona{
    private $Nombre;
    private $Apellido;
    private $Telefono;
    Private $Tipo_Documento;
    private $Documento ;

    /**
     * Persona constructor.
     * @param $Nombre
     * @param $Apellido
     * @param $Telefono
     * @param $Tipo_Documento
     * @param $Documento
     */
    public function __construct($Nombre, $Apellido, $Telefono, $Tipo_Documento, $Documento)
    {
        $this->Nombre = $Nombre;
        $this->Apellido = $Apellido;
        $this->Telefono = $Telefono;
        $this->Tipo_Documento = $Tipo_Documento;
        $this->Documento = $Documento;



    }


    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->Apellido;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->Telefono;
    }

    /**
     * @return mixed
     */
    public function getTipoDocumento()
    {
        return $this->Tipo_Documento;
    }

    /**
     * @return mixed
     */
    public function getDocumento()
    {
        return $this->Documento;
    }

    /**
     * @param mixed $Nombre
     */
    public function setNombre($Nombre): void
    {
        $this->Nombre = $Nombre;
    }

    /**
     * @param mixed $Apellido
     */
    public function setApellido($Apellido): void
    {
        $this->Apellido = $Apellido;
    }

    /**
     * @param mixed $Telefono
     */
    public function setTelefono($Telefono): void
    {
        $this->Telefono = $Telefono;
    }

    /**
     * @param mixed $Tipo_Documento
     */
    public function setTipoDocumento($Tipo_Documento): void
    {
        $this->Tipo_Documento = $Tipo_Documento;
    }

    /**
     * @param mixed $Documento
     */
    public function setDocumento($Documento): void
    {
        $this->Documento = $Documento;
    }



    public function mostrardatos ()
    {
        echo"<h4>los datos de la persona son :</h4>";
        echo "ul";
        echo"<li><strong>Nombre</strong>".$this->getNombre()."</li>";
        echo "<li><strong>Apellidos</strong>".$this->getApellido()."</li>";
        echo"<li><strong>Telefono</strong>".$this->getTelefono()."</li>";
        echo "<li><strong>Tipo_Documento </strong>".$this->getTipoDocumento()."</li>";
        echo"<li><strong>Documento</strong>".$this->getDocumento()."</li>";
    }
}