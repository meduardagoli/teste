<?php
include('conexao.php');
$idproduto = $_POST['idproduto'];
$qtdvenda  = $_POST['qtdvenda'];

echo $qtdvenda;



$sql = "UPDATE tblprodutos set est='$est'
where idproduto='$idproduto'";

$qry = mysqli_query($conn,$sql);
if($qry){
    header("Location:index.php");
}else{
   echo "Deu ruim... <a href='index.php'>Voltar</a>";

}