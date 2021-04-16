<?php

class Medico
{
    private $pdo;
    public $msgErro = ""; //tudo ok

    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        global $msgErro;

        try {
            $pdo = new PDO("mysql:dbname=" . $nome . ";host=" . $host, $usuario, $senha);
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        }
    }

    //Função para insert dos médicos
    public function cadastraMedico($nome, $telefone, $CRM, $espec1, $espec2)
    {
        //Verifica se os todos os campos são diferentes de vazios e se as especializações não são iguais
        if (!empty($nome) && !empty($telefone) && !empty($CRM) && !empty($espec1) && !empty($espec2) && $espec1 != $espec2) {
            global $pdo;
            
            //Verifica se ja existe algum médico registrado com mesmo CRM
            $sql = $pdo->prepare("SELECT medId FROM tbmedicos WHERE medCRM = :c");
            $sql->bindValue(":c", $CRM);
            $sql->execute();

            //Conta as linhas retornadas, se for igual a 0 insere normalmente o médico, senão retorna false
            if ($sql->rowCount() == 0) {
                $sql = $pdo->prepare("INSERT INTO tbmedicos (medNome, medTelefone, medCRM, medEspec1, medEspec2) VALUES (:n, :t, :c, :e1, :e2)");
                $sql->bindValue(":n", $nome);
                $sql->bindValue(":t", $telefone);
                $sql->bindValue(":c", $CRM);
                $sql->bindValue(":e1", $espec1);
                $sql->bindValue(":e2", $espec2);
                $sql->execute();

                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    //Função para update dos médicos
    public function alterarMedico($id, $nome, $telefone, $CRM, $espec1, $espec2)
    {
        global $pdo;

        //Verifica se os todos os campos são diferentes de vazios e se as especializações não são iguais
        if (!empty($nome) && !empty($telefone) && !empty($CRM) && !empty($espec1) && !empty($espec2) && !empty($id) && $espec1 != $espec2) {
            //Verifica se existe algum médico registrado com mesmo CRM
            $sql = $pdo->prepare("SELECT medId FROM tbmedicos WHERE medCRM = :c LIMIT 1");
            $sql->bindValue(":c", $CRM);
            $sql->execute();

            //Conta as linhas retornadas, se for igual a 0 atualiza normalmente o médico, senão retorna false
            if ($sql->rowCount() == 0) {
                $sql = $pdo->prepare("UPDATE tbmedicos SET medNome = :n, medTelefone = :t, medCRM = :c, medEspec1 = :p, medEspec2 = :s WHERE medId = :i");
                $sql->bindValue(":i", $id);
                $sql->bindValue(":n", $nome);
                $sql->bindValue(":t", $telefone);
                $sql->bindValue(":c", $CRM);
                $sql->bindValue(":p", $espec1);
                $sql->bindValue(":s", $espec2);
                $sql->execute();

                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    //Função para delete dos médicos
    public function excluirMedico($id)
    {
        global $pdo;

        //Verifica se os todos os campos são diferentes de vazios
        if (!empty($id)) {
            //Verifica se existe o médico a ser excluido
            $sql = $pdo->prepare("SELECT medId FROM tbmedicos WHERE medId = :i LIMIT 1");
            $sql->bindValue(":i", $id);
            $sql->execute();

            //Conta as linhas retornadas, se for igual a 0 exclui normalmente o médico, senão retorna false
            if ($sql->rowCount() != 0) {
                $sql = $pdo->prepare("DELETE FROM tbmedicos WHERE medId = :i");
                $sql->bindValue(":i", $id);
                $sql->execute();

                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
