<?php

namespace App\Entity;

class Todo
{
    private string $id;
    private string $titulo;
    private bool $concluida;
    private \DateTime $criadoEm;

    public function __construct(string $titulo)
    {
        if (empty(trim($titulo))) {
            throw new \InvalidArgumentException("O título não pode ser vazio");
        }
        
        $this->id = uniqid();
        $this->titulo = $titulo;
        $this->concluida = false;
        $this->criadoEm = new \DateTime();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function estaConcluida(): bool
    {
        return $this->concluida;
    }

    public function getCriadoEm(): \DateTime
    {
        return $this->criadoEm;
    }

    public function marcarComoConcluida(): void
    {
        $this->concluida = true;
    }

    public function desmarcarComoConcluida(): void
    {
        $this->concluida = false;
    }

    public function atualizarTitulo(string $novoTitulo): void
    {
        if (empty(trim($novoTitulo))) {
            throw new \InvalidArgumentException("O título não pode ser vazio");
        }
        $this->titulo = $novoTitulo;
    }
}