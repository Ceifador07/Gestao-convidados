<?php

namespace core\controllers;


use core\classes\Store;
use core\models\library;


class Main
{


    public function index()
    {
        $library = new library();
        $Convidado = $library->Listas_Convidados();
        $mesas = $library->Listas_Mesas();
        $Parentesco = $library->Listas_Parentesco();
        $bolos = $library->lista_Bolos();
        $dados = [
            'Convidados' => $Convidado,
            'mesa' => $mesas,
            'Parentescos' => $Parentesco,
            'bolos'=>$bolos
        ];
        Store::Layout([
            'layout/header',
            'index',
            'layout/footer'
        ], $dados);
    }
    public function gerir()
    {
        $library = new library();
        $Convidado = $library->Listas_Convidados();
        $mesa = $library->Listas_Mesas();
        $Parentesco = $library->Listas_Parentesco();
        
        $dados = [
            'Convidados' => $Convidado,
            'mesas' => $mesa,
            'Parentescos' => $Parentesco,
            
        ];
        Store::Layout([
            'layout/header',
            'convidados',
            'layout/footer'
        ], $dados);
    }

    public function adicionar()
    {
        $library = new library();
        $mesa = $library->Listas_Mesas();
        $Parentesco = $library->Listas_Parentesco();
        $dados = [
            'mesas' => $mesa,
            'Parentescos' => $Parentesco
        ];
        Store::Layout([
            'layout/header',
            'addConvidados',
            'layout/footer'
        ], $dados);
    }
    public function Bolos()
    {
        $library = new library();
        $bolos = $library->lista_Bolos();
        $dados = [
            'bolos' =>$bolos
        ];
        Store::Layout([
            'layout/header',
            'Bolos',
            'layout/footer'
        ],$dados);
    }
    // public function addBolos()
    // {
    //     Store::Layout([
    //         'layout/header',
    //         'addBolos',
    //         'layout/footer'
    //     ]);
    // }
    public function adicionarConvidado()
    {
        $saida = 'Routas';

        if (empty($_POST['nome'])) {
            $saida = 'Preencha o Campo nome';
        } else if (empty($_POST['Tipo'])) {
            $saida = 'Escolha o Parantesco';
        } else if (empty($_POST['apelido'])) {
            $saida = 'Preencha o campo apelido';
        } else if (empty($_POST['mesa'])) {
            $saida = 'Selecione uma Mesa';
        } else {
            $library = new library();
            $resultado = $library->VerificarNome();

            if (count($resultado) > 0) {
                $saida = 'O nome Digitado ja Existe';
            } else {
                $library->addConvidados();
                $saida = 'REGISTADO COM SUCESSO';
            }
        }


        echo json_encode($saida);
    }
    public function Mesas()
    {
        $library = new library();

        $mesas = $library->Listas_Mesas();

        $dados = [

            'mesas' => $mesas,

        ];
        Store::Layout([
            'layout/header',
            'mesas',
            'layout/footer'
        ], $dados);
    }
    public function addMesas()
    {
        $saida = '';
        if (empty($_POST['nome'])) {
            $saida = 'Preencha o campo nome da Mesa';
        } else {
            $library = new library();
            $library->adicionarMesa();
            $saida = 'REGISTADO COM SUCESSO';
        }

        echo json_encode($saida);
    }


    public function Parentesco()
    {
        $library = new library();
        $Parentesco = $library->Listas_Parentesco();
        $dados = [
            'Parentescos' => $Parentesco
        ];
        Store::Layout([
            'layout/header',
            'Parentesco',
            'layout/footer'
        ], $dados);
    }

    public function AddParentesco()
    {
        $saida = '';
        if (empty($_POST['tipo'])) {
            $saida = 'Preencha o campo Tipo ou Grau de Parentesco';
        } else {
            $library = new library();
            $library->adicionarParentesco();
            $saida = 'REGISTADO COM SUCESSO';
        }

        echo json_encode($saida);
    }

    public function  ChegadaConvidado()
    {
        $saida = '';
        if (empty($_POST['id'])) {
            $saida = 'Nenhum id Existente';
        } else {
            $library = new library();
            $library->ChegadaConvidd();
            $saida = 'REGISTADO COM SUCESSO';
        }

        echo json_encode($saida);
    }
    
    public function BuscarDados()
    {
        $saida = '';
        if (empty($_POST['id'])) {
            $saida = 'Nenhum id Existente';
        } else {
            $library = new library();
            $saida = $library->SelecionarConvidado();
        }

        echo json_encode($saida);
    }
    public function editarConvidado()
    {
        // $saida = '';
        // if(empty($_POST['id'])){
        //     $saida = 'Nenhum id Existente';
        // }else{
        //     $library = new library();
        //     $saida = $library->SelecionarConvidado();
        // }

        // echo json_encode($saida);
    }

    public function AddBolos()
    {
        // if(isset($_POST)){
        //     $pasta = "assets/images/";
        //     $nome_imagem    = $_FILES['imagem']['name'];
        //     $tmp = $_FILES['imagem']['tmp_name'];
        //     move_uploaded_file($tmp,$pasta.$nome_imagem);
        // }

        // extensoes permitidas
        $permitidos = array(".jpg",".jpeg",".gif",".png", ".bmp");

        $images = $_FILES['imagem']['name'];
        // pegar a extensao do arquivo
        $ext = strtolower(strrchr($images,"."));

        if (empty($_POST['nome'])) {
            $saida = 'Preencha o campo Nome do bolo';
        } else if (empty($images)) {
            $saida = 'Escolha a imagem do Bolo';
        // verifica se a extensão está entre as extensões permitidas 
        }else if(!in_array($ext,$permitidos)){
            $saida = 'Arquivo de Imagem Nao reconhecida';
        } else {
            $library = new library();
            $saida = $library->AdicionarBolos($ext);
            $saida = 'REGISTADO COM SUCESSO';
        }
        echo json_encode($saida);
    }

    public function BuscarDadoBolo()
    {
        $saida = '';
        if (empty($_POST['id'])) {
            $saida = 'Nenhum id Existente';
        } else {
            $library = new library();
            $saida = $library->BuscarDadoBolo();
        }

        echo json_encode($saida);
    }
    public function RemoverUsuario(){

        $saida = '';
        if (empty($_POST['id'])) {
            $saida = 'Nenhum id Existente';
        } else {
            $library = new library();
            $saida = $library->RemoverConvidado();
            $saida = 'REGISTADO COM SUCESSO';
        }

        echo json_encode($saida);


    }



}
