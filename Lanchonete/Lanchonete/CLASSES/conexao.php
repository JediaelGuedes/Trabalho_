
<?php



function conexao(){

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nome_banco = "lanchonete"; 

    $conexao = NULL;

    try{
        $conexao = new PDO(
            "mysql:host=$servidor;dbname=$nome_banco", $usuario, $senha
        );

    }catch(PDOException $e){
      echo "Erro de conexao".$e->getMessage();
    }


    return $conexao;

}

?>




