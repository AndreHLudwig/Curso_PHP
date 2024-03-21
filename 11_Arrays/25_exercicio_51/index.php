<?php

$ranking = [
    "Matheus" => 200,
    "João" => 54,
    "Max" => 475,
    "Loris" => 268,
    "Mercia" => 123,
    "Otavio" => 22,
    "Linda" => 96,
];

arsort($ranking);

?>

<h1>Ranking:</h1>
<ol>
    <?php foreach($ranking as $pessoa => $pontuação): ?>
        <li><?= $pessoa ?> -> <?= $pontuação?> pontos</li>
    <?php endforeach; ?>
</ol>