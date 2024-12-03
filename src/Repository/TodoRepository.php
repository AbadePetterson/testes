<?php

namespace App\Repository;

use App\Entity\Todo;

class TodoRepository
{
    private array $todos = [];

    public function salvar(Todo $todo): void
    {
        $this->todos[$todo->getId()] = $todo;
    }

    public function buscarPorId(string $id): ?Todo
    {
        return $this->todos[$id] ?? null;
    }

    public function listarTodos(): array
    {
        return array_values($this->todos);
    }

    public function remover(string $id): void
    {
        unset($this->todos[$id]);
    }

    public function atualizar(Todo $todo): void
    {
        $this->todos[$todo->getId()] = $todo;
    }
}