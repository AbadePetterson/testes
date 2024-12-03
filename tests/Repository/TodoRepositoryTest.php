<?php

namespace Tests\Repository;

use PHPUnit\Framework\TestCase;
use App\Entity\Todo;
use App\Repository\TodoRepository;

class TodoRepositoryTest extends TestCase
{
    private TodoRepository $repository;

    protected function setUp(): void
    {
        $this->repository = new TodoRepository();
    }

    public function testAdicionarTodo()
    {
        $todo = new Todo('Teste');
        
        $this->repository->salvar($todo);
        
        $this->assertEquals($todo, $this->repository->buscarPorId($todo->getId()));
    }

    public function testListarTodos()
    {
        $todo1 = new Todo('Teste 1');
        $todo2 = new Todo('Teste 2');
        
        $this->repository->salvar($todo1);
        $this->repository->salvar($todo2);
        
        $todos = $this->repository->listarTodos();
        
        $this->assertCount(2, $todos);
        $this->assertContains($todo1, $todos);
        $this->assertContains($todo2, $todos);
    }

    public function testRemoverTodo()
    {
        $todo = new Todo('Teste');
        $this->repository->salvar($todo);
        
        $this->repository->remover($todo->getId());
        
        $this->assertNull($this->repository->buscarPorId($todo->getId()));
    }

    public function testAtualizarTodo()
    {
        $todo = new Todo('Teste');
        $this->repository->salvar($todo);
        
        $todo->atualizarTitulo('Teste Atualizado');
        $this->repository->atualizar($todo);
        
        $todoAtualizado = $this->repository->buscarPorId($todo->getId());
        $this->assertEquals('Teste Atualizado', $todoAtualizado->getTitulo());
    }
}