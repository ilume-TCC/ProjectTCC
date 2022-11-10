<?php
    session_start();

    require_once('../methods/verification.php');

    verification('../pages/account.php');

    require('../methods/conexao.php');

?>

<!DOCTYPE html>

<!-- HTML da página do account -->

<html>

<head>
    
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title> iLume </title>

<!-- CSS -->
<link rel="stylesheet" href="./../css/account.css">

<!-- Icons -->
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/0d966a43c2.js" crossorigin="anonymous"></script>  
                
</head>

<body>
        
<main>

<!-- Div que leva o form para a direita -->
<div class="right">

<!-- Botão de ligar a luminária -->
<button class="but" type="button" onclick="toggleBtn()" id="btn"><span></span></button>

<!-- Section dos forms -->
<section class="container forms">

<!-- Form Conta -->
<div class="form login">


<!-- Entrar -->
<header>Perfil</header><br><br>

    <form role="form" action="" method="post" enctype="multipart/form-data">

            <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" required value="<?php echo $_SESSION['nome_usuario'] ?>">
                </div>
                  
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" required value="<?php echo     $_SESSION['email_usuario']?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" name="senha" id="telefone" required value="<?php echo $_SESSION['senha_usuario'] ?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Avatar do usuário</label>
                <div class="input-group">
                         
                </div>
                </div>

            </div>
                <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" name="upPerfil" class="btn btn-primary">Alterar dados do usuário</button>
            </div>
    </form>



    <div class="field button-field">
        <a href="../methods/logout.php">
            <button type="submit">Sair</button>
        </a>
    </div>
    
</form>

        
</div>


</section>

</div>

<!-- Div que leva o form para a esquerda -->
<div class="footer-account">
    
    
    

<!-- Div que organiza oque fica dentro -->
<div>
    <div class="align-account"> <br>           
            
    <ul>
        <li><i class="cb fa-regular fa-circle-left"></i><a href="../">Voltar</a>
        </li>
    </ul>

    
    </div> 
</div>
</div>

</main>

<!-- JS do account -->
<script src="./../js/account.js"></script>

</body>

</html>