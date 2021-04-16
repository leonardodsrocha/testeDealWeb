<?php
    class BD {
        private $servidor = "localhost";
        private $bancoDados = "testecrud";
        private $usuario = "root";
        private $senha = "";
        public $mysqli;

        function conectar(){
            $this->mysqli = mysqli_connect(
                $this->servidor,
                $this->usuario,
                $this->senha,
                $this->bancoDados);
            if (!$this->mysqli) { //verificar se o acesso ao banco de dados deu errado
                echo("Conexao negada!");
                exit; //para o codigo
            }
        }

        function PesquisaDados($sql){
            $result = $this->mysqli->query($sql);
            return $result; //retorno todos as linhas e colunas da query
        }

        function deletaDados($sql){
            $this->mysqli->query($sql);
        }
    }
?>