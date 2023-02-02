<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body><br>
<div class="row">
        <div class="col-md-4"></div>
       <div class="col-md-4">
            <form action="" method="post">
                <label for="nombre">Entrer le nombre</label>
                <input type="number" name="number" class="form-control mb-3 col-md-3">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
    <?php

    if(isset($_POST['submit'])){
    verification_vote();

    }
    function verification_vote(){
        $age = $_POST['number'];
        if($age>=18){
         echo "Vous être éligible à voter";
        }else{
            echo "vous n'être pas élgible à voter";

        }
    }
    ?>
    </div>
</div>
</div>
</body>
</html>