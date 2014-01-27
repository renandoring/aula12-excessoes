<?php
/**
 * Created by PhpStorm.
 * User: rdoring
 * Date: 1/26/14
 * Time: 6:06 PM
 */

class Arquivos {
    function Abrir($arquivo){
        if(!$arquivo){
            throw new Exception('Arquivo não informado');
        }
        if(!file_exists($arquivo)){
            throw new Exception('Arquivo informado não existe!');
        }
        if(!$retorno = @file_get_contents($arquivo)){
            throw new Exception('Não foi possivel ler o arquivo.');
        }
        return $retorno;
    }
} 