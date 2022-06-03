<?php
    $para = "vendas@ibti.org.br";
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $assunto = $_POST['assunto'];
    $empresa = $_POST['empresa'];
    $cargo = $_POST['cargo'];
    
    $mensagem = "<strong>Nome: </strong>".$nome;
    $mensagem .= "<br><strong>Email: </strong>".$email;
    $mensagem .= "<br><strong>Empresa: </strong>".$empresa;
    $mensagem .= "<br><strong>Cargo/Função: </strong>".$cargo;
    $mensagem .="<br> <strong> Mensagem: </strong>".$_POST['message'];
    $port = 587;

    $headers =  "Content-Type:text/html; charset=UTF-8\n";
    $headers .= "From:  plataforma.ibti.org.br<in-v3.mailjet.com>\n";
    $headers .= "X-Sender:  <in-v3.mailjet.com>\n";
    $headers .= "X-Mailer: PHP  v".phpversion()."\n";
    $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
    $headers .= "Return-Path:  <vendas@ibti.org.br>\n";
    $headers .= "MIME-Version: 1.0\n";
    
    if (!mail($para, $assunto, $mensagem, $headers, $port)){
        echo "Erro ao enviar";
    } else{
        echo  "<script>alert('Email enviado com Sucesso!');location.href=\"/index.html\";</script>";
    }

?>