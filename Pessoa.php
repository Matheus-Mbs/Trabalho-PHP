<?php

    require_once('Data.php');

    abstract class Pessoa{
        private string $nome;
        private string $cpf;
        private string $sexo;
        private Data $dataNascimento;

        #================== Getters e Setters ==================

        public function getNome()
        {
                return $this->nome;
        }
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        public function getCpf()
        {
                return $this->cpf;
        }

        public function setCpf($cpf)
        {
                $this->cpf = $cpf;

                return $this;
        }

        public function getSexo()
        {
                return $this->sexo;
        }
        public function setSexo($sexo)
        {
                $this->sexo = $sexo;

                return $this;
        }

        public function getDataNascimento()
        {
                return $this->dataNascimento;
        }
        public function setDataNascimento($dataNascimento)
        {
                $this->dataNascimento = $dataNascimento;

                return $this;
        }

        #================== Métodos ==================

        public function __construct(string $nome, string $cpf, string $sexo, int $dia, int $mes, int $ano)
        {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->sexo = $sexo;
            $this->dataNascimento = new Data($dia, $mes, $ano);
        }

        public function imprimir()
        {
            echo "Nome: " . $this->nome . "<br>";
            echo "CPF: " . $this->cpf . "<br>";
            echo "Sexo: " . $this->sexo . "<br>";
            echo "Data de Nascimento: " . $this->dataNascimento . "<br>";
        }
    }

?>