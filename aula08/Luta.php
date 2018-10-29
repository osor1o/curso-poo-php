<?php

class Luta
{
    //Attributes
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //Public Methods
    public function marcarLuta ($l1, $l2) {
        if(
            $l1->getCategoria() === $l2->getCategoria()
            && $l1 != $l2
        ) {
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }

    public function lutar() {
        if($this->getAprovada()) {
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            $vencedor = rand(0,2);

            switch($vencedor) {
                case 0://Empate
                    echo "<p>Empatou!</p>";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                break;
                case 1://Desafiado Vence
                    echo "<p>{$this->getDesafiado()->getNome()} venceu!</p>";
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                break;
                case 2://Desafiante Vence
                    echo "<p>{$this->getDesafiante()->getNome()} venceu!</p>";
                    $this->getDesafiado()->perderLuta();
                    $this->getDesafiante()->ganharLuta();
                break;
            }

        } else {
            echo "<p>Luta não pode acontecer</p>";
        }
    }

    //Especial Methods 
    public function getDesafiado()
    {
        return $this->desafiado;
    }
    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }
    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;
    }

    public function getRounds()
    {
        return $this->rounds;
    }
    public function setRounds($rounds)
    {
        $this->rounds = $rounds;
    }
    
    public function getAprovada()
    {
        return $this->aprovada;
    }
    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;
    }
}

?>