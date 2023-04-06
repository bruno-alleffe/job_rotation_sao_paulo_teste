<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 5</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <h4 class="mt-4 text-center">Inverter Uma String-</h4>
        <div style="width: 450px;" class="ms-auto me-auto mt-4">
            <form action="Questao_5.php" method="get">
                <label for="str" class="form-label">Digite uma string:</label>
                <input class="form-control mb-3" id="str" type="text" name="str" required/>
                <button type="submit" class="btn btn-primary w-100">Inverter</button>
            </form>
        </div>
    </div>
  

    <?php

        if (isset($_GET['str'])) {
            $str=$_GET['str'];
            $digitada = $str;
        
          
            for($i=strlen($str)-1, $j=0; $j<$i; $i--, $j++) {
                $temp = $str[$i];
                $str[$i] = $str[$j];
                $str[$j] = $temp;
            }
            
            echo "<h4 style='width: 450px;' class='bg-danger text-white text-center mt-4 p-2 ms-auto me-auto'>" . 'String Digitada: ' . $digitada . "</h4>";
            echo "<h4 style='width: 450px;' class='bg-success text-white text-center mt-4 p-2 ms-auto me-auto'>" . 'String Invertida : ' . $str . "</h4>";

        } 
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>