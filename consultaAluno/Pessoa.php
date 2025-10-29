


<?php 
   class Pessoa {
    private $aluno;
    private $cidade;
    private $bairro;
    private $curso;

    public function __construct($aluno, $cidade, $bairro, $curso) {
        $this->aluno = $aluno;
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->curso = $curso;
    }
    function mensagem() {
        return "O Aluno {$this->aluno}, da cidade {$this->cidade}, bairro {$this->bairro} vai fazer o curso de : {$this->curso}";

    }
    

   }
?>

