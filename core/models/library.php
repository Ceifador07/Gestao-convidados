<?php

namespace core\models;

use core\classes\Databases;

class library
{

    // ====================================================================================
    public function VerificarNome()
    {
        $db = new Databases();
        $paramentro = [
            ':nome' => strtolower(trim($_POST['nome'])),
        ];
        $dados = $db->select("SELECT * from convidados WHERE nome = :nome", $paramentro);
        return $dados;
    }
    // ====================================================================================

    public function addConvidados()
    {
        $db = new Databases();
        $paramentro = [
            ':nome' => strtolower(trim($_POST['nome'])),
            ':apelido' => strtolower(trim($_POST['apelido'])),
            ':tipo' => trim($_POST['Tipo']),
            ':mesas' => trim($_POST['mesa']),
            ':status' => 1
        ];
        $db->insert("INSERT INTO convidados VALUES(
            0,
            :nome,
            :apelido,
            :tipo,
            :mesas,
            :status,
            NOW()
        )", $paramentro);
    }
    public function Listas_Mesas()
    {
        $db = new Databases();
        $resultado = $db->select("SELECT * FROM mesas where status =  1");
        return $resultado;
    }
    public function Listas_Parentesco()
    {
        $db = new Databases();
        $resultado = $db->select("SELECT * FROM parentesco where status =  1");
        return $resultado;
    }

    public function Listas_Convidados()
    {
        $db = new Databases();
        $Convidado = $db->select("SELECT c.nome,c.apelido,c.id,p.Tipo,m.NomeMesa,c.status FROM convidados c INNER JOIN parentesco p on p.id = c.parentesco  INNER JOIN mesas m on m.id = c.mesas");
        return $Convidado;
    }
    public function adicionarMesa()
    {
        $db = new Databases();
        $paramentros = [
            ':nome' => strtolower((trim($_POST['nome']))),
            ':status' => 1
        ];

        $db->insert("
            INSERT INTO mesas VALUES(
                0,
                :nome,
                :status,
                NOW()
                )", $paramentros);
    }
    public function adicionarParentesco()
    {
        $db = new Databases();
        $paramentros = [
            ':nome' => strtolower((trim($_POST['tipo']))),
            ':status' => 1
        ];

        $db->insert("
            INSERT INTO parentesco VALUES(
                0,
                :nome,
                :status,
                NOW()
                )", $paramentros);
    }

    public function ChegadaConvidd()
    {
        $paramentros = [
            ':id' => $_POST['id'],
            ':status' => 0
        ];
        $db = new Databases();
        $db->update("UPDATE convidados SET status = :status WHERE id = :id", $paramentros);
        return true;
    }

    public function SelecionarConvidado()
    {
        $paramentros = [
            ':id' => $_POST['id'],
        ];
        $db = new Databases();
        $dados = $db->select("SELECT c.nome,c.apelido,c.id,p.Tipo,m.NomeMesa,c.status FROM convidados c INNER JOIN parentesco p on p.id = c.parentesco  INNER JOIN mesas m on m.id = c.mesas WHERE c.id = :id", $paramentros);
        return $dados;
    }
    public function BuscarDadoBolo()
    {
        $paramentros = [
            ':id' => $_POST['id'],
        ];
        $db = new Databases();
        $dados = $db->select("SELECT * FROM bolos  WHERE id = :id", $paramentros);
        return $dados;

    }



    public function AdicionarBolos($ext)
    {
        $db = new Databases();
        $pasta = "assets/images/";
         
        $nome_actual = md5(uniqid(time())).$ext;
        $tmp = $_FILES['imagem']['tmp_name']; //caminho temporário da imagem

        $paramentro = [
            ':nome' => trim($_POST['nome']),
            ':images' => $nome_actual,
            ':status' => 0
        ];
        $db->insert(" INSERT INTO bolos VALUES(
            0,
            :nome,
            :images,
            :status,
            NOW()
            )", $paramentro);
        move_uploaded_file($tmp,$pasta.$nome_actual);
        return true;

    }

    public function lista_Bolos()
    {
        $db = new Databases();
        $livros = $db->select("SELECT * FROM bolos ");
        return $livros;
    }

    public function RemoverConvidado(){
        $db = new Databases();
        $paramentros = [
            ':id' => $_POST['id'],
        ];
        $db->delete("DELETE FROM convidados where id = :id ", $paramentros);
        return true;
    }


}
