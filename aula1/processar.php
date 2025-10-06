<?php
  
$unidade1 = $_POST['unidade1'];
$unidade2 = $_POST['unidade2'];
$unidade3 = $_POST['unidade3'];

$media = ($unidade1 + $unidade2 + $unidade3) /3;
$situcao = '';

if ($media >= 7){
    $situcao = "aprovado!";

}elseif ($media >= 3 && $media <=7) {
    $situcao = "prova final!";

}else {
    $situcao = "recuperação";
}

echo "A sua média foi $media <br>O seu STATUS:  <b>$situacao<b>"

?>