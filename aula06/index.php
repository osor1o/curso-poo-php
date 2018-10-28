<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 06</title>
</head>
<body>
<h1>Projeto Controle Remoto</h1>
<pre>
<?php

require_once 'ControleRemoto.php';

$c = new ControleRemoto;
$c->ligar();
$c->play();
$c->maisVolume();
$c->maisVolume();
$c->maisVolume();
$c->menosVolume();
$c->ligarMudo();
$c->abrirMenu();

?>
</pre>
</body>
</html>