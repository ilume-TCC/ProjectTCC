
<!DOCTYPE html>
    <!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
            <!-- ===== Iconscout CSS ===== -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

            <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="./../css/account.css">
            
            <!--<title>Login & Registration Form</title>-->
    </head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Entrar</span>

                <form action="../methods/login.php" method="post">
                    <div class="input-field">
                        <input type="text" placeholder="Digite seu email" required maxlength="100" autofocus name="email">
                        <i class="uil uil-envelope icon"></i>
                    </div>

                    <div class="input-field">
                        <input type="password" class="password" placeholder="Digite sua senha" required maxlength="20" name="password">
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Lembre-me</label>
                        </div>
                        
                        <a href="#" class="text">Esqueceu sua senha?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Entrar">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Não é cadastrado?
                        <a href="#" class="text signup-link">Cadastre-se agora.</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Cadastrar</span>

                <form action="../methods/cadastro.php" method="post">
                    <div class="input-field">
                        <input type="text" placeholder="Crie seu nome de usuário" required maxlength="9" autofocus name="nome">
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="email" placeholder="Digite seu email" required maxlength="100" name="email">
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Crie sua senha" required maxlength="20" name="senha">
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Confirme sua senha" required maxlength="20" >
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">Eu aceitei todos os termos e condições</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="cadastrar">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Já é um membro?
                        <a href="#" class="text login-link">Volte e entre</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="./../js/account.js"></script>

</body>
</html>
