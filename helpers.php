<?php

function tem_post() {
    if(count($_POST) > 0) {
        return true;
    }
    
    return false;
}

function traduz_ativo($ativo) 
{
    if($ativo == 1) 
    {
        return 'Sim';
    }

    return 'Não';
}

function traduz_data_para_banco($data) 
{
    if ($data == '') 
    {
        return "";
    }

    $partes = explode('/', $data);

    if(count($partes) != 3) 
    {
        return $data;
    }
 
    $objeto_data = DateTime::createFromFormat('d/m/Y', $data);

    return $objeto_data->format('Y-m-d');
}

function traduz_data_para_exibir($data) 
{
    if($data == "" OR $data == "0000-00-00") 
    {
        return "";
    }

    $partes = explode("-", $data);

    if(count($partes) != 3) 
    {
        return $data;
    }

    $objeto_data = DateTime::createFromFormat('Y-m-d', $data);
    
    return $objeto_data->format('d/m/Y');

}