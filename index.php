<?php
/**
 * Created by PhpStorm.
 * User: rdoring
 * Date: 1/26/14
 * Time: 6:05 PM
 */
//Erros gerados fora da logica de programacao -- Erros que podemos antecipar
try{
    include_once 'Arquivos.class.php';

    $abrir = new Arquivos();
    $arquivo = $abrir->Abrir('Meuarquivo.txt');
    echo $arquivo;
}catch (Exception $exc){
    echo $exc->getFile().' : '."\n".$exc->getLine()." # "."\n".$exc->getMessage()."\n";
}