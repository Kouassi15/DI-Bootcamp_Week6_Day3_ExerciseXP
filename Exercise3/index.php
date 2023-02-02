<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//     function test(){
//     $nombres = 0;
//     if($nombres>30 && $nombres>20){
//         $test = 30;
//     }else{
//         $test = 20;
//         echo "Le nombre superieur est :".$test;

//         if ($nombres>20 || $nombres>10) {
//             $test = 20;
//         }else{
//             $test = 10;
//         }
//         echo "Le nombre superieur est :".$test;
//     }
// }   test();
function testnmbre($nombres){
$test = $nombres > 30
? "est superieur que : 30 <br>"
: ($nombres > 20
? " est superieur que :20<br>"
: ($nombres >10
? " est superieur est : 10<br>"
: "Entrez un nombre au moins supérieur à 10!")); 
echo $nombres." : ".$test."\n";
}
  testnmbre(32);
  testnmbre(21);
  testnmbre(12);
  testnmbre(4);

    ?>
</body>
</html>