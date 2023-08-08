<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Localidad;
use App\Entity\Pais;
use App\Entity\Genero;
/**
 * Persona
 *
 * @ORM\Table(name="persona", indexes={@ORM\Index(name="genero", columns={"genero"}), @ORM\Index(name="nacionalidad", columns={"nacionalidad"}), @ORM\Index(name="localidad_id", columns={"localidad_id"})})
 * @ORM\Entity
 */
class Persona
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="string", length=25, nullable=true)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="apellido", type="string", length=25, nullable=true)
     */
    private $apellido;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_nacimiento", type="date", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dni_pasaporte", type="string", length=15, nullable=true)
     */
    private $dniPasaporte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono", type="string", length=20, nullable=true)
     */
    private $telefono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domicilio", type="string", length=50, nullable=true)
     */
    private $domicilio;

    /**
     * @var \Localidad|null
     *
     * @ORM\ManyToOne(targetEntity="Localidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="localidad_id", referencedColumnName="id")
     * })
     */
    private $localidad;

    /**
     * @var \Pais|null
     *
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nacionalidad", referencedColumnName="id")
     * })
     */
    private $nacionalidad;

    /**
     * @var \Genero|null
     *
     * @ORM\ManyToOne(targetEntity="Genero")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="genero", referencedColumnName="id")
     * })
     */
    private $genero;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(?string $apellido): static
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getFechaNacimiento(): ?\DateTimeInterface
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento(?\DateTimeInterface $fechaNacimiento): static
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    public function getDniPasaporte(): ?string
    {
        return $this->dniPasaporte;
    }

    public function setDniPasaporte(?string $dniPasaporte): static
    {
        $this->dniPasaporte = $dniPasaporte;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): static
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getDomicilio(): ?string
    {
        return $this->domicilio;
    }

    public function setDomicilio(?string $domicilio): static
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    public function getLocalidad(): ?Localidad
    {
        return $this->localidad;
    }

    public function setLocalidad(?Localidad $localidad): static
    {
        $this->localidad = $localidad;

        return $this;
    }

    public function getNacionalidad(): ?Pais
    {
        return $this->nacionalidad;
    }

    public function setNacionalidad(?Pais $nacionalidad): static
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    public function getGenero(): ?Genero
    {
        return $this->genero;
    }

    public function setGenero(?Genero $genero): static
    {
        $this->genero = $genero;

        return $this;
    }


}
