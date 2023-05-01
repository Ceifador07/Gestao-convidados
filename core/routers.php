<?php
$route = [
    'dashboard' =>'Main@index',
    'convidados' =>'Main@gerir',
    'addConvidados' =>'Main@adicionar',
    'Bolos' =>'Main@Bolos',
    // 'addBolos' =>'Main@addBolos',
    'Mesas' =>'Main@Mesas',
    'Parentesco' =>'Main@Parentesco',
    // cadastrar 
    'adicionarConvidado' => 'Main@adicionarConvidado',
    'addMesas' => 'Main@addMesas',
    'AddParentesco' => 'Main@AddParentesco',
    'ChegadaConvidado' => 'Main@ChegadaConvidado',
    'BuscarDados' => 'Main@BuscarDados',
    'editarConvidado' => 'Main@editarConvidado',
    'AddBolos' => 'Main@AddBolos',
    'BuscarDadoBolo' => 'Main@BuscarDadoBolo',
    'RemoverUsuario' => 'Main@RemoverUsuario',
  
];

$action = 'dashboard';

if(isset($_GET['url'])){
    if(!key_exists($_GET['url'], $route)){
        $action = 'dashboard';
    }else{
        $action = $_GET['url'];
    }
}

$partes = explode('@', $route[$action]);

$controller = 'core\\controllers\\'.ucfirst($partes[0]);

$methodo = $partes[1];

$controllar = new $controller();
$controllar->$methodo();


?>