<?php
//Classe de conexão com o banco de dados

// Parâmetros para a conexão com o banco
$servername ="localhost";
$banconame = "escola";
$user = "root";
$pwd  = "";

class Conexao {
	
	//Passando a conexão 
	protected $conexao;
// Função que conecta com o banco de dados
	public function conectar()
	{
		$this->conexao = new PDO("mysql:host=$servername;dbname=$banconame;charset=utf8",$user, $pwd);
	}
	// Função que desconecta do banco
	public function desconectar()
	{
		$this->conexao = null;
	}
	// Função que executa querys SQL, conecta no banco, retorna o ultimo ID inserido, e desconecta do banco   
	public function executar($sql)
	{
		$this->conectar();
		$this->conexao->query($sql);
        $lastId = $this->conexao->lastInsertId();
		$this->desconectar();
        return $lastId;
	}
// Função que busca os dados do banco de dados
	public function recuperarDados($sql)
	{
		$this->conectar();

        $retorno = $this->conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

		$this->desconectar();
		return $retorno;
	}
}