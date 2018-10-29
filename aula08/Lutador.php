<?php

class Lutador
{
    //Attributes
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    //Methods
    public function apresentar()
    {
        echo "<p>-------------------------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador {$this->getNome()}";
        echo " veio diretamente de {$this->getNacionalidade()},";
        echo " tem {$this->getIdade()} anos e pesa {$this->getPeso()} Kg";
        echo "<br>Ele tem {$this->getVitorias()} vitórias";
        echo " {$this->getDerrotas()} derrotas e {$this->getEmpates()} empates.</p>";
    }

    public function status()
    {
        echo "<p>-------------------------------------</p>";
        echo "<p>{$this->getNome()} é um peso {$this->getCategoria()}";
        echo " e ja ganhou {$this->getVitorias()} vezes";
        echo " perdeu {$this->getDerrotas()} vezes";
        echo " e empatou {$this->getEmpates()} vezes!</p>";
    }

    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias()+1);
    }

    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas()+1);
    }

    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates()+1);
    }

    //Especial Methods
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
    private function setCategoria()
    {
        if($this->getPeso() < 52.2) {
            $this->caterogia = "Inválido";
        } elseif($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } elseif($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        } elseif($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }

    public function getEmpates()
    {
        return $this->empates;
    }
    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }
}

?>