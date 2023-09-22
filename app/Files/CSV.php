<?php

namespace App\Files;

class CSV {

    // Método responsável por ler um CSV e retornar um Array de dados
    public static function lerArquivo($arquivo, $cabecalho = true, $delimitador = ',') {
        // Verifica se o arquivo existe
        if(!file_exists($arquivo)) die("arquivo não encontrado!");

        // Dados das linhas do arquivo
        $dados = [];

        // Abre o arquivo CSV com o parametro "r" para somente leitura
        $csv = fopen($arquivo, 'r');

        // Cabeçalho dos dados (primeira linha do CSV)
        $cabecalhoDados = $cabecalho ? fgetcsv($csv, 0, $delimitador) : [];

        // Itera o arquivo lendo todas as linhas
        while($linha = fgetcsv($csv, 0, $delimitador)){
            $dados[] = $cabecalho ? array_combine($cabecalhoDados, $linha) : $linha;
        }
        return $dados;
    }
}