<?php
include("BancoDados.php");
include("Elemento.php");
include("Grupo.php");


$Elementos = new Elemento();
$Elementos->validarDados();

$Grupos = new Grupo();
$Grupos->getNomeGrupo();

echo "<strong>Simbulo:</strong> " . $Elementos->getSimbolo() . "<br>";
echo "<strong>Nome:</strong> " . $Elementos->getNome() . "<br>";
echo "<strong>Número Atômico:</strong> " . $Elementos->getNmrAtomico() . "<br>";
echo "<strong>Massa Atômica:</strong> " . $Elementos->getMassaAtomica() . "<br>";
echo "<strong>Grupo:</strong> " . $Grupos->getNameGrupo();
?>


