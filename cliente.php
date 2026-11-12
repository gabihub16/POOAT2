<?php
// Criando a classe Oculos
class Oculos
{
    // Atributos 
    private string $marca;
    private float $grau = 0;
    private bool $emUso;

    // Método
    public function __construct(string $m, float $g, bool $u)
    {
        $this->marca = $m;
        $this->setGrau($g);
        $this->emUso = $u;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getGrau()
    {
        return $this->grau;
    }

    public function setGrau($g)
    {
        if ($g < -20 || $g > 20) {
            echo "O grau deve ficar entre -20 e 20.\n";
        } else {
            $this->grau = $g;
        }
    }

    public function getEmUso()
    {
        return $this->emUso;
    }
    public function colocar()
    {
        if ($this->emUso == true) {
            echo "Os óculos já estão em uso.\n";
        } else {
            $this->emUso = true;
            echo "Óculos colocados.\n";
        }
    }

    public function retirar()
    {
        if ($this->emUso == false) {
            echo "Os óculos já foram retirados.\n";
        } else {
            $this->emUso = false;
            echo "Óculos retirados.\n";
        }
    }
}

$oculos = new Oculos("Ray-Ban", 2.5, false);

echo "Marca: {$oculos->getMarca()}<br>";
echo "Grau: {$oculos->getGrau()}<br>";
$estado = $oculos->getEmUso() ? "Sim" : "Não";
echo "Está em uso? {$estado}<br><br>";

class Produto
{
    private string $nome;
    private float $preco;

    public function __construct(string $n, float $p)
    {
        $this->nome = $n;
        $this->preco = $p;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }
}

// Dois Produto
$p1 = new Produto("Garrafinha", 20.00);
$p2 = new Produto("Coca-cola", 9.50);


echo "Produto: " . $p1->getNome() . "<br>";
echo "R$ " . $p1->getPreco() . "<br><br>";
echo "Produto: " . $p2->getNome() . "<br>";
echo "R$ " . $p2->getPreco() . "<br>";
?>
