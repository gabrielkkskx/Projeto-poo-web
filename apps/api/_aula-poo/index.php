<?php

require __DIR__ . '/classes/Pessoa.php';

$pessoa1 = new Pessoa();
$pessoa1->nome = 'Gabriel';
$pessoa1->telefone = '42 123456789';
$pessoa1->email = 'gabriel@email.com';

var_dump($pessoa1);

die;