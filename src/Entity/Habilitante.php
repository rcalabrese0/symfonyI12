<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habilitante
 *
 * @ORM\Table(name="habilitante", indexes={@ORM\Index(name="docente", columns={"docente"}), @ORM\Index(name="titulo", columns={"titulo"})})
 * @ORM\Entity
 */
class Habilitante
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
     * @var \Titulo|null
     *
     * @ORM\ManyToOne(targetEntity="Titulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="titulo", referencedColumnName="id")
     * })
     */
    private $titulo;

    /**
     * @var \Docente|null
     *
     * @ORM\ManyToOne(targetEntity="Docente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="docente", referencedColumnName="id")
     * })
     */
    private $docente;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?Titulo
    {
        return $this->titulo;
    }

    public function setTitulo(?Titulo $titulo): static
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getDocente(): ?Docente
    {
        return $this->docente;
    }

    public function setDocente(?Docente $docente): static
    {
        $this->docente = $docente;

        return $this;
    }


}
