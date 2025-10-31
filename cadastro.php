<?php
// SISTEMA DE CADASTRO DE PESSOAS NO CAMPUS IFTO
abstract class Pessoa {
    protected string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    abstract public function apresentar(): string;
}

class Estudante extends Pessoa {
    private string $curso;
    private string $matricula;

    public function __construct(string $nome, string $curso, string $matricula) {
        parent::__construct($nome);
        $this->curso = $curso;
        $this->matricula = $matricula;
    }

    public function apresentar(): string {
        return "Estudante {$this->nome} - Curso: {$this->curso} - Matrícula: {$this->matricula}";
    }
}

abstract class Funcionario extends Pessoa {
    protected string $cargo;
    protected float $salario;

    public function __construct(string $nome, string $cargo, float $salario) {
        parent::__construct($nome);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
}

class Professor extends Funcionario {
    private string $areaAtuacao;

    public function __construct(string $nome, string $cargo, float $salario, string $areaAtuacao) {
        parent::__construct($nome, $cargo, $salario);
        $this->areaAtuacao = $areaAtuacao;
    }

    public function apresentar(): string {
        return "Professor {$this->nome} - Cargo: {$this->cargo}, Área: {$this->areaAtuacao}, Salário: R$ " 
             . number_format($this->salario, 2, ',', '.');
    }
}

class Servidor extends Funcionario {
    private string $setor;

    public function __construct(string $nome, string $cargo, float $salario, string $setor) {
        parent::__construct($nome, $cargo, $salario);
        $this->setor = $setor;
    }

    public function apresentar(): string {
        return "Servidor {$this->nome} - Cargo: {$this->cargo}, Setor: {$this->setor}, Salário: R$ " 
             . number_format($this->salario, 2, ',', '.');
    }
}

class Visitante extends Pessoa {
    private string $documento;

    public function __construct(string $nome, string $documento) {
        parent::__construct($nome);
        $this->documento = $documento;
    }

    public function apresentar(): string {
        return "Visitante {$this->nome} - Documento: {$this->documento}";
    }
}

// EXEMPLO DE USO
$pessoasNoCampus = [
    new Estudante("Ana Souza", "Sistemas de Informação", "20231SIS001"),
    new Professor("Marcos Raimundo", "Docente", 7200.00, "Segurança da Informação"),
    new Servidor("José Ferreira", "Técnico Administrativo", 4100.00, "Secretaria Acadêmica"),
    new Visitante("Carlos Mendes", "RG 2022123-9")
];

echo "<h2>Cadastro de Pessoas no Campus IFTO</h2>";
echo "<ul>";
foreach ($pessoasNoCampus as $pessoa) {
    echo "<li>" . htmlspecialchars($pessoa->apresentar(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . "</li>";
}
echo "</ul>";
?>
