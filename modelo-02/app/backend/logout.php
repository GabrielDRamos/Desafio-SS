<?php

session_start();
//Retorna mensagem de erro ou de logout
if(empty($_SESSION)){
    header("Location: ../views/signin.php?msgErro=Você precisa logar!");
}else{
    session_destroy();
    header("Location:  ../views/signin.php?msgSucesso=Você saiu!");
}