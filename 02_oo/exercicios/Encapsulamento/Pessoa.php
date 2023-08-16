<?php

class Pessoa
{
    private string $nome;
    private int $idade;
    private string $corDosOlhos;
    private string $genero;
    private float $altura;
    private float $peso;

    public function __construct(string $nome, string $corDosOlhos, string $genero)
    {
        $this->nome = $nome;
        $this->setCorDosOlhos($corDosOlhos);
        $this->setGenero($genero);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        if (($idade < 0) || ($idade > 100)) {
            echo "Idade informada é invalida" . PHP_EOL;
            exit();
        }

        $this->idade = $idade;

        return $this;
    }

    private function setCorDosOlhos(string $corDosOlhos): void
    {
        $opcoes = ["Azul", "Castanho", "Verde", "Preto", "Rosa"];

        if(in_array($corDosOlhos, $opcoes)) {
            $this->corDosOlhos = $corDosOlhos;
            return;
        }

        echo "Cor dos olhos inválida" . PHP_EOL;
        exit();
    }

    public function getCorDosOlhos(): string
    {
        return $this->corDosOlhos;
    }

    private function setGenero(string $genero): void
    {
        $opcoes = ["Masculino", "Feminino"];

        if(in_array($genero, $opcoes)) {
            $this->genero = $genero;
            return;
        }

        echo "Genero inválido" . PHP_EOL;
        exit();
    }

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function setAltura(float $altura): self
    {
        if(($altura < 0) || ($altura > 2.20)){
            echo "Altura inválida";
            exit();
        }

        $this->altura = $altura;

        return $this;
    }

    public function getPeso(): float
    {
        return $this->peso;
    }

    public function setPeso(float $peso): self
    {
        if(($peso < 0) && ($peso > 140) ) {
            echo "Peso inválido";
            exit();
        }

        $this->peso = $peso;

        return $this;
    }
}
