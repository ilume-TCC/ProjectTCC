<?php

    include('conexao.php');

    $nome_usuario = $_POST['nome'];
    $email_usuario = $_POST['email'];
    $senha_usuario = md5($_POST['senha']);
    
    $sql = "INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario, id_tipo_usuario) VALUES ('$nome_usuario', '$email_usuario', '$senha_usuario', '2')";
    
    if(mysqli_query($conn, $sql)){
        header("location: ./../index.php");
    } else{
        echo "Erro: " . $sql . "</br>" . mysqli_error($conn);
    }
    mysqli_close($conn)
?>