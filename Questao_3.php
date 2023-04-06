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
        <h5 class="mt-4 ms-4">3) Dado um vetor que guarda o valor de faturamento diário de uma distribuidora, faça um programa, na linguagem que desejar, que calcule e retorne:
            <br>• O menor valor de faturamento ocorrido em um dia do mês;
            <br>• O maior valor de faturamento ocorrido em um dia do mês;
            <br>• Número de dias no mês em que o valor de faturamento diário foi superior à média mensal.</h5>
    </div>
  

    <?php
        $json = file_get_contents("dados.json");
        $data = json_decode($json);
        $dia_valor = array();
    
        foreach ($data as $key => $value) {
            // echo 'dia: ' . $value->dia . '<br>';
            // echo $value->valor .'<br><br>';
            
            if($value->valor > 0){
                $dia_valor[$value->dia] = $value->valor;
            }
            
        }
        $menorValor = min($dia_valor);
        $maiorValor = max($dia_valor);
        $mediaMensal = array_sum($dia_valor) / count($dia_valor);

        echo "<h5 style='width: 700px;' class='bg-primary text-white mt-4 p-2 ms-4'>" . 'A média mensal do faturamento tem o valor de R$ ' . number_format($mediaMensal, 2, ',', '.') . "</h5>";
        echo "<h5 style='width: 700px;' class='bg-danger text-white mt-4 p-2 ms-4'>" . 'Menor valor de faturamento ocorreu no dia: ' . array_search($menorValor, $dia_valor) . ' com valor de R$ ' . number_format(min($dia_valor), 2, ',', '.') . "</h5>";
        echo "<h5 style='width: 700px;' class='bg-success text-white mt-4 p-2 ms-4'>" . 'Maior valor de faturamento ocorreu no dia: ' . array_search($maiorValor, $dia_valor) . ' com valor de R$ ' . number_format(max($dia_valor), 2, ',', '.') . "</h5>";
        
        $numeroDias = 0;
        foreach ($dia_valor as $key => $value) {
            if($value > $mediaMensal) {
                $numeroDias++;
            }
        }
        echo "<h5 style='width: 700px;' class='bg-dark text-white mt-4 p-2 ms-4'>" . 'Número de dias no mês em que o valor de faturamento diário foi superior à média mensal: ' . $numeroDias . " Dias </h5>";

    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
