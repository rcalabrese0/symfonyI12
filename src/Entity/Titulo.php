<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Titulo
 *
 * @ORM\Table(name="titulo", indexes={@ORM\Index(name="institucion", columns={"institucion"})})
 * @ORM\Entity
 */
class Titulo
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
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="anio_egreso", type="integer", nullable=true)
     */
    private $anioEgreso;

    /**
     * @var float|null
     *
     * @ORM\Column(name="promedio", type="float", precision=10, scale=0, nullable=true)
     */
    private $promedio;

    /**
     * @var \Institucion|null
     *
     * @ORM\ManyToOne(targetEntity="Institucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="institucion", referencedColumnName="id")
     * })
     */
    private $institucion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getAnioEgreso(): ?int
    {
        return $this->anioEgreso;
    }

    public function setAnioEgreso(?int $anioEgreso): static
    {
        $this->anioEgreso = $anioEgreso;

        return $this;
    }

    public function getPromedio(): ?float
    {
        return $this->promedio;
    }

    public function setPromedio(?float $promedio): static
    {
        $this->promedio = $promedio;

        return $this;
    }

    public function getInstitucion(): ?Institucion
    {
        return $this->institucion;
    }

    public function setInstitucion(?Institucion $institucion): static
    {
        $this->institucion = $institucion;

        return $this;
    }


}
