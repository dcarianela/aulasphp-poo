<?php

class Cliente
{
    private string $nome;
    private string $email;
    private Situacao $situacao;

    // Método Construtor (sempre é executado automaticamente ao criar objeto)
    public function __construct(
        string $nome, string $email, Situacao $situacao = Situacao::INATIVO
        /* Definindo a situação INATIVO como valor padrão para o parâmetro situacao no construtor */
        )
    {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSituacao($situacao);
    }
    
    private function setSituacao(Situacao $situacao):void {
        $this->situacao = $situacao;
    }

    public function getSituacao():Situacao {
        return $this->situacao;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    
    public function setEmail(string $email): void
    {
        if( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
            throw new InvalidArgumentException("E-mail inválido!");
        }
        $this->email = $email;
    }
    
    /* Métodos getters: responsáveis por acessar/ler os dados */
    public function getNome(): string
    {
        return $this->nome;
    }
    
    public function getEmail(): string
    {
        return $this->email;
    }
    
}

