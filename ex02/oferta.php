<?php 
$day = Date("w");
$semana = [
    "Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sabado"
];
$comida = [
    "Caseirão","Madalê","Hamburgão","Meats","Zap Zap","Zé do Hamburguer","Insano"
];
$preco = [
    "18,00","19,50","15,00","9,50","10,50","20,25","15,00"
];


echo "
<p>Hoje é $semana[$day]</p>
<p>Hambuguer do dia</p>
<h1>$comida[$day]</h1><h3>$preco[$day]</h3>
";
?>