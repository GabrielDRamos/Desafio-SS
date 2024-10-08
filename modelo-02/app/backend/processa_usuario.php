<?php 
require_once "../../core/pgconexao.php";


if(!empty($_POST)){


   
    

    try {


         //verificar se email já existe
    $email = $_POST['email'];
    $sql = "SELECT FROM usuarios WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $dados = array(
        ':email' => $email
    );

    $stmt->execute($dados);
    if(($stmt->rowCount() == 1)){
        header("Location: ../views/cadastro.php?msgErro=Email já existe!");
        exit();
    }


        //montando sql

        $sql = "INSERT INTO usuarios
            (nome, email, senha)
            VALUES
                (:nome, :email, :senha)";

        //preparar a sql (pdo)
        $stmt= $pdo->prepare($sql);

        //Organizar dado
        $dados = array(
            ':nome' => $_POST['nome'],
            ':email' => $_POST['email'],
            ':senha' => md5($_POST['senha'])
        );

        //executando sql
        if($stmt->execute($dados)){
            
            header("Location: ../views/signin.php?msgSucesso=Cadastro feito com sucesso!");
        }
        
        
    }catch(PDOException $e){
        header("Location: ../views/signin.php?msgErro=Falha ao cadastrar!");
    }
}else{
    header("Location: ../views/signin.php?msgErro=Erro de acesso. ");
}
die();
?>