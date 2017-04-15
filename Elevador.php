<?php
/**
 * Class Elevador
 */
class Elevador
{
    protected $limitePessoas = 1;
    /**
     * @var int
     */
    private $andarElevador;
    /**
     * @var array
     */
    private $pessoas = array();
   
    public function __construct()
    {
        $this->andarElevador = 8;
    }

    public function getAndarElevador()
    {
        return $this->andarElevador;
    }

    public function entrar(Pessoa $pessoa)
    {
        $this->pessoas[] = $pessoa;
    }

    public function possuiPessoa()
    {
        return count($this->pessoas) > 0;
    }

    public function irParaOAndar($andar)
    {

        if ($andar >= $this->andarElevador) {
            
            for ($i = $this->andarElevador; $i <= $andar; $i ++) {
                echo sprintf("Elevador está no " . $i . "º andar. ");
                if ($this->possuiPessoa()) {
                    echo sprintf("Pessoa está no " . $i . "º andar. ");
                } else {
                    echo sprintf("Pessoa está no " . $andar . "º andar. ");
                }
                echo "\n";
                $this->andarElevador = $andar;
            }
        } else 
            if ($andar < $this->andarElevador) {
                
                for ($i = $this->andarElevador; $i >= $andar; $i --) {
                    echo sprintf("Elevador está no " . $i . "º andar.");
                    if ($this->possuiPessoa()) {
                        echo sprintf("Pessoa está no " . $i . "º andar. ");
                    } else {
                        echo sprintf("Pessoa está no " . $andar . "º andar. ");
                    }
                    echo "\n";
                    $this->andarElevador = $andar;
                }
            }
    }
}