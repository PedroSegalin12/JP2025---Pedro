<?php
$nomes = ["Ana" , "Bruno" , "Carlos"];
foreach ($nomes as $nome) {
    echo "Aluno: $nome <br>";
}
echo "<br><br><br>";
?>

<?php
$nomes = ["Ana" , "Bruno" , "Carlos"];
foreach ($nomes as $index => $nome) {
    echo "Aluno: $index $nome <br>";
}
echo "<br><br><br>";
?>

<?php
$nomes = [1 => "Ana" , "Bruno" , "Carlos"];
foreach ($nomes as $index => $nome) {
    echo "Aluno: $index $nome <br>";
}
echo "<br><br><br>";
?>
<?php
$person = ["firstName" => "Ana" , "lastName" => "Segalin" , "Age" => "25"] ;
foreach ($person as $index => $value) {
    echo "$index $value "."<br>";
}
?>