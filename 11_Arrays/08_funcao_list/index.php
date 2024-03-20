<?php

$pessoa = ["André", 27, "Programador", "castanho"];

print_r($pessoa);
echo "<br";

list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;
echo "<br>";
echo "<br>";

echo "$nome <br>";
echo "$idade <br>";
echo "$profissao <br>";
echo "$corDosOlhos <br>";