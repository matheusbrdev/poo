<?php

class Pessoa
{
    public string $nome;
    public int $idade;
    public float $peso;
    public string $nacionalidade;
    public string $cor;

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }
  
    public function setPeso(float $peso): void
    {
        $this->peso = $peso;
    }

    public function getPeso(): float
    {
        return $this->peso;
    }

    public function setNacionalidade(string $nacionalidade): void
    {
        $this->nacionalidade = $nacionalidade;
    }

    public function getNacionalidade(): string
    {
        return $this->nacionalidade;
    }

    public function setCor(string $cor): void
    {
        $this->cor = $cor;
    }

    public function getCor(): string
    {
        return $this->cor;
    }
}