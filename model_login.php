<?php

class Login
{

    public $id;
    public $usuario;
    public $senha;
    public $email;
    public $token;
    public $ip_conexao;

    function set_id($id)
    {
        $this->id = $id;
    }
    function get_id()
    {
        return $this->Id;
    }

    function set_usuario($usuario)
    {
        $this->usuario = $usuario;
    }
    function get_usuario()
    {
        return $this->usuario;
    }

    function set_senha($senha)
    {
        $this->senha = $senha;
    }
    function get_senha()
    {
        return $this->senha;
    }

    function set_email($email)
    {
        $this->email = $email;
    }
    function get_email()
    {
        return $this->email;
    }


    function set_token($token)
    {
        $this->token = $token;
    }
    function get_token()
    {
        return $this->token;
    }

    function set_ip_conexao($ip_conexao)
    {
        $this->ip_conexao = $ip_conexao;
    }
    function get_ip_conexao()
    {
        return $this->ip_conexao;
    }
}