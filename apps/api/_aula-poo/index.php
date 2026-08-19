<?php

require __DIR__ . '/classes/Pessoa.php';
require __DIR__ . '/classes/Aluno.php';
require __DIR__ . '/classes/Professor.php';
require __DIR__ . '/classes/Disciplina.php';
require __DIR__ . '/classes/Matricula.php';

/* $pessoa1 = new Pessoa();
$pessoa1->nome = 'Gabriel';
$pessoa1->telefone = '42 123456789';
$pessoa1->email = 'gabriel@email.com'; */

$aluno1 = new Aluno();
$aluno1->ra = 'ES202617171';
$aluno1->nome = 'Gabriel';
$aluno1->telefone = '42 123456789';
$aluno1->email = 'gabriel@email.com';
// $aluno1->matriculas = [];

$professor1 = new Professor();
$professor1->nome = 'Prof A';
$professor1->email = 'prof@email.com';
$professor1->telefone = '42987654321';
$professor1->titulacao = 'Doutor';

$disciplina1 = new Disciplina();
$disciplina1->nome = 'POO Web';

$matricula1 = new Matricula();
$matricula1->data = '28/10/2026';
$matricula1->aluno = $aluno1;
$matricula1->disciplina = $disciplina1;

var_dump($matricula1);

die;