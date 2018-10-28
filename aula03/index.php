<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'Caneta.php';

        $c1 = new Caneta;
        $c1->modelo = 'BIC Cristal';
        $c1->cor = 'azul';
        //$c1->ponta = 0.5;
        //$c1->carga = 99;
        //$c1->tampada = true;

        $c1->tampar();
        

        $c1->rabiscar('oi');
        

        print_r($c1);

    ?>
    </pre>
</body>
</html>