<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <br>
    <div class="row">
        <div class="col-md-4"></div>
       <div class="col-md-4">
            <form action="" method="post">
                <label for="aire">Entrer le nombre</label>
                <input type="number" name="number1" class="form-control mb-3 col-md-3">
                <input type="number" name="number2" class="form-control mb-3 col-md-3">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php
            //verification du bouton
            if(isset($_POST['submit'])){
                //verification dse inputs
                $number1 = $_POST['number1'];
                $number2 = $_POST['number2'];

                //appel la fonction
               echo "l'aire du rectangle est :". calculerair($number1,$number2);
            }
            
            function calculerair($largeur,$longeur){
                $air = $longeur*$largeur;
                return $air;
            }
            ?>
        </div>
        <div class="col-md-4">
    </div>
</body>
</html>