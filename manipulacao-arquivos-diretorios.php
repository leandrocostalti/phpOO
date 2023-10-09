<!DOCTYPE html>
<?php
    // //abre o arquivo
    // $fd = fopen("arquivos/tutorial.txt", "r");
    // //ler o arquivo
    // while (!feof($fd)){
    //     //lê uma linha do arquivo
    //     $buffer = fgets($fd, 4096);

    //     //imprime a linha
    //     echo $buffer;
    // }
    // fclose($fd);

    // //abre o arquivo
    // $fp = fopen("arquivos/tutorial.txt", "w");

    // //escreve no arquivo
    // fwrite($fp, "João Lucas\n");
    // fwrite($fp, "Aerlen Brena\n");
    // fwrite($fp, "Francisco Leandro\n");

    // //fecha o arquivo
    // fclose($fp);

    // //file_get_contents
    // echo file_get_contents('arquivos/tutorial.txt');

    // //lê o arquivo para um array $arquivo
    // $arquivo = file("arquivos/tutorial.txt");
    // //exibe o conteúdo
    // echo $arquivo[0]."<br>";
    // echo $arquivo[1]."<br>";
    // echo $arquivo[2]."<br>"; 

    // //copia de arquivos
    // $origem = "arquivos/tutorial.txt";
    // $destino = "arquivos/subarquivos/tutorial-copy.txt";
    // if(copy($origem, $destino)){
    //     echo "Cópia efetuada!";
    // }else{
    //     echo "Cópia não efetuada!";
    // }

    // //Renomear um arquivo
    // $origem = "arquivos/subarquivos/tutorial-copy.txt";
    // $destino = "arquivos/subarquivos/tutorial-copy2.txt";
    // if(rename($origem, $destino)){
    //     echo "Renomeado com Sucesso!";
    // }else{
    //     echo "Arquivo não Renomeado!";
    // }

    // //Deleta um arquivo
    // $arquivo = "arquivos/subarquivos/tutorial-copy2.txt";
    // if (unlink($arquivo)) {
    //     echo "Arquivo deletado!";
    // } else {
    //     echo "Arquivo não deletado!";
    // }

    // //Verifica a existência de um arquivo ou diretório
    // $arquivo = "arquivos/tutorial.txt";
    // if (file_exists($arquivo)) {
    //     echo "Arquivo existente";
    // } else {
    //     echo "Arquivo não existente";
    // }
    
    // //Verifica se é um arquivo
    // $arquivo = "arquivos/subarquivos/tutorial-copy2.txt";
    // if (is_file($arquivo)) {
    //     echo "É um Arquivo!";
    // } else {
    //     echo "Não é um Arquivo";
    // }

    //Criar diretório com MKDIR
    // $dir = 'arquivos/diretorio';
    // if (mkdir($dir, 0777)) {
    //     echo "$dir criado com sucesso!";
    // }else{
    //     echo "$dir não foi possível criar diretório!";
    // }