# Projeto Todo List - Testes

Este projeto demonstra testes unitários em PHP utilizando PHPUnit.

## Requisitos

- PHP 8.0 ou superior
- Composer

## Estrutura do Projeto
```
projeto/
├── src/
│   └── Entity/
│       └── Todo.php
├── tests/
│   └── Entity/
│       └── TodoTest.php
├── phpunit.xml
└── composer.json

```

## Instalação 
composer init
### Instale o PHPUnit
composer require --dev phpunit/phpunit
## Como executar os testes
./vendor/bin/phpunit --testdox

### Testes específicos
./vendor/bin/phpunit --filter TodoTest --testdox

### Executar metodo de teste específico
./vendor/bin/phpunit --filter "TodoTest::testCriarTodo" --testdox