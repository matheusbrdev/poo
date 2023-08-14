<?php

class Pessoa
{
    private string $nome;
    private int $idade;
    private string $corDosOlhos;
    private string $genero;
    private float $altura;
    private float $peso;

    public function __construct(string $nome, int $idade, string $corDosOlhos, string $genero, float $altura, float $peso)
    {
        $this->nome = $nome;
        $this->setIdade($idade);
        $this->setCorDosOlhos($corDosOlhos);
        $this->setGenero($genero);
        $this->altura = $altura;
        $this->peso = $peso;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    private function setIdade(int $idade): void 
    {
        if (($idade < 0) || ($idade > 100)) {
            echo "Idade informada é invalida" . PHP_EOL;
            exit();
        }

        $this->idade = $idade;
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
    public function getPeso(): float
    {
        return $this->peso;
    }
}
