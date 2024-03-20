<?php

$pessoas = [
    'Matheus' => 29,
    'André' => 27,
    "Marcelo" => 33,
    'Diego' => 20
];

?>

<table border = "1" >
    <tr>
       <th>Nome</th> 
       <th>Idade</th> 
    </tr>
    <?php foreach($pessoas as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
    <?php endforeach; ?>
</table>