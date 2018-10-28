<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <pre>
        <?php

        require_once 'Caneta.php';

        $c1 = new Caneta('BIC', 'AZUL', '0.5');
        $c2 = new Caneta('FaberCastel', 'Vermelha', '0.4');

        print_r($c1);
        print_r($c2);

        /*
        $c1->setModelo('BIC');
        $c1->setPonta(0.5);

        print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";

        */

        ?>  
    </pre>
</body>
</html>
