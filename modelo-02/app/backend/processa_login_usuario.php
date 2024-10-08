<?php 
require_once "../../core/pgconexao.php";



if(!empty($_POST)){
   try{
    session_start();
        //montar sql
        $sql = "SELECT nome, email FROM usuarios WHERE email = :email AND senha = :senha";

        //preparar sql
        $stmt = $pdo->prepare($sql);
        //organizar dados
        $dados = array(
            ':email' => $_POST['email'],
            ':senha' => md5($_POST['senha'])
        );
        //executar o sql
        $stmt->execute($dados);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
       if($stmt->rowCount() == 1){
        
        $_SESSION['nome'] = $result['nome'];
        $_SESSION['email'] = $result['email'];



        header("Location: ../../index.php");
       }else{
       
        header("Location: ../views/signin.php?msgErro=Email/senha inválidos!");
        session_destroy();
       }
       

   }catch(PDOException $e){
        die($e->getMessage());
   }
}else{
    header("Location: ../views/signin.php?msgErro=Você não tem permissão!");
}
die();

?>