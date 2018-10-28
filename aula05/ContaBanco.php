<?php

class ContaBanco
{

    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        
        if ($t == "CC") 
        {
            $this->setSaldo(50);
        }

        elseif ($t == "CP")
        {
            $this->setSaldo(150);
        }
    }

    public function fecharConta()
    {
        if ($this->getSaldo() > 0) 
        {
            echo '<p>Conta ainda tem dinheiro, não posso fecha-la</p>';
        }
        elseif ($this->getSaldo() < 0) 
        {
            echo '<p>Conta está em débito. Impossível encerrar!</p>';
        }
        else
        {
            $this->setStatus(false);
            echo "<p>Conta de: {$this->getDono()} fechada com sucesso!</p>";
        }
    }

    public function depositar($v)
    {
        if ($this->getStatus())
        {
           $this->setSaldo($this->getSaldo() + $v);
           echo "<p>Deposito de {$v} autorizado na conta de: {$this->getDono()}</p>";
        }
        else
        {
            echo '<p>Conta fechada, não consigo depositar</p>';
        }
    }

    public function sacar($v)
    {
        if ($this->getStatus())
        {
            if ($this->getSaldo() >= $v)
            {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de {$v} autorizado na conta de: {$this->getDono()}</p>";
            }
            else
            {
                echo '<p>Saldo Insuficiente</p>';
            }
        }
        else
        {
            echo '<p>A conta está fechada</p>';
        }
    }

    public function pagarMensalidade()
    {
        if ($this->getTipo() == "CC")
        {
            $v = 12;
        }
        elseif ($this->getTipo() == "CP") 
        {
            $v = 20;
        }

        if ($this->getStatus())
        {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de {$v} autorizado na conta de: {$this->getDono()}</p>";
        }
        else
        {
            echo '<p>Problemas com a conta. Não posso cobrar</p>';    
        }
    }

    //Métodos especiais
    public function __construct()
    {
        echo '<p>Conta criada com sucesso</p>';
        $this->setSaldo(0);
        $this->setStatus(false);
    }

    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;

        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setDono($dono)
    {
        $this->dono = $dono;

        return $this;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
    
}

?>