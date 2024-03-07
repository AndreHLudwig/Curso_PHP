<?php

include_once "backend.php";

?>

<h1>Seja Bem Vindo ao Site!</h1>
<p><?= $nome; ?> Veja as nossas Ofertas</p>

<h2> Confira nossos produtos:</h2>
<ul>
    <?php foreach($produtos as $produto): ?>
    <li><? echo $produto ?></li>
    <?endforeach; ?>
</ul>