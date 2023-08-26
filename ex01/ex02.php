<?php 
$hour = date("H");
$msg;
$nome = "Pedro";

if($hour <= 12){
    $msg = "Bom dia! <br> ".$nome;
}else if($hour <= 18){
    $msg = "Bom tarde! <br> ".$nome;
}else{
    $msg = "Bom Noite! <br> ".$nome;
}

echo "<h1>".$msg."</h1>";
echo "<br>";

?>
