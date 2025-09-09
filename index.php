<?php
echo "Buenas"; 
    

      
    $Oi = "Está certo!!";
        echo '<h2>$Oi</h2>'; 

        $Oi = "Está certo!!";
        echo "<h2>$Oi</h2>"; 

    
   echo "Agora são " . date("d/m/Y H:i:s");
   
    
    $nome ="Pedro";
    $idade ="17";
    echo"Meu nome é $nome e tenho $idade anos <br>";

$bool = true;

echo $bool ? "Yes" : "No"; /*ou if ($bool) {
    echo "Yes";
} else {
    echo "no";
}
*/
$var = null;
echo $var ?? "Não existe";

$a = 10;
$b = 3;
$c = 12;
echo $a / $b;
echo $a * $b - $c + $c
?>