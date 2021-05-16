<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<?php 
require_once('functions.php');
 ?>
<body>
<h3>Escolha um nome na lista para a pesquisa</h3>
<li>Luke</li>
<li>C-3PO</li>
<li>R2-D2</li>
<li>Darth Vader</li>
<li>Leia Organa</li>
<form action="index.php" method="get">
<input type="text" name="name">
<button type="submit">Search</button>
<button type="submit" value="all">All</button>
</form>

<?php

 echo  "<pre>" . json_encode( $nameGet, JSON_PRETTY_PRINT). "</pre>";
?>
</body>
</html>