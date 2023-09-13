<?php

namespace Polismorfirmo;

use DomainException;

abstract class Carro
{
    protected string $cor;
    protected int $portas;
    protected int $velocidade;
    protected string $modelo;
    protected bool $faroisLigados;
    protected string $transmissao;

    public function __construct(int $portas, string $modelo, string $cor, string $transmissao)
    {
        $this->portas = $portas;
        $this->cor = $cor;
        $this->velocidade = 0;
        $this->modelo = $modelo;
        $this->faroisLigados = false;
        $this->setTransmissao($transmissao);
    }

    public function getCor(): string 
    {
        return $this->cor;
    }

    public function getVelocidade(): int
    {
        return $this->velocidade;
    }

    public function ligarFarois(): self
    {
        $this->faroisLigados = true;

        return $this;
    }

    protected function setTransmissao(string $transmissao) 
    {
        $opcoes = ['Manual', 'Auto'];

        if(!(in_array($transmissao, $opcoes))) {
            throw new DomainException('Transmissao invalida');
        }

        $this->transmissao = $transmissao;
    }

    public function getTransmissao(): string 
    {
        return $this->transmissao;
    }

    abstract public function acelerar();
}