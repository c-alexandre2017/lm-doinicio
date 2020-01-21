<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClienteRepository")
 */
class Cliente
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $id_pessoa;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $razao_social;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPessoa(): ?string
    {
        return $this->id_pessoa;
    }

    public function setIdPessoa(string $id_pessoa): self
    {
        $this->id_pessoa = $id_pessoa;

        return $this;
    }

    public function getRazaoSocial(): ?string
    {
        return $this->razao_social;
    }

    public function setRazaoSocial(string $razao_social): self
    {
        $this->razao_social = $razao_social;

        return $this;
    }
}
