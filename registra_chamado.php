<?php

    session_start();
    #Abre arquivo genérico para armazenar os registros inseridos
    $arquivo = fopen('arquivo.txt', 'a');

    #remover o caracter # que será usado como separador
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    #Linha que será inserida no arquivo
    $texto = $_SESSION['id'] .'#'. $titulo .'#'. $categoria .'#'. $descricao.'#'. $_SESSION['tipo'] . PHP_EOL;

    fwrite ($arquivo, $texto);

    fclose($arquivo);

    header('Location: abrir_chamado.php')
?>