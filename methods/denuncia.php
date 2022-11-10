<?php

    include('conexao.php');

    $cep_denuncia = $_POST['cep_denuncia'];
    $causa_denuncia = $_POST['causa_denuncia'];
    $num_residencia_denuncia = $_POST['num_residencia_denuncia'];
    $ref_denuncia = $_POST['ref_denuncia'];
    $arquivo_denuncia = $_FILES['arquivo_denuncia'];
    
    $sql = "INSERT INTO `denuncia` (`id_denuncia`, `cep_denuncia`, `causa_denuncia`, `arquivo_denuncia`, `ref_denuncia`, `num_residencia_denuncia`) VALUES (NULL, '$cep_denuncia', '$causa_denuncia', '$arquivo_denuncia', '$ref_denuncia', '$num_residencia_denuncia')";
    
    if(mysqli_query($conn, $sql)){
        header("location: ./../index.php");
    } else{
        echo "Erro: " . $sql . "</br>" . mysqli_error($conn);
    }
    mysqli_close($conn)
?>