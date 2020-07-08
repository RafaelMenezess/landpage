<?php
    session_start();
    include_once 'conexao.php';

    $SendCad = filter_input(INPUT_POST, 'SendCad', FILTER_SANITIZE_STRING);
    if($SendCad){
        //Receber Dados
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
        $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

     

        //Inserir no BD
        $sql = "INSERT INTO mensagens_contato (nome, email, assunto, mensagem) VALUES ( '$nome', '$email', '$assunto', '$mensagem')";

        if($insert_msg_cont = $conectar->query($sql)){
            $_SESSION['msg'] = "<p  style='color:green',text-align: 'center';>Mensagem foi enviada</p>";
            header("Location: index.php");

    
        }else{
            $_SESSION['msg'] = "<p style='color:red;'>Mensagem não foi enviada</p>";
            header("Location: index.php");
    
        }
    }
?>