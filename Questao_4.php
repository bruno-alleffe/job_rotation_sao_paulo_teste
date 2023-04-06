<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <h5 class="mt-4 ms-4">4) Dado o valor de faturamento mensal de uma distribuidora, detalhado por estado:
            <br><br>• SP – R$67.836,43
            <br>• RJ – R$36.678,66
            <br>• MG – R$29.229,88
            <br>• MG – R$27.165,48
            <br>• Outros – R$19.849,53
            <br><br>Escreva um programa na linguagem que desejar onde calcule o percentual de representação que cada estado teve dentro do valor total mensal da distribuidora.
        </h5>
    </div>
  

    <?php
        $SP = 67836.43;
        $RJ = 36678.66;
        $MG = 29229.88;
        $ES = 27165.48;
        $Outros = 19849.53;

        $total = array($SP, $RJ, $MG, $ES, $Outros);
        $sumTotal = array_sum($total);

        function descobrir_porcentagem(float $valor_base, float $valor): float{
             return $valor / $valor_base * 100;
        }
    
        echo "<h5 style='width: 550px;' class='bg-light mt-4 p-2 ms-4'>" . 'Valor total mensal da distribuidora: ' . number_format($sumTotal, 2, ',', '.') . "</h5>";
        echo "<h5 style='width: 700px;' class='bg-primary text-white mt-4 p-2 ms-4'>" . 'O percentual de representação do valor total mensal em SP: ' . number_format(descobrir_porcentagem($sumTotal, $SP), 2, ',', '.') . "% </h5>";
        echo "<h5 style='width: 700px;' class='bg-danger text-white mt-4 p-2 ms-4'>" . 'O percentual de representação do valor total mensal em RJ: ' . number_format(descobrir_porcentagem($sumTotal, $RJ), 2, ',', '.') . "% </h5>";
        echo "<h5 style='width: 700px;' class='bg-success text-white mt-4 p-2 ms-4'>" . 'O percentual de representação do valor total mensal em MG: ' . number_format(descobrir_porcentagem($sumTotal, $MG), 2, ',', '.') . "% </h5>";
        echo "<h5 style='width: 700px;' class='bg-dark text-white mt-4 p-2 ms-4'>" . 'O percentual de representação do valor total mensal em ES: ' . number_format(descobrir_porcentagem($sumTotal, $ES), 2, ',', '.') . "% </h5>";
        echo "<h5 style='width: 700px;' class='bg-secondary text-white mt-4 p-2 ms-4'>" . 'O percentual de representação do valor total mensal em Outros: ' . number_format(descobrir_porcentagem($sumTotal, $Outros), 2, ',', '.') . "% </h5>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
