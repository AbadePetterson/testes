<?php

namespace Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Todo;

class TodoTest extends TestCase
{
    public function testCriarTodo()
    {
        $todo = new Todo('Comprar pão');
        
        $this->assertEquals('Comprar pão', $todo->getTitulo());
        $this->assertFalse($todo->estaConcluida());
        $this->assertNotNull($todo->getId());
    }

    public function testMarcarComoConcluida()
    {
        $todo = new Todo('Estudar PHP');
        
        $todo->marcarComoConcluida();
        
        $this->assertTrue($todo->estaConcluida());
    }

    public function testDesmarcarComoConcluida()
    {
        $todo = new Todo('Estudar PHP');
        $todo->marcarComoConcluida();
        
        $todo->desmarcarComoConcluida();
        
        $this->assertFalse($todo->estaConcluida());
    }

    public function testAtualizarTitulo()
    {
        $todo = new Todo('Estudar PHP');
        
        $todo->atualizarTitulo('Estudar PHP e Testes');
        
        $this->assertEquals('Estudar PHP e Testes', $todo->getTitulo());
    }

    public function testTituloNaoPodeSerVazio()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Todo('');
    }
}