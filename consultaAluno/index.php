<!--Desenvolva uma classe Aluno que contenha o Nome, Cidade, Bairro e Curso(Informática para Internet, Desenvolvimento para sistema, Front end e Back end). Depois mostrar essas informações na tela -->

<?php 
   include "Pessoa.php";
   $aluno = $cidade = $bairro = $curso = $mensagem ='';
   
   
   if ($_SERVER['REQUEST_METHOD']=='POST') {
    $aluno = $_POST ['aluno']?? '';
    $cidade = $_POST ['cidade']?? '';
    $bairro = $_POST ['bairro']?? '';
    $curso = $_POST ['curso']?? '';

   
   //Criação do Objeto

    $pessoa = new Pessoa($aluno,$cidade,$bairro,$curso);  
   

  //CRIAR METHODO

    $mensagem = $pessoa->mensagem();
   
   }

    $nome_display = $aluno;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta ALuno</title>
</head>
<body>
    <h1>Consulta Aluno</h1>

    <form action="" method="post">
        <label for="nome"> Digite o nome do aluno </label>
        <input type="text" id='nome' name='aluno' value='<?php echo $aluno?>'; placeholder="nome do aluno">
        <label for="cidade"> Digite a cidade</label>
        <input type="text" id='cidade' name='cidade'value='<?php echo $cidade?>'; placeholder="cidade do aluno">
        <label for="bairro"> Digite o bairro:</label>
        <input type="text" id ='bairro' name='bairro' value='<?php echo $bairro?>'; placeholder="bairro do aluno">
        <br> <br>
        <label for="curso" id= "curso"> Curso: </label>
        <select name="curso" id="curso">
            <option value="Informática para Internet" <?php echo ($curso == 'Informatica para Internet' ? 'selected' : '');?>>Informática para Internet</option>
            <option value="Desenvolmento para Sistemas" <?php echo ($curso == 'Desenvolvimento para Sistemas' ? 'selected' : ''); ?>>Desenvolmento para Sistemas</option>
            <option value="Front end" <?php echo ($curso == 'Front end' ? 'selected' : ''); ?>>Front end</option>
            <option value="Back end" <?php echo ($curso == 'Back end' ? 'selected' : ''); ?>>Back end</option>
        </select>
    
        </select>
        <button type="submit">Consulta</button>
    </form>

    <?php  if ($mensagem!==''){echo"<h2> Resultado: $mensagem . </h2>";
    }
    ?> 

</body>
</html>