<?php
class Produto {
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $ativo;
    private $fotoUrl; // Nova propriedade para armazenar o link da foto

    // Atualizando o construtor para aceitar foto_url como parâmetro opcional
    public function __construct($id = null, $nome = '', $descricao = '', $preco = 0.0, $ativo = 1, $fotoUrl = null) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->ativo = $ativo;
        $this->fotoUrl = $fotoUrl;  // Inicializa a foto_url, que é opcional
    }

    // Métodos Getters
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function getFotoUrl() {
        return $this->fotoUrl;  // Retorna o link da foto
    }

    // Métodos Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    public function setFotoUrl($fotoUrl) {
        $this->fotoUrl = $fotoUrl;  // Define o link da foto
    }
}
?>
