<?php

include 'contato.php';
include 'agenda.php';

$contato1 = new Contato();
$contato1->setNome("Pessoa 1");
$contato1->setTel("(00) 00000-0000");

$contato2 = new Contato();
$contato2->setNome("Pessoa 2");
$contato2->setTel("(00) 00000-0001");

$contato3 = new Contato();
$contato3->setNome("Pessoa 3");
$contato3->setTel("(00) 00001-0000");

$agenda = new Agenda();
$agenda -> addAgenda($contato1);
echo "\n****Agenda****\n\n  contato 1: \nNome: {$contato1 -> getNome()}\nTel: {$contato1 -> getTel()}\n\n  contato 2: \nNome: {$contato2 -> getNome()}\nTel: {$contato2 -> getTel()}\n\n  contato 3: \nNome: {$contato3 -> getNome()}\nTel: {$contato3 -> getTel()}\n";
?>
