<?php

require __DIR__.'/vendor/autoload.php';

use \App\Files\CSV;

$dados = CSV::lerArquivo(__DIR__.'/files/arquivo-leitura.csv');

echo '<pre>';
print_r($dados);
echo '</pre>';