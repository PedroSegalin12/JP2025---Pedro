
<?php
// Primeiros passos
date_default_timezone_set ('UTC-3');
$mensagem = "Olá, mundo do PHP!";
$data = date('d/m/Y H:i');
?>
<!doctype html>
<html lang="pt-br">
<meta charset="utf-8">
<title>Aula 1</title>
<body>
  <h1><?= htmlspecialchars($mensagem) ?></h1>
  <p>Agora: <?= $data ?></p>
  <p>Agora: <?= $_GET['info'] ?></p>;
  <p><a href="?info=1">Ver phpinfo (local)</a></p>
  <?php if (isset($_GET['info'])) phpinfo(); ?>
  echo $mensagem;
</body>
</html>
<?php
