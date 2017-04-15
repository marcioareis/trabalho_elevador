<?php
/**
 * Class Pessoa
 */
class Pessoa
{
    protected $andarAtualPessoa;
    protected $elevador;
    public function __construct($andarAtualPessoa)
    {
        $this->andarAtualPessoa = $andarAtualPessoa;
        $this->elevador = new Elevador();
    }
    public function chamaElevador()
    {
        echo sprintf("Pessoa chama o elevador. Pessoa est� no " . $this->andarAtualPessoa . "� andar \n");
        $this->elevador->irParaOAndar($this->andarAtualPessoa);
    }
    
    public function vaiParaAndar($andar)
    {
        echo sprintf("Pessoa chama o " . $andar . "� andar. Pessoa est� no " . $this->andarAtualPessoa . "� andar. \n");
        $this->elevador->irParaOAndar($andar);
        $this->andarAtualPessoa = $andar;
    }

    public function entrarElevador()
    {
        echo sprintf("Pessoa entra no elevador. Pessoa est� no " . $this->andarAtualPessoa . "� andar \n");
        $this->elevador->entrar($this);
    }
    
}