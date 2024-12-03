# Projeto Todo List - Testes

Este projeto demonstra testes unitários em PHP utilizando PHPUnit.

## Requisitos

- PHP 8.0 ou superior
- Composer

## Estrutura do Projeto
```bash
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
```bash
composer init
```
### Instale o PHPUnit
```bash
composer require --dev phpunit/phpunit
```
## Como executar os testes
```bash
./vendor/bin/phpunit --testdox
```

### Testes específicos
```bash
./vendor/bin/phpunit --filter TodoTest --testdox
```

### Executar metodo de teste específico
```bash
./vendor/bin/phpunit --filter "TodoTest::testCriarTodo" --testdox
```