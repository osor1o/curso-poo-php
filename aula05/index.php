<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 05</title>
</head>
<body>
    <?php
        require_once 'ContaBanco.php';

        $p1 = new ContaBanco;
        $p2 = new ContaBanco;

        $p1->abrirConta("CC");
        $p1->setDono("Jubileu");
        $p1->setNumConta(1111);
        
        $p2->abrirConta("CP");
        $p2->setDono("Creuza");
        $p2->setNumConta(2222);

        $p1->depositar(300);
        $p2->depositar(500);

        $p2->sacar(100);

        $p1->pagarMensalidade();
        $p2->pagarMensalidade();

        $p1->sacar(338);
        $p2->sacar(530);

        $p1->fecharConta();
        $p2->fecharConta();

        echo '<pre>';

        print_r($p1);

        print_r($p2);
    ?>
</body>
</html>