<?php
include('conexao.php');
$idproduto = $_GET['idproduto'];

$sql = "select * from tblprodutos where idproduto='$idproduto'";
$qry = mysqli_query($conn,$sql);
$linha = mysqli_fetch_array($qry);
$produto =   $linha['produto'];
$est =       $linha['est'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      <h1>Vendas</h1>
      <hr>


<form action="updateatualizavenda.php" method="post">
id         <input type="text" name="idproduto"  value="<?php echo $idproduto ?>" readonly>   
Produto    <input type="text" name="produto"    value="<?php echo $produto ?>">
Quantidade <input type="text" name="qtdvenda">
<input type="submit" value="Vender">

</form>     
</body>
</html>
 
