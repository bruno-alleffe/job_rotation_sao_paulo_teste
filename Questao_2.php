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
        <h4 class="mt-4 text-center">Varificar se um número faz parta da sequência de Fibonacci</h4>
        <div style="width: 450px;" class="ms-auto me-auto mt-4">
            <form action="Questao_2.php" method="get">
                <label for="number" class="form-label">Digite um número</label>
                <input class="form-control mb-3" id="number" type="number" name="number" required/>
                <button type="submit" class="btn btn-primary w-100">Calcular</button>
            </form>
        </div>
    </div>
  

    <?php

        if (isset($_GET['number'])) {
            $n=$_GET['number'];
        
            $ultimo=1;
            $penultimo=0;
            $nf=0;

            for($count=1 ; $count<=$n ; $count++){
                $atual = $ultimo + $penultimo;
                if($atual == $n){
                    echo "<h4 style='width: 450px;' class='bg-success text-white text-center mt-4 p-2 ms-auto me-auto'>" . $n ." Faz parte da sequência de Fibonacci </h4>";
                    $nf++;
                }

                if($atual > $n){
                    break;
                }
                
                $penultimo = $ultimo;
                $ultimo = $atual;
            }
            if($nf == 0){
                echo "<h4 style='width: 600px;' class='bg-danger text-white text-center mt-4 p-2 ms-auto me-auto'>" . $n ." Não faz parte da sequência de Fibonacci </h4>";
            }
        } 
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>